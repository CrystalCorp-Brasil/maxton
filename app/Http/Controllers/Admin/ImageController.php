<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\{Image,User};
    use App\Http\Requests\ImageRequest;
    use Illuminate\Support\Facades\{Auth,Redirect};
    use Illuminate\Support\Str;

    class ImageController extends Controller {
        public function index(){
            $user = Auth::user();
            $images = Image::userID($user->id)->with('user')->orderBy('images.created_at', 'DESC')->paginate(16);
            return view('admin/images/index', compact('images','user'));
        }

        public function upload(){return view('admin/images/upload');}

        public function store(ImageRequest $request){
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->title);
            $image = new Image();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/users/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/users/'.$user->id), $fileImg);
                $image->image = 'uploads/users/'.$user->id.'/'.$fileImg;
            }
            $image->title = $request->title;
            $image->slug = $slug;
            $image->user_id = $request->user_id;
            $image->save();
            return Redirect::route('gallery.index')->with('success','Upload efetuado com sucesso!');
        }
    }
