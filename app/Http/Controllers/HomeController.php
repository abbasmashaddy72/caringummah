<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\State;
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
        $ayath = get_static_option('ayath_2');
        $translation = get_static_option('translation_2');
        $reference = get_static_option('reference_2');
        $contact = get_static_option('contact_2');
        $image = get_static_option('image_2');
        $dept_data = Department::get();
        $states = State::get(['name', 'id']);

        return view('pages.index.doctor', compact([
            'ayath',
            'translation',
            'reference',
            'contact',
            'image',
            'dept_data',
            'states'
        ]));
    }

    public function hidayyah_index()
    {
        $ayath = get_static_option('ayath_1');
        $translation = get_static_option('translation_1');
        $reference = get_static_option('reference_1');
        $contact = get_static_option('contact_1');
        $image = get_static_option('image_1');

        return view('pages.index.hidaayyah', compact([
            'ayath',
            'translation',
            'reference',
            'contact',
            'image'
        ]));
    }

    public function sunday_index()
    {
        $ayath = get_static_option('ayath_1');
        $translation = get_static_option('translation_1');
        $reference = get_static_option('reference_1');
        $contact = get_static_option('contact_1');
        $image = get_static_option('image_1');

        return view('pages.index.sunday', compact([
            'ayath',
            'translation',
            'reference',
            'contact',
            'image'
        ]));
    }
}
