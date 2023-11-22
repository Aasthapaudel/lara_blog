<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class AdminController extends Controller
{
    //
    public function post_page()
    {
        return view('admin.post_page');
    }
    public function add_post(Request $request)
    {
        $user = Auth()->user();

        $id = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;

        $post = new POST;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        //////////////
        $post->user_id = $id;
        $post->name = $name;
        $post->usertype = $usertype;

        //////////////////////////
        $image = $request->image;




        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }


        /////////////////
        $post->save();
        return redirect()->back()->with('message', 'Post Added successfully');

    }
    public function show_post()
    {
        $post = Post::all();

        return view('admin.show_post', compact('post'));
    }
    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Post Deleted successfully');

    }
    public function edit_page($id)
    {
        $post = Post::find($id);
        return view('admin.edit_page',compact('post'));

    }
    public function update_post(Request $request,$id)
    {
        $data= Post::find($id);

        $data->title=$request->title;
        $data->description=$request->description;
$image=$request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message','Post Updated successfully');
    }

}
