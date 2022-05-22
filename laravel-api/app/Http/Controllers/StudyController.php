<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudyController extends Controller
{
    public function index()
    {
        $studies=Pendidikan::all();
        //dd($studies);
        return view('welcome',compact('studies'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Pendidikan::create($request->all());
        return back();
    }
    public function edit($id)
    {
        $studyId = Pendidikan::find($id);
        return view('edit', compact('studyId'));
    }

    public function update($id, Request $request)
    {

        Pendidikan::find($id)->update($request->all());
        return redirect()
                ->route('study.index');

    }

    public function destroy($id)
    {
       $pendidikanId = Pendidikan::find($id);
       $pendidikanId->delete();
       
       return back();
    }
}
