<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('object_table', [
            'title' => 'Users',
            'data' => User::all(),
            'fields' => User::INDEX_FIELDS
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('object_create_edit', [
            'object' => new User(),
            'save_url' => 'users.store',
            'method' => 'POST',
            'title' => 'Create User',
            'fields' => User::EDITABLE_FIELDS
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $object = User::findorfail($id);
        return view('object_display', [
            'object' => $object,
            'title' => 'User ' . $object->username,
            'fields' => User::SHOW_FIELDS
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $object = User::findorfail($id);
        return view('object_create_edit', [
            'object' => $object,
            'save_url' => 'users.update',
            'method' => 'PUT',
            'title' => 'Edit User ' . $object->username,
            'fields' => User::EDITABLE_FIELDS
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findorfail($id);
        $user->update($request->all());
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect('users');
    }
}
