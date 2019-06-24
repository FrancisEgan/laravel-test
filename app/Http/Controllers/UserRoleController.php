<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRole;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('object_table', [
            'title' => 'User Roles',
            'data' => UserRole::all(),
            'fields' => UserRole::INDEX_FIELDS
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
            'object' => new UserRole(),
            'save_url' => 'user_roles.store',
            'method' => 'POST',
            'title' => 'Create User Role',
            'fields' => UserRole::EDITABLE_FIELDS
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
        UserRole::create($request->all());
        return redirect('user_roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $object = UserRole::findorfail($id);
        return view('object_display', [
            'object' => $object,
            'title' => 'User Role ' . $object->label,
            'fields' => UserRole::SHOW_FIELDS
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
        $object = UserRole::findorfail($id);
        return view('object_create_edit', [
            'object' => $object,
            'save_url' => 'user_roles.update',
            'method' => 'PUT',
            'title' => 'Edit User Role ' . $object->label,
            'fields' => UserRole::EDITABLE_FIELDS
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
        $user_role = UserRole::findorfail($id);
        $user_role->update($request->all());
        return redirect('user_roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_role = UserRole::findorfail($id);
        $user_role->delete();
        return redirect('user_roles');
    }
}
