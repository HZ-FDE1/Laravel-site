<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    public function show()
    {
        $faqs = Faq::all();

        return view('faq', ['faq' => $faqs]);
    }
}
