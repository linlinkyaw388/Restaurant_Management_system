<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/dish';
    protected function authenticated(\Illuminate\Http\Request $request, $user)
{
    // Login ဝင်တာ အောင်မြင်တာနဲ့ ဒီနေရာကို အရင်ဆုံး လာပါလိမ့်မယ်
    if ($user->email === 'admin@gmail.com') {
        return redirect()->to('/dish');
    }

    if ($user->email === 'user@gmail.com') {
        return redirect()->to('/');
    }

    // ဘာမှမကိုက်ညီရင် ပို့မယ့် Default လမ်းကြောင်း
    return redirect()->to('/dish');
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
