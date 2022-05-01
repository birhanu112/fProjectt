<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use app\Models\User;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home.userpage');
    }
    public function redirect()
    {
        if(Auth::user())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='1')
            {
                return view('admin.home');
            }
            elseif($usertype=='2')
            {
                return view('kebele_manager.customer_register');
            }
            elseif($usertype=='3')
            { 
                $customers = Customer::get();
                
                return view('hi_manager.customers', compact('customers'));
            }
            elseif($usertype=='4')
            {
                return view('h_officer.home');
            }
            else{
                return view('home.userpage');
            }
        }
        else{
            return redirect('/');
        }
    }

    public function contact()
    {
        return view('contact.contact');  
         

    }
public function feedback()
    {
        return view('home.feedback');
    }

public function home()
{
    return view('home.userpage');  
}



}
