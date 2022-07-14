<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Hash;
use DB;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function signup(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required|unique:users,mobile',
            'email' => 'required|email|unique:users,email',
            'company_type' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);       
        
        $token = Str::random(64);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['user_type'] = 'user';
        $input['email_token'] = $token;

        $user = User::create($input);

        Mail::send('email.user-verification-email', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Suchitwa Mission Verification Email');
        });

        return redirect()->route('user.signup')
                        ->with('success','Success! Validation email has been sent to registered email id. Please verify your email id before proceeding further.');
    }

    public function verifyemail($token){
        try{
            User::where('email_token', $token)->where('email_verified_at', NULL)->update(['email_verified_at' => Carbon::now()]);
        }catch(Exception $e){
            throw $e;
        }
        return redirect()->route('user.login')
                        ->with('success', "You've successfully verified your email. Please Login to continue.");
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);   
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $clists = [];
            return view('user.dash', compact('clists'));
        }else{
            return redirect()->route('user.login')->with('error', 'Login details are not valid');
        } 
    }

    public function logout(){
        Session::flush();
        Auth::logout();  
        return Redirect('/user/login/');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
