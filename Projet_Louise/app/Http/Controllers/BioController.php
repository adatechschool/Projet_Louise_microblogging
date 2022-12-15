<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBioRequest;
use Illuminate\Support\Facades\Gate;
use App\Models\Bio;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bio = Bio::with('author')->get();
        //we get all bios to display them
        return view('bio.indexBio', compact('bio'));
    }

    public function indexBio(User $author)
    {
        // $bio = Bio::all();
        return view(
            'bio.indexBio',
            [
                'bio' => $author->bio
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bio.createBio');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBioRequest $request)
    {
        $imageName = $request->image->store('bios');
        Bio::create(
            [
                'content' => $request->content,
                'image' => $imageName
            ]
        );

        return redirect()->route('bio')->with('success', 'Votre biographie a été créée !');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function edit(Bio $bio)
    {
        if (Gate::denies('update-bio', $bio)) {
            abort(403);
        }
        return view('bio.editBio');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBioRequest $request, Bio $bio)
    {
        $arrayUpdate = [
            'content' => $request->content
        ];

        if ($request->image != null) {
            $imageName = $request->image->store('bios');
            $arrayUpdate = array_merge($arrayUpdate, [
                'image' => $imageName
            ]);
        }

        $bio->update($arrayUpdate);

        return redirect()->route('bio')->with('success', 'Votre biographie a été modifiée !');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bio $bio)
    {

        if (Gate::denies('destroy-bio', $bio)) {
            abort(403);
        }

        $bio->delete();

        return redirect()->route('dashboard')->with('success', 'Votre biographie a été supprimée !');
    }
}
