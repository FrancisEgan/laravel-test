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
        $title = 'User Addresses';
        $data = UserAddress::all();
        $display_fields = [
            'user_id' => 'User ID', 
            'address' => 'Address'
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
        $object = new UserAddress();
        $save_url = 'user_addresses.store';
        $method = 'POST';
        $title = 'Create User Address';
        $display_fields = [
            'user_id' => 'User Id',
            'address' => 'Address',
            'province' => 'Province',
            'city' => 'City',
            'country' => 'Country',
            'postal_code' => 'Postal Code'
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
        $user_address = new UserAddress();
        $user_address->user_id = $request->user_id;
        $user_address->address = $request->address;
        $user_address->province = $request->province;
        $user_address->city = $request->city;
        $user_address->country = $request->country;
        $user_address->postal_code = $request->postal_code;
        $user_address->save();
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
        $title = 'User Address ' . $object->id;
        $display_fields = [
            'id' => 'Id',
            'user_id' => 'User Id',
            'address' => 'Address',
            'province' => 'Province',
            'city' => 'City',
            'country' => 'Country',
            'postal_code' => 'Postal Code'
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
        $object = UserAddress::findorfail($id);
        $save_url = 'user_addresses.update';
        $method = 'PUT';
        $title = 'Edit User Address ' . $object->id;
        $display_fields = [
            'user_id' => 'User Id',
            'address' => 'Address',
            'province' => 'Province',
            'city' => 'City',
            'country' => 'Country',
            'postal_code' => 'Postal Code'
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
        $user_address = UserAddress::findorfail($id);
        $user_address->user_id = $request->user_id;
        $user_address->address = $request->address;
        $user_address->province = $request->province;
        $user_address->city = $request->city;
        $user_address->country = $request->country;
        $user_address->postal_code = $request->postal_code;
        $user_address->save();
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
        $user_address = UserAddress::findorfail($id);
        $user_address->delete();
        return redirect('user_addresses');
    }
}
