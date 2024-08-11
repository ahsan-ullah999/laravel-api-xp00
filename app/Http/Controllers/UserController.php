<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserStoreRequest $request, string $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return $users;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return User::destroy($id);
    }
       /**
     * search the specified resource from storage.
     * @param str $name
     * @return \Illuminate\Http\Response
     *
     */
    public function search($name)
    {
       return User::where('name', 'like', '%'.$name.'%')->get();
    }
}
