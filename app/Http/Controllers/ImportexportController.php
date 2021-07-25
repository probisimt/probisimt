<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class ImportexportController extends Controller
{
    public function index()
    {
        $data = User::paginate(10);
        return view('importView', compact('data'));
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'test.xlsx');
    }
    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }
}
