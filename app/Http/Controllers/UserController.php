<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use prx;

class UserController extends Controller {
    //
    function login(Request $req)
    {
        // print_r(Auth::user());
        // return $req->input();
        $username = User::where(['email' => $req->email])->first();
        // return $username->password;
        $status=$username->status;
        $is_verify=$username->is_verify;

        if($is_verify==0){
            return  "please verify your email address";
        }
        if($status==0){
            return "your account has been deactivated";
        }
        if (!$username || !Hash::check($req->password, $username->password)) {
            return 'username or password is not correct';
        } else {
            $req->session()->put('username', $username);
            return redirect('/');
        }
    }

    function registration_view()
    {
        return view('login/registration');
        // return "regisss";
    }


    function registration(Request $req)
    {
        // dd('dfhsh');
        // return $req->all();
        // die;
        // return view('login/registration');
        // echo "register";
        // dd($req->name);

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'address'=>'required',
            'phone'=> 'required',
            'password' => 'required',
            'confpassword'=> 'required'
        ]);
        // $result = User::all();
        // // print_r($result[0]->email);
        // // echo $req->email;
        // if($result[0]->email==$req->email)
        // {
        //     echo "Email alradey insert";
        // }
        // else{
            // echo "sssssss";
        $rand_id=rand(111111111111111,999999999999999999);
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'password'=>\Hash::make($req->password),
            'confpassword'=>\Hash::make($req->confpassword),
            'is_verify'=>0,
            'status'=>0,
            'rand_id'=>$rand_id
        ]);
        $name=$req->name;
        $email=$req->email;
        $data=['name'=>$name,'rand_id'=>$rand_id];
        $user['to']=$email;
        Mail::send('login.mail',$data,function($messages) use($user){
            $messages->to($user['to']);
            $messages->subject('Email Id VerifyCsrfToken');
        });
        // return redirect('/verifyEmail');
        // return redirect()->route('verifyEmail',$balll);
        return view('login.verifyEmail',compact('name','email'));

    //     if($req->is_verify==1){
    //     // ******************************************************************
    //     if(\Auth::attempt($req->only('email','password'))){
    //         // return redirect('/login');
    //         $username = User::where(['email' => $req->email])->first();
    //         $req->session()->put('username', $username);
    //         return redirect('/');

    //         // return $username;
    //     }
    //     return redirect('registration')->withError('Error');
    // }
    // else{
    //     return "success";
    // }
}



public function email_verification(Request $req,$id){
    // echo $id;
    $user = User::where(['rand_id' => $id])->get();
    // $user = User::all();

    // echo "<pre>";
    // print_r($user[0]->name);
    if(isset($user[0])){
        $user = User::where(['id' => $user[0]->id])
        ->update(['is_verify'=>1,'rand_id' =>'','status' =>1]);
        // return "Thank you ";
        // $data;
        return redirect('/verifysuccess');

    }else{
        return redirect('/');
    }
}

function verifysuccess(){
    return view('login.verifySuccess');
}

public function emailverify(Request $req){
    // return $req->input();
    // echo "hhhhhh h";
    $otp=$req->input('otp');
    $email=$req->input('email');
    $user = User::where(['rand_id' => $otp])
    ->where(['email' => $email])
    ->get();
    if(isset($user[0])){
        $user = User::where(['id' => $user[0]->id])
        ->update(['is_verify'=>1,'rand_id' =>'','status' =>1]);
        // return "Thank you ";
        // $data;
        return redirect('/verifysuccess');

    }else{
        return "please check your email and enter the correct OTP number";
    }
}



}
