<?php

namespace App\Http\Controllers;

use Auth;
use Nexmo;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function show() {
        return view('auth/verify-m');
    }

    public function verify(Request $request) {
        $this->validate($request, [
            'code' => 'size:4',
        ]);

        try {
            Nexmo::verify()->check(
                $request->session()->get('verify:request_id'),
                $request->code
            );
            Auth::loginUsingId($request->session()->pull('verify:user:id'));
            return redirect('/');
        } catch (Nexmo\Client\Exception\Request $e) {
            return redirect()->back()->withErrors([
                'code' => $e->getMessage()
            ]);

        }
    }
    }
