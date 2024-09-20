<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        $texts = Text::all();

        return view('admin.texts.index', [
            'texts' => $texts,
        ]);
    }

    public function edit(Text $text)
    {
        return view('admin.texts.edit', [
            'text' => $text,
        ]);
    }

    public function update(Request $request, Text $text)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $text->update([
            'body' => $request->content,
        ]);

        return redirect()->route('admin.texts.index');
    }
}
