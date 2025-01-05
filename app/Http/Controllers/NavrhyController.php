<?php

namespace App\Http\Controllers;

use App\Models\Navrh;
use Illuminate\Http\Request;

class NavrhyController extends Controller
{
    public function index()
    {
        $navrhy = Navrh::with('user')->latest()->get();
        return view('navrhy', compact('navrhy'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nazov_klubu' => 'required|max:255',
            'popis' => 'required',
        ]);

        Navrh::create([
            'user_id' => auth()->id(),
            'nazov_klubu' => $request->nazov_klubu,
            'popis' => $request->popis,
        ]);

        return redirect()->route('navrhy')->with('success', 'Návrh bol úspešne pridaný!');
    }
}

