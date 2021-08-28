<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function showproduct(){
        return view('admin.product.productfrom');
    }

    public function showtypeproduct(){
        return view('admin.typeproduct.typeproductfrom');
    }

}
