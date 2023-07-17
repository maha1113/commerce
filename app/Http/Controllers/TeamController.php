<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin-dashboard.abouts.index',[
            "teams" => $teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-dashboard.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator  =  $request->validate([

            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg','max:2048'],
            'name_en' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'facebook_link' => ['nullable', 'string', 'max:255'],
            'twitter_link' => ['nullable', 'string', 'max:255'],
            'instagram_link' => ['nullable', 'string', 'max:255']
           ]);


        $path = '';
        if($request->file('image')){
          $image = $request->file('image');
          $path = $image->store('team','public');
        }

        $teams = new Team();
        $teams->name_en = $request->name_en;
        $teams->name_ar = $request->name_ar;
        $teams->job_title = $request->job_title;
        $teams->image = $path;
        $teams->facebook_link = $request->facebook_link;
        $teams->twitter_link = $request->twitter_link;
        $teams->instagram_link = $request->instagram_link;
        // $teams->status = true;
        $teams->save();


        $flashMessage = 'create successfully';
        return redirect()->back()->with('flashMessage', $flashMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
       return view('admin-dashboard.abouts.index',[
         "team" => $team
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::findorFail($id);

        return view('admin-dashboard.abouts.edit',compact('team'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {

        $validator  =  $request->validate([

            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg','max:2048'],
            'name_en' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'facebook_link' => ['nullable', 'string', 'max:255'],
            'twitter_link' => ['nullable', 'string', 'max:255'],
            'instagram_link' => ['nullable', 'string', 'max:255']

           ]);


        $path = $team->image;
        if($request->file('image')){
          $image = $request->file('image');
          $path = $image->store('category','public');
        }

        $team->name_en = $request->name_en;
        $team->name_ar = $request->name_ar;
        $team->job_title = $request->job_title;
        $team->facebook_link = $request->facebook_link;
        $team->twitter_link = $request->twitter_link;
        $team->instagram_link = $request->instagram_link;
        $team->image = $path;
        $isSaved = $team->save();

        $flashMessage = 'update successfully';
        return redirect()->back()->with('flashMessage', $flashMessage);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Team::destroy($id);

        $flashMessage = 'deleted successfully';
        return redirect()->back()->with('flashMessage', $flashMessage);
    }
}
