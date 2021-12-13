<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ayath = get_static_option('ayath_1');
        $translation = get_static_option('translation_1');
        $reference = get_static_option('reference_1');
        $contact = get_static_option('contact_1');
        $image = get_static_option('image_1');

        return view('pages.index.welcome', compact([
            'ayath',
            'translation',
            'reference',
            'contact',
            'image'
        ]));
    }

    public function doctor_index()
    {
        $ayath = get_static_option('ayath_1');
        $translation = get_static_option('translation_1');
        $reference = get_static_option('reference_1');
        $contact = get_static_option('contact_1');
        $image = get_static_option('image_1');

        return view('pages.index.doctor', compact([
            'ayath',
            'translation',
            'reference',
            'contact',
            'image'
        ]));
    }
}
