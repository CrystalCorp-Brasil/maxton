<?php
    namespace App\Http\Controllers\Site;

    use App\Http\Controllers\Controller;
    use App\Mail\{MailAdmin,MailContact};
    use App\Models\{Image,LinkYT};
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class RootController extends Controller {
        public function index(Request $request){
            $pageTitle = 'Home';
            $user = $request->user();
            return view('site/home/index',compact('pageTitle','user'));
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

        public function walkthrough(){
            $pageTitle = 'Walkthrough';
            $links = LinkYT::with('user')->orderBy('created_at', 'DESC')->paginate(8);
            return view('site/pages/walkthrough',compact('pageTitle','links'));
        }
        public function imageGallery(){
            $pageTitle = 'Galeria de Imagens';
            $images = Image::with('user')->orderBy('created_at', 'DESC')->paginate(16);
            return view('site/pages/imageGallery', compact('images','pageTitle'));
        }

        public function faqs(){
            $pageTitle = 'Perguntas Frequentes';
            return view('site/pages/faqs', compact('pageTitle'));
        }

        public function contact(){
            $pageTitle = 'Contato';
            return view('site/pages/contact', compact('pageTitle'));
        }

        public function sendMail(Request $request) {
            $validatedData = $request->validate(['name' => 'required','email' => 'required|email','subject'=>'required','message' => 'required',]);
            Mail::to('admin@crystalcorp.com.br')->send(new MailAdmin($validatedData));
            Mail::to($validatedData['email'])->send(new MailContact($validatedData));
            return redirect()->back()->with('success', 'Obrigado pela sua mensagem, responderemos em breve!');
        }
    }
