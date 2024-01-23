<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function login() {
        return view( 'pages.login' );
    }

    public function register() {
        return view( 'pages.register' );
    }

    public function checkLogin( Request $request ) {
        $validateData = $request->validate( [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ] );

        if ( Auth::attempt( $validateData ) ) {
            toastr()->addSuccess( 'Your account has been Login.' );
            return redirect()->route( 'dashboard' );
        } else {
            toastr()
                ->escapeHtml( false )
                ->addError( '<strong>We’re sorry</strong>, your account are not valid.' );
            return redirect()->back();
        }
    }

    public function store( Request $request ) {
        $validateData = $request->validate( [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required|min:11|max:11',
            'address'  => 'required',
            'password' => 'required|min:6',
        ] );

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make( $request->password );
            $user->address = $request->address;
            $user->save();

            toastr()->addSuccess( 'Your account has been Created.' );
            return redirect()->route( 'login' );
        } catch ( \Throwable $error ) {
            toastr()
                ->escapeHtml( false )
                ->addError( '<strong>We’re sorry</strong>, ' . $error );
            return redirect()->back();
        }
    }

    public function logout() {
        $user = User::findOrFail( Auth::user()->id );
        if ( $user ) {
            Auth::logout();
            toastr()->addSuccess( "Logout Successful." );
            return redirect()->route( 'home' );
        }
    }
}
