<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\support\Facades\Auth;
use app\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if(Auth::user())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='3')
            {
                $customers = Customer::get();

                return view('hi_manager.customers', compact('customers'));
            }
            else{
                return redirect('/');
            }       
        }
        else{            
            return redirect('/');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='2')
            {
                $customer = new Customer;

                return view('kebele_manager.customer_register', compact('customer'));
            }
            else{
                return back();
            }       
        }
        else{
            return back();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if(Auth::user())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='2')
            {
                Customer::create([
                    "firstname" => $request->firstname,
                    "lastname" => $request->lastname,
                    "gender" => $request->gender,
                    "kebele" => $request->kebele,
                    "familymembers" => $request->familymembers,
                    "age" => $request->age,
                    "birthofdate" => $request->birthofdate,
                    "occupation" => $request->occupation,
                    "emergencyphoneno" => $request->emergencyphoneno,
                    "date" => $request->date,
                    // "subcity" => $request->subcity,
                    "relationship" => $request->relationship,
                    "tax" => $request->tax,
                ]);
        
                return "Successfully Registeredd!!!";
            }
            else{
                return back();
            }       
        }
        else{
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='3')
            {
                $Customers=Customer::find($id);
        
                return view('hi_manager.edit',compact('Customers'));
            }
            else{
                return back();
            }       
        }
        else{
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if(Auth::user())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='3')
            {
                $Customers=Customer::find($id);
                $Customers->firstname= $request->input('firstname');
                $Customers->lastname= $request->input('lastname');
                $Customers->familymembers= $request->input('familymembers');
                $Customers->kebele= $request->input('kebele');
                $Customers->update();
       
        return "successfully updated!";
            }
            else{
                return back();
            }       
        }
        else{
            return back();
        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        if(Auth::user())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='3')
            {               
                $Customers=Customer::find($id);

                $Customers->delete();

                return " data deleted successfully";
            }
            else{
                return back();
            }       
        }
        else{
            return back();
        }
    }
}
