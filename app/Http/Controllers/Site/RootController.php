<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Http\Traits\GlobalTrait;
    use App\Mail\{MailAdmin,MailContact};
    use App\Models\{Char,Image,VideoLink};
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\{Mail,Redirect};

    class RootController extends Controller {
        Use GlobalTrait;
        public function index(Request $request){
            $user = $this->getCurrentUser();
            $pageTitle = 'Home';
            return view('site/home/index',compact('pageTitle','user'));
        }

        public function about(){
            $user = $this->getCurrentUser();
            $pageTitle= 'Sobre Nós';
            return view ('site/pages/about', compact('pageTitle','user'));
        }

        public function termsOfUse(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Termos de Uso';
            return view('site/pages/termsOfUse',compact('pageTitle','user'));
        }

        public function privacyPolicy(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Política de Privacidade';
            return view('site/pages/privacyPolicy',compact('pageTitle','user'));
        }

        public function walkthrough(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Walkthrough';
            $links = VideoLink::with('user')->orderBy('created_at', 'DESC')->paginate(8);
            return view('site/pages/walkthrough',compact('links','pageTitle','user'));
        }
        public function imageGallery(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Galeria de Imagens';
            $images = Image::with('user')->orderBy('created_at', 'DESC')->paginate(16);
            return view('site/pages/imageGallery', compact('images','pageTitle','user'));
        }

        public function faqs(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Perguntas Frequentes';
            return view('site/pages/faqs', compact('pageTitle','user'));
        }

        public function contact(){
            $user = $this->getCurrentUser();
            $pageTitle = 'Contato';
            return view('site/pages/contact', compact('pageTitle','user'));
        }

        public function sendMail(Request $request) {
            $validatedData = $request->validate(['name' => 'required','email' => 'required|email','subject'=>'required','message' => 'required',]);
            Mail::to('admin@crystalcorp.com.br')->send(new MailAdmin($validatedData));
            Mail::to($validatedData['email'])->send(new MailContact($validatedData));
            return redirect()->back()->with('success', 'Obrigado pela sua mensagem, responderemos em breve!');
        }
    }
