<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
       public function productlist()
    {
        return view('pages.public.productlist');
    }
}
