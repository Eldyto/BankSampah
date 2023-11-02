<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardJualsampahController extends Controller
{
   public function index(){
       return view('dashboard.jualsampah.index');
   }
}
