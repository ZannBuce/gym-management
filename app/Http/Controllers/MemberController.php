<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index')-> with('members', $members);

    }

    // public function create()
    // {
    //     return view('members.create');
    // }

    // public function update(Request $request, $id)
    // {
    //     $member = Member::find($id);
    //     $member->update($request->all());
    //     return redirect()->route('members.index')->with('success','Member updated successfully');
    // }

    // public function destroy($id)
    // {
    //     $member = Member::findOrFail($id);
    //     $member->delete();

    //     return redirect()->route('members.index')->with('success', 'Member deleted successfully');
    // }

    // public function trainer($id)
    // {
    //     $member = Member::find($id);
    //     $trainer = $member->trainer;

    //     return view('members.trainer', compact('trainer'));
    // }


    // public function showMembership($id)
    // {
    //     $member = Member::find($id);
    //     $membership = $member->membership;

    //     return view('members.membership', compact('membership'));
    // }



}
