<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customer = User::all()->where('role','customer');
        return view('admin.dashboard.customer', compact('customer'));
    }
}
