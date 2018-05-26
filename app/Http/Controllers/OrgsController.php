<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgsController extends Controller
{
    public function orgs()
    {
        return view('orgs');
    }
}
