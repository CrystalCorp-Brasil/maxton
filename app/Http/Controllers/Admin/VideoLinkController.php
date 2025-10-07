<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Traits\GlobalTrait;
    use App\Models\{VideoLink,VideoTag,User};
    use App\Http\Requests\VideoLinkRequest;
    use Illuminate\Support\Facades\{Auth,Redirect};
    use Illuminate\Support\Str;

    class VideoLinkController extends Controller {
        Use GlobalTrait;
        public function index(){
            $user = $this->getCurrentUser();
            $links = VideoLink::userID($user->id)->with('user')->orderBy('videos_links.created_at', 'DESC')->paginate(16);
            return view('admin/videos/index', compact('links','user'));
        }

        public function upload(){
            $user = $this->getCurrentUser();
            $helper = 'videoUpload';
            $tags = VideoTag::all();
            return view('admin/videos/upload',compact('helper','tags','user'));
        }

        public function store(VideoLinkRequest $request){
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->title);
            $videos = new VideoLink();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/videos/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/videos/'.$user->id), $fileImg);
                $videos->image = 'uploads/videos/'.$user->id.'/'.$fileImg;
            }
            $videos->title = $request->title;
            $videos->slug = $slug;
            $videos->tag = $request->tag;
            $videos->link = $request->link;
            $videos->user_id = $request->user_id;
            $videos->resume = $request->resume;
            $videos->save();
            return Redirect::route('video.index')->with('success','Upload efetuado com sucesso!');
        }
    }
