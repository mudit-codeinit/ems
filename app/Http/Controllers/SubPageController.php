<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubPageController extends Controller
{
   public function bmw()
    {
        return view("subpage.bugatti");
    }
}
