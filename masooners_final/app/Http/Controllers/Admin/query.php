<?php

namespace App\Http\Controllers\admin;

use App\Models\stepform;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class query extends Controller
{
    public function index()
    {
        // dd("called");
        $data = stepform::all();

        return view('admin.query.index', compact('data'));
    }
}
