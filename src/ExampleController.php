<?php

namespace Azrellion\Demopackage;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

class ExampleController extends Controller
{
    public function displayName($name){
        return view('demopackage::example', compact('name'));
    }
}