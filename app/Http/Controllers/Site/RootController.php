<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class RootController extends Controller {
        public function index(Request $request){
            return view('site/home/index');
        }

        public function about(){
            $pageTitle= 'Sobre Nós';
            return view ('site/pages/about', compact('pageTitle'));
        }

        public function termsOfUse(){
            $pageTitle = 'Termos de Uso';
            return view('site/pages/termsOfUse',compact('pageTitle'));
        }

        public function privacyPolicy(){
            $pageTitle = 'Política de Privacidade';
            return view('site/pages/privacyPolicy',compact('pageTitle'));
        }
    }
