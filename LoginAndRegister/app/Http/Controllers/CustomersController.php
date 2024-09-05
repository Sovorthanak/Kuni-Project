<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Imports\CustomerImport;
use Maatwebsite\Excel\Facades\Excel;

class CustomersController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('customers.all-cust.index', compact('customers'));
    }

    public function addCustomer() {
        return view('customers.add-cust.index');
    }

    public function addCustomerAdv() {
        return view('customers.add-cust-adv.index');
    }

    public function importExcelData(Request $request)
    {
        $request->validate([
            'import_file' => [
                'required',
                'file'
            ],
        ]);

        Excel::import(new CustomerImport, $request->file('import_file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }

    public function show($id)
    {
        // Retrieve the customer by their ID
        $customer = Customer::findOrFail($id);

        // Pass the customer data to the view
        return view('customers.show-cust.index', compact('customer'));
    }


    public function searchCustomer(Request $request)
    {
        $query = Customer::query();

        // Retrieve keyword and search type from request
        $keyword = $request->input('keyword');
        $searchType = $request->input('searchType');

        // Apply the keyword search based on the search type
        if (!empty($keyword) && !empty($searchType)) {
            $query->where($searchType, 'LIKE', '%' . $keyword . '%');
        }

        // Apply the status filter using the correct request parameter name
        if ($request->filled('accountStatus')) {
            $query->where('status', $request->input('accountStatus'));
        }

        // Apply additional filters
        if ($request->filled('id')) {
            $query->where('id', $request->input('id'));
        }

        if ($request->filled('customername')) {
            $query->where('customername', $request->input('customername'));
        }

        if ($request->filled('type')) {
            $query->where('type', $request->input('type'));
        }

        if ($request->filled('accountid')) {
            $query->where('accountid', $request->input('accountid'));
        }

        if ($request->filled('currency')) {
            $query->where('currency', $request->input('currency'));
        }

        // Debug: Inspect the SQL query and bindings
        // dd($query->toSql(), $query->getBindings());

        // Retrieve the results
        $customers = $query->get();

        // Return the view with the results
        return view('customers.all-cust.index', compact('customers'));
    }

















}
