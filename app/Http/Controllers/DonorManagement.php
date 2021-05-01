<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Post;
use Illuminate\Http\Request;

class DonorManagement extends Controller
{
    public function addDonor()
    {
        return view('become_a_donor');
    }

    public function ediTDonor($id)
    {
        $data = Donor::find($id);
        return view('edit_donor', compact('data'));
    }

    public function allDonor()
    {
        $data = Donor::all();
        return view('allDonor', compact('data'));

    }
    public function allDonorTeam()
    {
        $data = Donor::all();
        return view('team', compact('data'));

    }
    public function search(Request $request)
    {
        $data = $request ->get('group');
        $allDonor = Donor::all()->where('group',$data);
        return view('searchResult', compact('allDonor'));

    }
//    public function adminPannelCounter()
//    {
//        $donors = Donor::all() ->count();
//        $posts = Post::all() ->count();
//        return view('adminPannel', compact('donors','posts'));
//
//    }

    public function deleteDonor($id)
    {
        $delete_data = Donor::find($id);
        $delete_data->delete();
        return redirect()->back();


    }

    public function updateDonor(Request $request, $id)
    {
        $update = Donor::find($id);
        $update->name = $request->get('name');
        $update->email = $request->get('email');
        $update->phone = $request->get('phone');
        $update->group = $request->get('group');
        $update->address = $request->get('address');
        $update->date = $request->get('date');
        $update->save();
        return redirect('allDonor');


    }


    public function addDonorToDatabase(Request $value)
    {
        // Check For Email Already Exists or Not
        if (Donor::where('email', '=', $value->get('email'))->exists()) {
            return redirect()->back()->with('failed', 'Email/User  Already Exists.');
        }
        $donor_data = new Donor([
            'name' => $value->get('name'),
            'email' => $value->get('email'),
            'phone' => $value->get('phone'),
            'group' => $value->get('group'),
            'address' => $value->get('address'),
            'date' => $value->get('date'),
        ]);
        $donor_data ->save();


        return redirect()->back()->with('success', ' Data is Saved Successfully');

    }
}
