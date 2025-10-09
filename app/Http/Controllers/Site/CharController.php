<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\{Char};
    use App\Http\Traits\{GlobalTrait,LikeableTrait};
    use Illuminate\Support\Facades\{Auth,Cookie};

    class CharController extends Controller {
        Use LikeableTrait,GlobalTrait;
        public function chars(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Personagens';
            $chars = Char::select('*')->orderBy('created_at', 'DESC')->paginate(3);
            return view('site/crystalcorp/chars/index', compact('chars','pageTitle','user'));
        }

        public function show(Char $char){
            $user = $this->getCurrentUser();
            //$char->load('likes');
            $isLiked = $user ? $char->isLikedBy($user) : false;
            $isDisliked = $user ? $char->isDislikedBy($user) : false;
            $likesCount = $char->likes()->where('liked', true)->count();
            $dislikesCount = $char->likes()->where('liked', false)->count();
            $pageTitle = 'Personagem';
            $char = Char::withLikes()->find($char->id);
            return view('site/crystalcorp/chars/character', compact('char','isLiked','isDisliked','likesCount','dislikesCount','pageTitle','user'));
        }

        public function likeStore(Char $char){
            $char->like(auth()->user());
            return redirect()->route('char.show', $char->slug);
        }

        public function likeDestroy(Char $char){
            $char->dislike(auth()->user());
            return redirect()->route('char.show', $char->slug);
        }

        public function react(Request $request, $slug) {
            $char = Char::where('slug', $slug)->firstOrFail();
            $liked = $request->input('action') === 'like';
            $user = $request->user();
            if (!$user) {return response()->json(['error' => 'Usuário não autenticado.'], 401);}
            $char->like($user, $liked);
            return response()->json([
                'likes' => $char->charsLikes()->where('liked', true)->count(),
                'dislikes' => $char->charsLikes()->where('liked', false)->count(),
                'isLiked' => $char->isLikedBy($user),
                'isDisliked' => $char->isDislikedBy($user),
            ]);
        }
    }
