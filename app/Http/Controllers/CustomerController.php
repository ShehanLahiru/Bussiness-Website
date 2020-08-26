<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $customers = Customer::orderby('created_at','desc')->paginate(10);
        return view('backend.pages.customers.index',["customers" => $customers]);
    }
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->input("name");
        $customer->email = $request->input("email");
        $customer->contact_no = $request->input("contact_no");
        $customer->message = $request->input("message");
        $result = $customer->save();
        if ($result) {
            return redirect()->route('contact-us')->with(session()->flash('success', 'Message Added!'));
        } else {
            return redirect()->route('contact-us')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('backend.pages.customers.show', ["customer" => $customer]);
    }

    public function destroy($id)
    {
        $result = Customer::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('backend.projects.index')->with(session()->flash('success', 'Message Deleted!'));
        } else {
            return redirect()->route('backend.projects.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
