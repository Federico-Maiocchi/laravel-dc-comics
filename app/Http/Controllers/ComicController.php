<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    public function index() {

        $comics = Comic::all();

        return view('comics.index',compact('comics'));
    }

    public function show($id) {

        $comic = Comic::find($id);

        return view('comics.show',compact('comic'));
    }

    public function create() {


        return view('comics.create');
    }

    public function store(Request $request) {

        $data = $request->all();

        // $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
        // $new_comic->save();

        // scorciatoia mettere la fillable in Models/Comic.php
        $new_comic = Comic::create($data);

        return redirect()->route('comics.show',$new_comic->id);
        
    }

    public function edit(Comic $comic) {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request,Comic $comic) {

        // dd('update');

        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.index', $comic->id);
    }

    public function destroy(Comic $comic) {

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
