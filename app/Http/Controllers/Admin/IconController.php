<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Icon;
    use Illuminate\Support\Facades\Auth;

    class IconController extends Controller {
        public function index(Request $request){
            $user = Auth::user();
            $search = $request->input('search');
            $icons = Icon::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })->paginate(48);
            return view('admin/icons/result',compact('user','search','icons'));
        }

        public function boxIcons(Request $request){
            $user = Auth::user();
            $family = Icon::select('*')->where('slug','BoxIcons')->paginate(48);
            $search = $request->input('search');
            $icons = Icon::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })->paginate(48);
            return view('admin/icons/index',compact('family','user','search','icons'));
        }

        public function iconsMind(Request $request){
            $user = Auth::user();
            $family = Icon::select('*')->where('slug','IconsMind')->paginate(48);
            $search = $request->input('search');
            $icons = Icon::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })->paginate(48);
            return view('admin/icons/index',compact('family','user','search','icons'));
        }

        public function fontAwesome(Request $request){
            $user = Auth::user();
            $family = Icon::select('*')->where('slug','FontAwesome')->paginate(48);
            $search = $request->input('search');
            $icons = Icon::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })->paginate(48);
            return view('admin/icons/index',compact('family','user','search','icons'));
        }

        public function lineIcon(Request $request){
            $user = Auth::user();
            $family = Icon::select('*')->where('slug','LineIcons')->paginate(48);
            $search = $request->input('search');
            $icons = Icon::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })->paginate(48);
            return view('admin/icons/index',compact('family','user','search','icons'));
        }
    }
