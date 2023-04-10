<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepistageVihHommeController extends Controller
{
        public function adddepistage()
        {
            return view('Home.add_vih_depistage');
        }
        public function viewdepistage()
        {
            return view('Home.view_vih_depistage');
        }
}
