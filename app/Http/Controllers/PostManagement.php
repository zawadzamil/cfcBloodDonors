<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostManagement extends Controller
{
    public function bloodPost()
    {

        return view('bloodpost');

    }
    public function allPost()
    {

        $data = Post::all();
        return view('donation', compact('data'));

    }
    public function allDonor()
    {
        $data = Donor::all();
        return view('allDonor', compact('data'));

    }
    public function addPosttoDatabase(Request $value)
    {

        $image = $value->file('photo');
        $image_name = md5(time().rand()).".".$image ->getClientOriginalExtension();
        $image ->move(public_path('postImages'), $image_name);

        $post_data = new Post([
            'name' => $value->get('name'),
            'serial' => $value->get('serial'),
            'cname' => $value->get('cname'),
            'group' => $value->get('group'),
            'address' => $value->get('address'),
            'date' => $value->get('date'),
            'photo' => $image_name,
        ]);
        $post_data ->save();
        return redirect()->back()->with('success', ' Data is Saved Successfully');



    }
}
