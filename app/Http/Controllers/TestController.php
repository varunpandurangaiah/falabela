<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Calculate;
use App\Helpers\Result;
use App\Helpers\Writer;

class TestController extends Controller
{
      public  function Run(){

        return view('test');
      }
}
