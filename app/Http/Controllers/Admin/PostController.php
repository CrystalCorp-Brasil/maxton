<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\{PostRequest,PostUploadRequest};
    use App\Http\Traits\GlobalTrait;
    use App\Models\{Post,PostCategory,User};
    use Illuminate\Http\{RedirectResponse,Request};
    use Illuminate\Support\Facades\{Auth,Redirect,Storage};
    use Illuminate\Support\Str;
    use Illuminate\View\View;

    class PostController extends Controller {
        Use GlobalTrait;
        public function index() {
            $user = $this->getCurrentUser();
            $posts = Post::userID($user->id)->with('user')->orderBy('posts.updated_at', 'DESC')->paginate(20);
            return \view ('admin/posts/index', compact('posts','user'));
        }

        public function create() {
            $user = $this->getCurrentUser();
            $cats = PostCategory::all();
            $helper = 'postUpload';
            $posts = Post::userID($user->id)->with('user')->orderBy('posts.created_at', 'DESC')->get();
            return \view ('admin/posts/create', compact('cats','helper','posts','user'));
        }

        public function store(PostRequest $request){
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->title);
            $post = new Post();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/images/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/images/'.$user->id), $fileImg);
                $post->image = 'uploads/images/'.$user->id.'/'.$fileImg;
            }
            $post->title = $request->title;
            $post->slug = $slug;
            $post->user_id = $request->user_id;
            $post->category = $request->category;
            $post->content = $request->content;
            $post->save();
            return Redirect::route('post.index')->with('success','Publicação gravada com sucesso!');
        }

        public function edit(Post $post): View {
            $user = $this->getCurrentUser();
            $cats = PostCategory::all();
            return view('admin/posts/edit', compact('cats','post','user'));
        }

        public function update(PostUploadRequest $request, $id) {
            $request->validated();
            $post = Post::find($id);
            $slug = Str::slug($request->title);
            if($request->hasFile('image')) {
                if($post->image && file_exists(public_path($post->image))){
                    unlink(public_path($post->image));
                }
                $file = $request->file('image');
                $fileImg = $post->user_id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/images/'.$post->user_id.'/'.$fileImg;
                $file->move(public_path('uploads/images/'.$post->user_id), $fileImg);
                $post->image = 'uploads/images/'.$post->user_id.'/'.$fileImg;
            }
            $post->title = $request->title;
            $post->slug = $slug;
            $post->category = $request->category;
            $post->content = $request->content;
            $post->save();
            return Redirect::route('post.index')->with('success','Edição gravada com sucesso!');
        }

        public function destroy(Request $request): RedirectResponse {
            $request->validateWithBag('postDeletion', ['password' => ['required', 'current_password'],]);
            $post = Post::findOrFail($request->id);
            $imagePath = public_path($post->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $post->delete();
            return Redirect::to(route('post.index'))->with('success','Exclusão feita com sucesso!');
        }
    }
