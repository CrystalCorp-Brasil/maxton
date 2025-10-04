<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\{LinkYT,TagsVideo,User};
    use App\Http\Requests\LinkYTRequest;
    use Illuminate\Support\Facades\{Auth,Redirect};
    use Illuminate\Support\Str;

    class LinksYTController extends Controller {
        public function index(){
            $user = Auth::user();
            $links = LinkYT::userID($user->id)->with('user')->orderBy('links_yt.created_at', 'DESC')->paginate(16);
            return view('admin/ytLinks/index', compact('links','user'));
        }

        public function upload(){
            $links = TagsVideo::all();
            return view('admin/ytLinks/upload',compact('links'));
        }

        public function store(LinkYTRequest $request){
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->title);
            $videos = new LinkYT();
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
            return Redirect::route('linkYT.index')->with('success','Upload efetuado com sucesso!');
        }
    }
