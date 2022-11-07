<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setting;

class SettingController extends Controller
{

    public function index()
    {
        $bstr = file_exists(__DIR__."/resources/views/setings/index");
        if($bstr == ""){
            return redirect()->route('admin.settings.createprivacy');
        }
    }

    public function edit()
    {
        return View('admin.settings.edit');
    }

    public function createprivacy()
    {
        return View('admin.settings.privacy.createprivacy');
    }

    public function createsiteterms()
    {
        return View('admin.settings.terms.createterms');
    }

    // public function update(Request $request, Setting $setting)
    // {
    //     $setting->update($request->all());
    //     return redirect()->route('admin.settings.edit');
    // }
}
