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

    public function updateInline(Request $request, $id)
    {
        try {
            $navrh = Navrh::findOrFail($id);

            $field = $request->input('field');
            $value = $request->input('value');

            if ($navrh->user_id !== auth()->id()) {
                return response()->json(['success' => false, 'message' => 'Nemáte oprávnenie upravovať tento návrh.'], 403);
            }

            if (!in_array($field, ['nazov_klubu', 'popis'])) {
                return response()->json(['success' => false, 'message' => 'Neplatné pole.'], 400);
            }

            if (empty($value)) {
                return response()->json(['success' => false, 'message' => 'Hodnota nemôže byť prázdna.'], 400);
            }

            $navrh->{$field} = $value;

            $navrh->save();

            return response()->json(['success' => true, 'message' => 'Návrh bol úspešne aktualizovaný.']);
        } catch (\Exception $e) {
            \Log::error('Chyba pri aktualizácii návrhu:', ['message' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Vyskytla sa chyba na serveri.'], 500);
        }
    }


}

