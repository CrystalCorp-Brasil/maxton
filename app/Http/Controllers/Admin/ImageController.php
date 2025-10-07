<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Traits\GlobalTrait;
    use App\Models\{Char,Image,User};
    use App\Http\Requests\ImageRequest;
    use Illuminate\Support\Facades\{Auth,Redirect};
    use Illuminate\Support\Str;

    class ImageController extends Controller {
        Use GlobalTrait;
        public function index(){
            $user = $this->getCurrentUser();
            $images = Image::userID($user->id)->with('user')->orderBy('images.created_at', 'DESC')->paginate(16);
            return view('admin/images/index', compact('images','user'));
        }

        public function upload(){
            $helper = 'imgUpload';
            $user = $this->getCurrentUser();
            $chars = Char::userID($user->id)->with('user')->orderBy('chars.created_at', 'DESC')->get();
            return view('admin/images/upload',compact('chars','helper','user'));
        }

        public function store(ImageRequest $request){
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->title);
            $char_id = $request->char_id;
            if ($char_id != null) {
                $char_id = $request->char_id;
            }
            else $char_id = 2;
            $image = new Image();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/images/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/images/'.$user->id), $fileImg);
                $image->image = 'uploads/images/'.$user->id.'/'.$fileImg;
            }
            $image->title = $request->title;
            $image->slug = $slug;
            $image->user_id = $request->user_id;
            $image->char_id = $char_id;
            $image->save();
            return Redirect::route('gallery.index')->with('success','Upload efetuado com sucesso!');
        }
    }
