<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class OrdersController extends Controller
{
    public function index()  {
        return view('dashboard.orders');
    }
}
