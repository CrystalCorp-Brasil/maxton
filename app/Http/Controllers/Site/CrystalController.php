<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\{Char};
    use App\Http\Traits\GlobalTrait;
    use Illuminate\Support\Facades\{Auth,Cookie};

    class CrystalController extends Controller {
        Use GlobalTrait;
        public function chars(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Personagens';
            $chars = Char::select('*')->orderBy('created_at', 'DESC')->paginate(3);
            return view('site/crystalcorp/chars/index', compact('chars','pageTitle','user'));
        }

        public function show(Char $char){
            $user = $this->getCurrentUser();
            $pageTitle = 'Personagem';
            $char = Char::withCharsLikes()->find($char->id);
            return view('site/crystalcorp/chars/character', compact('char','pageTitle','user'));
        }
    }
