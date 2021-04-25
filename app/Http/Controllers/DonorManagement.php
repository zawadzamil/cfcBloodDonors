<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorManagement extends Controller
{
    public function addDonor(){
        return view('become_a_donor');
    }
    public function addDonorToDatabase(Request $value){
        // Check For Email Already Exists or Not
        if (Donor::where('email', '=',$value->get('email'))->exists()) {
            return redirect()->back()->with('failed', 'Email/User  Already Exists.');
        }
        $donor_data = new Donor([
            'name' =>$value ->get('name'),
            'email' =>$value ->get('email'),
            'phone' =>$value ->get('phone'),
            'group' =>$value ->get('group'),
            'address' =>$value ->get('address'),
            'date' =>$value ->get('date'),
        ]);
        $donor_data ->save();


        return redirect()->back()->with('success', 'You Data is Saved Successfully');

    }
}
