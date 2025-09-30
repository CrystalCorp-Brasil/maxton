<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Models\Post;
    use Illuminate\Support\Facades\{Auth,Cookie};

    class PostController extends Controller {
        public function editorial(){
            $pageTitle = 'Editoriais';
            $posts = Post::select('*')->where('category','Editorial')->with('user')->orderBy('created_at', 'DESC')->paginate(10);
            return view('site/editorials/editorials', compact('posts','pageTitle'));
        }

        public function editorialShow(Post $post){
            $pageTitle = $post->title;
            if (!Cookie::has($post->id) && !Auth::check()) {
                Cookie::queue($post->id, 'counter-views', 24 * 60);
                $post->visits += 1;
                $post->save();
            }
            return view('site/editorials/editorial',compact('post','pageTitle'));
        }
    };
