<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ProfileUpdateRequest;
    use App\Models\User;
    use Illuminate\Http\{RedirectResponse,Request};
    use Illuminate\Support\Facades\{Auth,Redirect};
    use Illuminate\View\View;

    class ProfileController extends Controller {
        public function edit(Request $request): View {
            $user = $request->user();
            return view('admin/profile/edit', compact('user'));
        }

        public function show(Request $request): View {
            $user = $request->user();
            return view('admin/users/show', compact('user'));
        }
        public function update(ProfileUpdateRequest $request, $id): RedirectResponse {
            $request->user()->fill($request->validated());
            $fileImg = User::find($id);
            if($request->hasFile('image')) {
                if($fileImg->image && file_exists(public_path($fileImg->image))){
                    unlink(public_path($fileImg->image));
                }
                $file = $request->file('image');
                $fileImg = $request->user()->username.'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/users/'.$id.'/'.$fileImg;
                $file->move(public_path('uploads/users/'.$id), $fileImg);
            }

            if ($request->user()->isDirty('email')) {
                $request->user()->email_verified_at = null;
            }
            $request->user()->save();
            return Redirect::route('profile.edit')->with('success','Alteração efetuada com sucesso!');
        }
        public function delete(Request $request): View {
            return view('admin/profile/delete', ['user'=>$request->user()]);
        }

        public function destroy(Request $request): RedirectResponse {
            $request->validateWithBag('userDeletion', ['password' => ['required', 'current_password'],]);
            $user = $request->user();
            $imagePath = public_path($user->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            Auth::logout();
            $user->delete();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return Redirect::to('/')->with('success','Exclusão feita com sucesso!');
        }
    }
