<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Http\Traits\GlobalTrait;
    use App\Models\{PostCategory,Post};
    use Illuminate\Support\Facades\{Auth,Cookie};

    class PostController extends Controller {
        Use GlobalTrait;
        public function editorials(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Editoriais';
            $cats = PostCategory::all();
            $posts = Post::catSlug('Editoriais')->with('user')->orderBy('created_at', 'DESC')->paginate(3);
            $visits = Post::with('user')->orderBy('visits', 'DESC')->limit(6)->get();
            return view('site/posts/posts', compact('cats','pageTitle','posts','visits','user'));
        }

        public function projects(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Projetos';
            $cats = PostCategory::all();
            $posts = Post::catSlug('Projetos')->with('user')->orderBy('created_at', 'DESC')->paginate(3);
            $visits = Post::with('user')->orderBy('visits', 'DESC')->limit(6)->get();
            return view('site/posts/posts', compact('cats','pageTitle','posts','visits','user'));
        }

        public function show(Post $post){
            $user = $this->getCurrentUser();
            $pageTitle = $post->title;
            $cats = PostCategory::all();
            $posts = Post::catSlug($post->slug)->with('user')->orderBy('created_at', 'DESC')->get();
            $visits = Post::with('user')->orderBy('visits', 'DESC')->limit(6)->get();
            if (!Cookie::has($post->id) && !Auth::check()) {
                Cookie::queue($post->id, 'counter-views', 24 * 60);
                $post->visits += 1;
                $post->save();
            }
            return view('site/posts/post',compact('cats','pageTitle','post','posts','visits','user'));
        }
    };
