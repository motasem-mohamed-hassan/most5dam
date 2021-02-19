<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

use Nexmo;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function authenticated(Request $request, Authenticatable $user)
    // {
    //     Auth::logout();
    //     $request->session()->put('verify:user:id', $user->id);

    //     $verification = Nexmo::verify()->start([
    //         // 'number' => $user->phone_number,
    //         'number' => '+20 155 994 4997',
    //         'brand'  => 'مستعلمات'
    //     ]);
    //     $request->session()->put('verify:request_id', $verification->getRequestId());


    //     return redirect('verify');
    // }

    public function username()
    {
        return 'phone_number';
    }

}
