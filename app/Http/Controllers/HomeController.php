<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $complaints = DB::select('select * from complaints');
        // return view('home',['complaints'=>$complaints]);
        // return view('');
        // $complaints = Complaint::lates()->paginate(5);
        // return view('layouts.admin', compact(data))
        //         ->with('i', (request()->input('page',1)-1)*5);
        $complaints = Complaint::get();
        return view('home', ['complaints' => $complaints]);      
    }        
    
}
