<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function coupons()
    {
        $coupons = auth()->user()->coupons;
        return view('profile.coupons', compact('coupons'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $this->validate($request, [
                           'name' => 'required',
                           'email' => 'email|required|unique:users'
                           ]);

        auth()->user()->update($request->all());

        flash('Profile Details Saved!')->success();
  
        return back();
    }


    public function updatePassword(Request $request)
   {
      $this->validate($request, [
          'old_password' => 'required',
          'password' => 'required|string|min:6|confirmed'
        ]);

      $old_password = $request->get('old_password');
      $password = $request->get('password');

      if(!\Hash::check($old_password, auth()->user()->password))
      {
          flash('Please enter your current password correct!')->error();
          return back();
      } 


      auth()->user()->password = bcrypt($password);

      auth()->user()->save();

       flash('Your Password was updated successfully!')->success();
     
      return redirect('/home');
   }
}
