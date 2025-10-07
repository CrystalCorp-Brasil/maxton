<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Traits\GlobalTrait;
    use App\Models\{Char,PostCategory,User};
    use Illuminate\Http\{Request};
    use Illuminate\Support\Facades\{Redirect};
    use Illuminate\View\View;

    class DashboardController extends Controller {
        Use GlobalTrait;
        public function dashboard(Request $request): View {
            $user = $this->getCurrentUser();
            return view('admin/dashboard/index', compact('user'));
        }

        public function category(): View {
            $user = $this->getCurrentUser();
            $helper = 'catUpload';
            $cats = PostCategory::all();
            return view('admin/categories/index', \compact('cats','helper','user'));
        }

        public function storeCategory(Request $request){
            $request->validate(['category' => ['required','string','max:255'],]);
            $cat = PostCategory::create([
                'category' => $request->category
            ]);
            return Redirect::route('category.index')->with('success','Categoria cadastrada com sucesso!');
        }
        public function users(): View {
            $users = User::all();
            return view('admin/users/index', \compact('users'));
        }
        public function userShow($id): View {
            $user = User::find($id);
            return view('admin/users/show', \compact('user'));
        }

        public function userPanel(Request $request): View {
            $user = $request->user();
            return view('admin/users/show', compact('user'));
        }
    }
