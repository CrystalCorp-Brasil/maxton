<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Traits\GlobalTrait;
    use App\Models\{Faq,FaqCategory,User};
    use Illuminate\Http\{RedirectResponse,Request};
    use Illuminate\Support\Facades\{Auth,Redirect,Storage};
    use Illuminate\Support\Str;
    use Illuminate\View\View;

    class FaqController extends Controller {
        Use GlobalTrait;
        public function index() {
            $user = $this->getCurrentUser();
            $faqs = Faq::userID($user->id)->with('user')->orderBy('posts.updated_at', 'DESC')->paginate(20);
            return \view ('admin/posts/index', compact('posts','user'));
        }
    }
