<?php namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateAlbumRequest;
use Illuminate\Http\Request;

class AlbumController extends Controller {


    /**
     * @return \Illuminate\View\View
     */
//    public function index() //index
//    {
//        $albums = Album::with('photos')->get();
//        return view('index', compact('albums'));
//    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     * album model has_many function 'photos' get them all
     * album model has_many function 'photos' find through id
     * return to the view 'album' through compact variables 'album', 'albums'
     */
//    public function getAlbum($id) //show
//    {
//
//        $albums = Album::with('photos')->get();
//        $album = Album::with('photos')->find($id);
//        return view('album', compact('album', 'albums'));
//
//    }

    /**
     * @return \Illuminate\View\View
     */
    public function create(){

        return view('createalbum');
    }

    /**
     * @param CreateAlbumRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createalbum(CreateAlbumRequest $request) //store
    {
        Album::create($request->all());
        return redirect('/')
            ->with('message','Created');
    }
}
