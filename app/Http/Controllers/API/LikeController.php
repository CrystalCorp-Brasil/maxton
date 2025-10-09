<?php
    namespace App\Http\Controllers\API;

    use App\Http\Controllers\Controller;
    use App\Models\Like;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class LikeController extends Controller {
        public function show($type, $slug) {
            $model = $this->resolveModel($type, $slug);
            $modelClass = match ($type) {
                'char' => \App\Models\Char::class,
            };
            $likeable = $modelClass::where('slug', $slug)->firstOrFail();

            $user = Auth::user();
            return response()->json([
                'likes' => $model->likes()->where('liked', true)->count(),
                'dislikes' => $model->likes()->where('liked', false)->count(),
                'isLiked' => $user ? $model->isLikedBy($user) : false,
                'isDisliked' => $user ? $model->isDislikedBy($user) : false,
            ]);
    }

        public function react(Request $request, $type, $slug) {
            $model = $this->resolveModel($type, $slug);
            $user = Auth::user();
            $liked = $request->input('action') === 'like';
            $model->like($user, $liked);
            return response()->json([
                'likes' => $model->likes()->where('liked', true)->count(),
                'dislikes' => $model->likes()->where('liked', false)->count(),
                'isLiked' => $model->isLikedBy($user),
                'isDisliked' => $model->isDislikedBy($user),
            ]);
        }

        private function resolveModel($type, $slug) {
            $map = [
                'char' => \App\Models\Char::class,
                'post' => \App\Models\Post::class,
                'image' => \App\Models\Image::class,
            ];
            if (!isset($map[$type])) {abort(404, "Tipo inválido: $type");}
            $modelClass = $map[$type];
            return $modelClass::where('slug', $slug)->firstOrFail();
        }
    }
