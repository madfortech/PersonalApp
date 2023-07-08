<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\SitePrivicy;
// use App\Http\Requests\SitePrivicyRequest;
use Illuminate\Http\Request;

class SitePriviciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $siteprivicies= SitePrivicy::latest()->get();
        return view('user.siteprivicies.index', ['siteprivicies'=>$siteprivicies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SitePrivicyRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $siteprivicy = SitePrivicy::findOrFail($id);
        return view('user.siteprivicies.edit',['siteprivicy'=>$siteprivicy]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SitePrivicyRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $siteprivicy = SitePrivicy::findOrFail($id);
		$siteprivicy->title = $request->input('title');
		$siteprivicy->description = $request->input('description');
        $siteprivicy->save();

        return redirect()
        ->back()
        ->with('success', 'Site Privicy update success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
      //
    }
}
