<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diaries = Diary::all();
        return view('home', compact('diaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // $newDiary = new Diary();
        // $newDiary->title = $req->title;
        // $newDiary->content = $req->content;
        // $newDiary->conclusion = $req->conclusion;
        // $newDiary->save();
        Diary::create($req->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $diary = Diary::find($id);
        return view('show', compact('diary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $diary = Diary::find($id);
        return view('edit', compact('diary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $diary = Diary::find($req->id);
        $diary->update($req->all());
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $diary = Diary::find($id);
        $diary->delete();
        return redirect()->route('home');
    }
}
