<?php
    namespace App\Http\Controllers\Admin;

    use App\Models\{Category,Post,User};
    use App\Http\Controllers\Controller;
    use App\Http\Requests\{PostRequest,PostUploadRequest};
    use Illuminate\Http\{RedirectResponse,Request};
    use Illuminate\Support\Facades\{Auth,Redirect,Storage};
    use Illuminate\Support\Str;
    use Illuminate\View\View;

    class PostController extends Controller {
        public function index() {
            $user = Auth::user();
            $posts = Post::with('user')->where('user_id',$user->id)->orderBy('posts.updated_at', 'DESC')->get();
            return \view ('admin/posts/index', compact('posts','user'));
        }

        public function create() {
            $user = Auth::user();
            $cats = Category::all();
            $posts = Post::with('user')->where('user_id',$user->id)->orderBy('posts.created_at', 'DESC')->get();
            return \view ('admin/posts/create', compact('cats','posts','user'));
        }

        public function store(PostRequest $request){
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->title);
            $post = new Post();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/users/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/users/'.$user->id), $fileImg);
                $post->image = 'uploads/users/'.$user->id.'/'.$fileImg;
            }
            $post->title = $request->title;
            $post->slug = $slug;
            $post->user_id = $request->user_id;
            $post->category = $request->category;
            $post->subject = $request->subject;
            $post->save();
            return Redirect::route('post.index')->with('success','Publicação gravada com sucesso!');
        }

        public function edit(Post $post): View {
            $user = Auth::user();
            $cats = Category::all();
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
                $request->user()->image = 'uploads/users/'.$post->user_id.'/'.$fileImg;
                $file->move(public_path('uploads/users/'.$post->user_id), $fileImg);
                $post->image = 'uploads/users/'.$post->user_id.'/'.$fileImg;
            }
            $post->title = $request->title;
            $post->slug = $slug;
            $post->category = $request->category;
            $post->subject = $request->subject;
            $post->save();
            return Redirect::route('post.index')->with('success','Edição gravada com sucesso!');
        }
        public function destroy(Request $request): RedirectResponse {
            $request->validateWithBag('postDeletion', ['password' => ['required', 'current_password'],]);
            $post = Post::find($request->id);
            if($post->image) {Storage::disk('public')->delete($post->image);}
            $post->delete();
            return Redirect::to(route('post.index'))->with('success','Exclusão feita com sucesso!');
        }
    }
