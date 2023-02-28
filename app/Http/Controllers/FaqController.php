<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();

        return view('faq.index', ['faq' => $faqs]);
    }

    public function create() {
        // Shows a view to create a new resource
        return view('faq.create');
    }

    public function store() {
        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        return redirect('/faq');
    }
}
