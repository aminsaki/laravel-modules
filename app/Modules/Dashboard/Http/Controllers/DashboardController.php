<?php


namespace App\Modules\Dashboard\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Dashboard\Models\Account;

class DashboardController extends Controller
{
   public function index(){
     return view('Dashboard::Dashboard');
   }
}
