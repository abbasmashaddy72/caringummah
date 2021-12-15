<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImageDeleteController extends Controller
{
    public  function hidayyahImagedestroy($any)
    {
        $image_path = public_path('images/gallery/hidayyah/') . $any;
        if (File::exists($image_path)) {
            File::delete($image_path);
        } else {
            return redirect()->route('hidayyahImages')->with('message', 'Image Does Not Exists');
        }
        return redirect()->route('hidayyahImages')->with('message', 'Image Deleted Successfully');
    }

    public function hidayyahImageUpload(Request $request)
    {
        foreach ($request->images as $image) {
            $newImageName1 = Str::random(20) . '.' . $image->extension();
            $image->move(public_path('images/gallery/hidayyah'), $newImageName1);
        }
        return redirect()->route('hidayyahImages')->with('message', 'Images Saved Successfully');
    }

    public function sundayImagedestroy($any)
    {
        $image_path = public_path('images/gallery/sunday/') . $any;
        if (File::exists($image_path)) {
            File::delete($image_path);
        } else {
            return redirect()->route('sundayImages')->with('message', 'Image Does Not Exists');
        }
        return redirect()->route('sundayImages')->with('message', 'Image Deleted Successfully');
    }

    public function sundayImageUpload(Request $request)
    {
        foreach ($request->images as $image) {
            $newImageName1 = Str::random(20) . '.' . $image->extension();
            $image->move(public_path('images/gallery/sunday'), $newImageName1);
        }
        return redirect()->route('sundayImages')->with('message', 'Images Saved Successfully');
    }
}
