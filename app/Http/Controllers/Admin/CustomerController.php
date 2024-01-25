<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerCreate()
    {
        $data = Client::orderby('id','DESC')->get();
        return view('admin.customer.index', compact('data'));
    }
}
