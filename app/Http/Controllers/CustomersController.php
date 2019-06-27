<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        $companies = Company::all();

        // $activeCustomers = Customer::where('status', 1)->get();
        return view('customers.index', [
            'customers' => $customers,
            'companies' => $companies,
        ]);
        // return view('internals.customer', [
        //      'activeCustomers' => $activeCustomers
        // ])
        // return view('internals.customer', compact('activeCustomer'))
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', [
            'companies' => $companies,
            'customer' => $customer,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
            'company_id' => 'required',

        ]);
        //Mass Assignment
        Customer::create($data);

        return redirect('customers');
        // Basic Example. But It's too long..
        // $customers = new Customer();
        // $customers->name = request('name');
        // $customers->email = request('email');
        // $customers->status = request('status');
        // $customers->save();
        // return back() are supposed to back list Customer() from database

        //or
        //$customers->name = $request->input('name');
        //$customers->save();
        //return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // $customer = Customer::find($id);

        return view('customers.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Customer $customer)
    {

        $customer->update($this->validateRequest());

        return redirect('customers/' . $customer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }

    public function validateRequest()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
            'company_id' => 'required',
        ]);
    }
}
