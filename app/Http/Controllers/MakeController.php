<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Models\Work;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $work = work::all();
            return view('home.workers', [ 'works' => $work]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work =  Work::create([
            'vardas'  => $request->input('vardas'),
            'pavarde'  => $request->input('pavarde'),
            'servisas'  => $request->input('servisas'),
            'miestas'  => $request->input('miestas'),
            'image'  => $request->input('image')
        ]);
        return redirect('/workers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::find($id)->first();

        return view('home.edit')->with('work', $work);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work =  Work::where('id', $id)->update([
            'vardas'  => $request->input('vardas'),
            'pavarde'  => $request->input('pavarde'),
            'servisas'  => $request->input('servisas'),
            'miestas'  => $request->input('miestas'),
            'image'  => $request->input('image')
        ]);
        return redirect('/workers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id)->first();
        
        $work->delete();

        return redirect('/workers');
    }
}
