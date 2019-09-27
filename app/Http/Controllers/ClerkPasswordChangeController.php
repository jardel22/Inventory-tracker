<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Booking;
use App\Property;
use App\Parameter;
use App\Clerk;
use Auth;
use DB;

class ClerkPasswordChangeController extends Controller
{
    protected $property, $booking, $parameter;
    
    public function __construct()
    {

        $this->middleware('auth:clerk');


        $this->booking = new Booking();
        $this->property = new Property();
        $this->parameter = new Parameter();
    }

       
    public function password() 
    {
        $admin_id = Auth::user()->clerkId;

        $admins = DB::table('clerks')
        ->where('clerkId', '=', $clerk_id)
        ->get();

        return view('pages.clerk.changePassword')->with('clerks', $clerks);
    }

    public function updatePassword(Request $request)
    {
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        $confirmPassword = $request->confirmPassword;
        
        if($newPassword == $confirmPassword && Hash::check($oldPassword, Auth::user()->password)){
            $request->user()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
            return redirect('admin/details')->with('success','Password has been updated');
        }
        
        else if($newPassword !== $confirmPassword){
            return back()->with('error','The confirmed password does not match the password, please try again!'); //when user enter wrong password as current password
        }

        else {
            return back()->with('error','The current password does not match the database password'); //when user enter wrong password as current password
        }
                
    }
}