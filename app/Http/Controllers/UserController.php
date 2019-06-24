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
        $title = 'Users';
        $data = User::all();
        $display_fields = [
            'username' => 'Username', 
            'email' => 'Email'
        ];
        return view('object_table', compact('title', 'data', 'display_fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $object = new User();
        $save_url = 'users.store';
        $method = 'POST';
        $title = 'Create User';
        $display_fields = [
            'username' => 'Username',
            'email' => 'Email'
        ];
        return view('object_create_edit', compact('object', 'save_url', 'method', 'title', 'display_fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
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
        $title = 'User ' . $object->username;
        $display_fields = [
            'id' => 'Id',
            'username' => 'Username', 
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At'
        ];
        return view('object_display', compact('object', 'title', 'display_fields'));
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
        $save_url = 'users.update';
        $method = 'PUT';
        $title = 'Edit User ' . $object->username;
        $display_fields = [
            'username' => 'Username',
            'email' => 'Email'
        ];
        return view('object_create_edit', compact('object', 'save_url', 'method', 'title', 'display_fields'));
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
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
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
