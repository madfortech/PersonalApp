<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;

class EditProfileController extends Controller
{
    public function edit()
    {
        return view('auth.profile.edit');
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update($request->validated());

        return redirect()
            ->route('profile.profile.edit')
            ->with('success', __('Profile update successfully'));
    }
}
