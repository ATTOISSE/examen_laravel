<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        return view('type.ajout');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Type::create($input);
        return redirect()->route('referentiel.index');
    }
}