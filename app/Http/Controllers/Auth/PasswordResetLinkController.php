<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\{Password,Redirect};
    use Illuminate\View\View;

    class PasswordResetLinkController extends Controller {
        public function create(): View {
            return view('auth/forgotPassword');
        }

        public function store(Request $request): RedirectResponse {
            $request->validate([
                'email' => ['required', 'email'],
            ]);
            $status = Password::sendResetLink($request->only('email'));
            return $status == Password::RESET_LINK_SENT ? Redirect::route('login')->with('success','E-mail enviado com sucesso!') : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
        }
    }
