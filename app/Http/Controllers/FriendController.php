<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\friends;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        //
        $friends = friends::with('gender')->get();
        return view('friends.display', compact('friends'));
    }

    public function create()
    {
        //
        $communicate = communicate::all();
        return view('friends.create', compact('communicate'));
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'ig user' => 'required'
        ]);

        friends::create($request->all());
        return redirect()->route('friends.display')->with('success', 'Data teman berhasil ditambahkan.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(friends $friends)
    {
        //
        $friends = friends::all();
        return view('friends.edit', compact('friends'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, friends $friends)
    {
        //
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'ig user' => 'required'
        ]);

        $friends->update($request->all());
        return redirect()->route('friends.index')->with('success', 'Data teman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(friends $friends)
    {
        //
        $friends->delete();
        return redirect()->route('friends.index')->with('success', 'Data teman berhasil dihapus.');
    }
}
