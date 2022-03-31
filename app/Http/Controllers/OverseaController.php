<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\OverseasImport;
use App\Exports\OverseasExport;
use Maatwebsite\Excel\Facades\Excel;

class OverseaController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function overseaImportExport()
    {
        $route="oversea-import";
       return view('file-import')->with(compact('route'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function overseaImport(Request $request) 
    {
        Excel::import(new OverseasImport, $request->file('file')->store('temp'));
        return redirect()->back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function overseaExport() 
    {
        return Excel::download(new OverseasExport, 'overseas-collection.xlsx');
    }    
}
