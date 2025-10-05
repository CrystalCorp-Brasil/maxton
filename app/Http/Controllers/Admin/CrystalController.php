<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\{CharRequest,CharUploadRequest};
    use App\Http\Traits\GlobalTrait;
    use App\Models\{Char,User};
    use Illuminate\Http\{RedirectResponse,Request};
    use Illuminate\Support\Facades\{Auth,Redirect,Storage};
    use Illuminate\Support\Str;
    use Illuminate\View\View;

    class CrystalController extends Controller {
        Use GlobalTrait;
        public function index() {
            $user = $this->getCurrentUser();
            $chars = Char::userID($user->id)->with('user')->withCharsLikes()->orderBy('chars.updated_at', 'DESC')->paginate(20);
            return view ('admin/crystalcorp/index', compact('chars','user'));
        }

        public function create() {
            $user = $this->getCurrentUser();
            $chars = Char::userID($user->id)->with('user')->orderBy('chars.created_at', 'DESC')->get();
            return \view ('admin/crystalcorp/create', compact('chars','user'));
        }

        public function store(CharRequest $request){
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->nick);
            $char = new Char();
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/images/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/images/'.$user->id), $fileImg);
                $char->image = 'uploads/images/'.$user->id.'/'.$fileImg;
            }
            $char->nick = $request->nick;
            $char->slug = $slug;
            $char->name = $request->name;
            $char->bio = $request->bio;
            $char->user_id = $request->user_id;
            $char->save();
            return Redirect::route('chars.index')->with('success','Personagem adicionado com sucesso!');
        }

        public function edit(Char $char): View {
            $user = $this->getCurrentUser();
            return view('admin/crystalcorp/edit', compact('char','user'));
        }

        public function update(CharUploadRequest $request, $id) {
            $request->validated();
            $char = Char::find($id);
            $slug = Str::slug($request->nick);
            if($request->hasFile('image')) {
                if($char->image && file_exists(public_path($char->image))){
                    unlink(public_path($char->image));
                }
                $file = $request->file('image');
                $fileImg = $char->user_id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/images/'.$char->user_id.'/'.$fileImg;
                $file->move(public_path('uploads/images/'.$char->user_id), $fileImg);
                $char->image = 'uploads/images/'.$char->user_id.'/'.$fileImg;
            }
            $char->nick = $request->nick;
            $char->slug = $slug;
            $char->name = $request->name;
            $char->bio = $request->bio;
            $char->save();
            return Redirect::route('chars.index')->with('success','Edição gravada com sucesso!');
        }

        public function destroy(Request $request): RedirectResponse {
            $request->validateWithBag('charDeletion', ['password' => ['required', 'current_password'],]);
            $char = Char::find($request->id);
            $imagePath = public_path($char->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $char->delete();
            return Redirect::to(route('chars.index'))->with('success','Exclusão feita com sucesso!');
        }
    }
