<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\File;


class FileUpload extends Controller
{
    //
    public function store (Request $request) {

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['name'].".".$extension);
                $url = Storage::url($validated['name'].".".$extension);
                $file = Image::create([
                   'name' => $validated['name'],
                    'url' => $url,
                ]);
                Session::flash('success', "Success!");
                return back();
            }
        }
        abort(500, 'Could not upload image :(');
    }

    public function viewUploads () {
        //$images = Image::all();
        return view('home');
    }


    public function uploadForm(){

        return view('upload');
    }


    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */


    public function uploadFile(Request $request){
        //$request->file->store('public');
        $newDirectory = Auth::user()->id;
        //Storage::makeDirectory($newDirectory);
        //$path = $request->file('avatar')->store('avatars');
        $path = $request->file('avatar')->storeAs(
            Auth::user()->id, 'avatar.jpg'
        );
    
        return $path;
    }
}
