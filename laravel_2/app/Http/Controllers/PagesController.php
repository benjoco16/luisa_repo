<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){ return view ('pages.index'); }
    public function about(){ return view ('pages.about'); }
    public function actions(){ return view ('pages.actions'); }
    public function assessmentprocess(){ return view ('pages.assessment-process'); }
    public function assessmentwizard(){ return view ('pages.assessment-wizard'); }
    public function riskassessment(){ return view ('pages.risk-assessment'); }
    public function dashboard2(){ return view ('pages.dashboard2'); }
    public function equipment(){ return view ('pages.equipment'); }
    public function incidents(){ return view ('pages.incidents'); }
    public function maintenance(){ return view ('pages.maintenance'); }
    public function reports(){ return view ('pages.reports'); }
    public function substances(){ return view ('pages.substances'); }
}
