<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PfController extends Controller
{
        public function viewPlaningFamilial()
        {
            return view('Home.view_planing_familial');
        }
        public function explorationPlaningF()
        {
            return view('Home.exploration_planing_familial');
        }
        public function addPlaningF()
        {
            return view('Home.add_planing_familial');
        }
}
