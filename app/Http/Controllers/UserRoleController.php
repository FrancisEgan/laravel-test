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
        $title = 'User Roles';
        $data = UserRole::all();
        $display_fields = [
            'id' => 'Role ID', 
            'label' => 'Label'
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
        $object = new UserRole();
        $save_url = 'user_roles.store';
        $method = 'POST';
        $title = 'Create User Role';
        $display_fields = [
            'label' => 'Label'
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
        $user_role = new UserRole();
        $user_role->label = $request->label;
        $user_role->save();
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
        $title = 'User Role ' . $object->label;
        $display_fields = [
            'id' => 'Id',
            'label' => 'Label'
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
        $object = UserRole::findorfail($id);
        $save_url = 'user_roles.update';
        $method = 'PUT';
        $title = 'Edit User Role ' . $object->label;
        $display_fields = [
            'label' => 'Label'
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
        $user_role = UserRole::findorfail($id);
        $user_role->label = $request->label;
        $user_role->save();
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
