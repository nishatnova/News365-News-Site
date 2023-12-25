<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorProfileController extends Controller
{
    public function index()
    {

        return view('visitor.profile.index'); //->with('visitor', auth()->user());
    }
    public function comment()
    {
        return view('visitor.comment.index');
    }
    public function changePassword()
    {
        return view('visitor.change-password.index');
    }

    public function updateProfile(Request $request, $id)
    {
        Visitor::updateVisitorProfile($request, $id);
        return redirect('/my-profile')->with('message', 'Visitor info updated Successfully!');
    }
}
