<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Image;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index() {
        return view('upload');
    }

    public function show() {
        

        $images = \App\Image::where('artist_id', auth()->user()->artist_id)->get();

        return view('handleArtistGallery')->with(['images' => $images]);
    }
 
    public function save(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $type = $request->type;

        
 
        if ($files = $request->file('image')) {
            
            
            $artistID = Auth::user()->artist_id;
            $pathDir = '/public/' . $artistID;

            if ( $type == 'Avatar') {
            $fileName =  "avatar".'.'."jpg";
            } else
            $fileName =  "image-Artist-".time().'.'.$request->image->getClientOriginalExtension();
            
            $path = $request->image->storeAs($pathDir, $fileName);;

            $newPath = '/storage/' . $artistID . '/'. $fileName;
            
            $image = new Image;
            $image->image = $fileName;
            $image->type = $request->type;
            $image->description = $request->description;
            $image->artist_id = auth()->user()->artist_id ;
            $image->url= $newPath;
            $image->save();
            
            return Response()->json([
                "image" => $fileName
            ], Response::HTTP_OK);
 
        }
 
    }

    
    public function delete(Image $image){

        $artistID = Auth::user()->artist_id;
        $pathDir = '/public/' . $artistID. '/'.$image->image;
        Storage::delete($pathDir);
        $image->delete();
        
        return back();

    }
}