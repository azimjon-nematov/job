<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Location;
use App\Models\Company;

class PostController extends Controller
{

    public function index()
    {
        // $posts = Post::paginate(5);
        // return view('index', compact('posts'))->with('i', (\request()->input('page', 1) -1) *5);

        $jobTypes = JobType::all();
        $companies = Company::all();
        $locations = Location::all();
        return view('post.index', [ 'jobTypes'=>$jobTypes, 'companies'=>$companies, 'locations'=>$locations, ]);
    }

    public function create(Request $request)
    {
        dd($request);
        $request->validate([
            'title'=>'required',
        ]);
        Job::create($request);
        return redirect('/index.php');
    }

    // public function store(Request $request)
    // {
    //     Post::create($request->all());
    //     return redirect()->route('post.index')->with('message', 'Post has been created successfully!');
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit(Post $post)
    // {
    //     return view('edit', compact('post'));
    // }

    // public function update(Request $request, Post $post)
    // {
    //     $post->update($request->all());
    //     return redirect()->route('post.index')->with('message', 'Post has been updated succesfully!');
    // }

    // public function destroy(Post $post)
    // {
    //     $post->delete();
    //     return redirect()->route('post.index')->with('message', 'Post has benn deleted succesflly!');
    // }
}
