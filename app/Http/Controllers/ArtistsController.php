<?php

namespace App\Http\Controllers;

use App\Artist;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Image;
use Illuminate\Support\Facades\Storage;


class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = \App\Artist::all();

        return view('artists.index', compact('artists'));
    }

    public function search(Request $request)
    {
        request()->validate([
            'name' => ['max:20'],


        ]);
        $artists = DB::table('artists')->where('firstName','LIKE', '%' . $request->name . '%')->orWhere('lastName', 'LIKE', '%' . $request->name . '%')->get();

        return view('artists.index', compact('artists'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexMusic()
    {
        
        $artists = DB::table('artists')->where('creativeDiscipline1', 'Music')->orWhere('creativeDiscipline2', 'Music')->get();
        

        return view('artists.music', compact('artists'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexCrafts()
    {
        $artists = DB::table('artists')->where('creativeDiscipline1', 'Crafts')->orWhere('creativeDiscipline2', 'Crafts')->get();
        //dd($artists);
        return view('artists.craftsIndex', compact('artists'));
    }

    public function indexVisualArts()
    {
        $artists = DB::table('artists')->where('creativeDiscipline1', 'Visual Arts')->orWhere('creativeDiscipline2', 'Visual Arts')->get();

        return view('artists.visualArtsIndex', compact('artists'));
    }

    public function indexPerformingArts()
    {
        $artists = DB::table('artists')->where('creativeDiscipline1', 'Performing Arts')->orWhere('creativeDiscipline2', 'Performing Arts')->get();

        return view('artists.performingArtsIndex', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /**$attributes = request()->validate([
            'firstName' => [],
            'lastName' => [],
            'DOB' => [],
            'address' => [],
            'postcode' => [],
            'email' => [],
            'phoneNumber' => [],
            'bio' => [],
            'creativeDiscipline1' => [],
            'creativeDiscipline2' => [],
            'facebook' => [],
            'instagram' => [],
            'note' => []
        ]);
        //Artist::create($attributes);
        **/

        request()->validate([
            'firstName' => ['required','min:3','max:20'],
            'lastName' => ['required','min:3','max:20'],
            'DOB' => [],
            'address' => [],
            'postcode' => ['required','min:4','max:4'],
            'email' => ['required','min:4','max:50'],
            'phoneNumber' => [],
            'bio' => [],
            'creativeDiscipline1' => ['required','max:255'],
            'creativeDiscipline2' => ['required','max:255'],
            'facebook' => [],
            'instagram' => [],
            'note' => []
        ]);

        $artist = new Artist;
        $artist->firstName = $request->firstName;
        $artist->lastName =  $request->lastName;
        $artist->DOB =  $request->DOB;
        $artist->address =  $request->address;
        $artist->postcode =  $request->postcode;
        $artist->email =  $request->email;
        $artist->bio =  $request->bio;
        $artist->creativeDiscipline1 =  $request->creativeDiscipline1;
        $artist->creativeDiscipline2 =  $request->creativeDiscipline2;
        $artist->save();
        
        $profile = Auth::user();
        $profile->artist_id = $artist->id;
        $profile->save();
         
        
        //Create image directory
        $newDirectory = Auth::user()->artist_id;
        $path = '/public/' . $newDirectory;
        Storage::makeDirectory($path);
        return redirect('/artists');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        
        $images = \App\Image::where('artist_id', $artist->id)->where('type','Image Gallery')->get();
        $videos = \App\Image::where('artist_id', $artist->id)->where('type','Video')->get();
        

        return view('artists.show2')->with(['images' => $images,'videos' => $videos,'artist' => $artist]);
        
    }

    public function page(Artist $artist)
    {
        return view('handleArtist.blade.php',compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      public function editArtist(Artist $artist)
    {
        
        abort_if($artist->id !== Auth::user()->artist_id, 403);

        return view('artists.edit', compact('artist'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Artist $artist)
    {

        request()->validate([
            'firstName' => ['required','min:3','max:20'],
            'lastName' => ['required','min:3','max:20'],
            'DOB' => [],
            'address' => [],
            'postcode' => ['required','min:4','max:4'],
            'email' => ['required','min:4','max:50'],
            'phoneNumber' => [],
            'bio' => [],
            'creativeDiscipline1' => ['required','max:255'],
            'creativeDiscipline2' => ['required','max:255'],
            'facebook' => [],
            'instagram' => [],
            'note' => []
        ]);

        $artist->update(request(['firstName','lastName','DOB','address','postcode','email','phoneNumber','bio','creativeDiscipline1','creativeDiscipline2','facebook','instagram','note','creativeDetails1','creativeDetails2']));

        return redirect('/artists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect('/artists');
    }
}
