<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\SiteTerm;
// use App\Http\Requests\SiteTermRequest;
use Illuminate\Http\Request;

class SiteTermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $siteterms= SiteTerm::latest()->get();
        return view('user.siteterms.index', ['siteterms'=>$siteterms]);
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
     * @param  SiteTermRequest  $request
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
        $siteterm = SiteTerm::findOrFail($id);
        return view('siteterms.show',['siteterm'=>$siteterm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $siteterms = SiteTerm::findOrFail($id);
        return view('user.siteterms.edit',['siteterms'=>$siteterms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SiteTermRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $siteterm = SiteTerm::findOrFail($id);
		$siteterm->title = $request->input('title');
		$siteterm->description = $request->input('description');
        $siteterm->save();

        return redirect()
        ->back()
        ->with('success', 'Term condition update success!');
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
