<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::latest()->get();

        return view('faq.index', ['faq' => $faq]);
    }

    public function show(Faq $faq)
    {
        return view('faq.show', ['faq' => $faq]);
    }

    public function create() {
        // Shows a view to create a new resource
        return view('faq.create');
    }

    public function store(Request $request) {

        $validatedAttributes = $request->validate([
            'question' => 'required',
            'answer' => 'required'
            ]);

        Faq::create($validatedAttributes);

        return redirect(route('faq.index'));
    }
    public function edit(Faq $faq) {

        return view('faq.edit', ['faq' => $faq]);
    }

    public function update(Faq $faq, Request $request) {

        $validatedAttributes = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($validatedAttributes);

        return redirect(route('faq.show', $faq));
    }

    public function destroy(Faq $faq) {
        $faq->delete();

        return redirect(route('faq.index'));
    }
}
