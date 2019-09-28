<?php

namespace App\Http\Controllers;
use App\Complaint;

use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function index()
    {
        // $complaints = Complaint::lates()->paginate(5);
        // return view('layouts.admin', compact(data))
        //         ->with('i', (request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name'         => 'required',            
            'email'        => 'required',
            'file'         => 'required|image|max:2048',
            'masukan'      => 'required',
            'fakultas'     => 'required',
            'tipe_masukan' => 'required',
        ]);

        $file = $request->file('file');

        $new_name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('file'), $new_name);
        $form_data =  new Complaint();
        $form_data = array(
            'name'          => $request->name,            
            'email'         => $request->email,
            'file'          => $new_name,
            'masukan'       => $request->masukan,
            'fakultas'      => $request->fakultas,
            'tipe_masukan'  => $request->tipe_masukan
         );         

         Complaint::create($form_data);

         return redirect('/')->with('success', 'Masukan Diterima.');
    }
}
