<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $customers = Customer::all(); // Assuming you have a Customer model

        return view('reports.acc-report.index', compact('customers'));
    }

    public function accStatusHis(){

        return view('reports.acc-status-his.index');
    }
}
