<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobSummary;

class PrintController extends Controller
{
    public function index()
      {

         	   return view('printJobSummary');
         	       	
      }

}
