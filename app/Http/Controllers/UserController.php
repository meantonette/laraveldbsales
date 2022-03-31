<?php

namespace App\Http\Controllers;
use App\Models\customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\user;

class UserController extends Controller
{
    //
    public function getSignup()
    {
        return view('user.signup');
    }
    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email| required| unique:users',
            'password' => 'required| min:4'
        ]);
        $user = new User([
            'name' =>  $request->name,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);
        return redirect()->route('user.profile');
    }

    public function getProfile()
    {
        return view('user.profile');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect('/index');
    }
    public function getSignin()
    {
        return view('user.signin');
    }
    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email| required',
            'password' => 'required| min:4'
        ]);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->password])) {
            return redirect()->route('user.profile');
        } else {
            return redirect()->back();
        };
    }























    
    // public function getSignup(){
    //     return view('user.signup');
    // }

    // public function postSignup(Request $request){
    //     $this->validate($request, [
    //         'email' => 'email| required| unique:users',
    //         'password' => 'required| min:4'
    //     ]);

    //      $user = new User([
    //         'name' => $request-> name,
    //         'email' => $request->input('email'),
    //         'password' => bcrypt($request->input('password'))
    //         //bcrypt > hashing pass

    //         // 'password' => bcrypt($request->'password')
    //     ]);
    //     $user->save();
    //     Auth::login($user);

    //     $customer = new Customer;
    //     $customer->user_id = $user->id;
    //     $customer->fname = $request->fname;
    //     $customer->lname = $request->lname;
    //     $customer->addressline = $request->addressline;
    //     $customer->phone = $request->phone;
    //     $customer->zipcode = $request->zipcode;
    //     $customer->save();

    //      return redirect()->route('user.profile');
    // }

    // // public function getProfile(){
    // //     //$orders = Auth::user()->with('orders')->get();
    // //     // $orders = Auth::user()->orders;
    // //     // dd($orders);
    // //     // $orders->transform(function($order, $key){
    // //     //     $order->cart = unserialize($order->cart);
    // //     //     return $order;
    // //     // });
    // //     return view('user.profile');
    // // }

    // // public function getLogout(){
    // //     Auth::logout();
    // //     return redirect()->route('product.all');
    // // }

    // public function getLogout(){
    //     Auth::logout();
    //     return redirect('/item');
    // }

    // public function getSignin(){
    //     return view('user.signin');
    // }
    
    // public function postSignin(Request $request){
    //     $this->validate($request, [
    //         'email' => 'email| required',
    //         'password' => 'required| min:4'
    //     ]);
    //      if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){
    //         return redirect()->route('user.profile');
    //     }else{
    //         return redirect()->back();
    //     };
    //  }

    //  public function getProfile(){
    //     //$orders = Auth::user()->with('orders')->get();
    //     $orders = Auth::user()->orders;
    //     dd($orders);
    //     $orders->transform(function($order, $key){
    //         $order->cart = unserialize($order->cart);
    //         return $order;
    //     });
    //     return view('user.profile',compact('orders'));
    // }

}
