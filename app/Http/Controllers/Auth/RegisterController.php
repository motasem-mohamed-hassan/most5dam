<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required','string','unique:users'], //you can also use required|regex:/[0-9]{10}/|digits:10 as per your needs
            // 'acc_number' => ['required','string','unique:users', 'max:24'], //you can also use required|regex:/[0-9]{10}/|digits:10 as per your needs
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function chose_city(Request $request)
    {
        $child_cities = City::where('city_id', $request->id)->get();


        return response()->json([
            'status'    => true,
            'data'      => $child_cities
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $city = City::find($data['city']);
        $neighborhood = City::find($data['neighborhood']);
        // .$data['acc_number_2'].$data['acc_number_2'].$data['acc_number_2'].$data['acc_number_2'].$data['acc_number_2']
        $acc_number = ('SA'.$data['acc_number_1'].$data['acc_number_2'].$data['acc_number_2'].$data['acc_number_2'].$data['acc_number_2'].$data['acc_number_2']);

        return User::create([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'acc_number' => $acc_number,
            'email' => $data['email'],
            'city'   => $city->name,
            'neighborhood'  => $neighborhood->name,
            'password' => $data['password'],
            // 'password' => Hash::make($data['password']),
        ]);
    }





}
