<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAddress;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('object_table', [
            'title' => 'User Addressses',
            'data' => UserAddress::all(),
            'fields' => UserAddress::INDEX_FIELDS
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
            'object' => new UserAddress(),
            'save_url' => 'user_addresses.store',
            'method' => 'POST',
            'title' => 'Create User Addresss',
            'fields' => UserAddress::EDITABLE_FIELDS
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
        UserAddress::create($request->all());
        return redirect('user_addresses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $object = UserAddress::findorfail($id);
        return view('object_display', [
            'object' => $object,
            'title' => 'User Addresss ' . $object->id,
            'fields' => UserAddress::SHOW_FIELDS
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
        $object = UserAddress::findorfail($id);
        return view('object_create_edit', [
            'object' => $object,
            'save_url' => 'user_addresses.update',
            'method' => 'PUT',
            'title' => 'Edit User Addresss ' . $object->id,
            'fields' => UserAddress::EDITABLE_FIELDS
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
        $user_role = UserAddress::findorfail($id);
        $user_role->update($request->all());
        return redirect('user_addresses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_role = UserAddress::findorfail($id);
        $user_role->delete();
        return redirect('user_addresses');
    }
}
