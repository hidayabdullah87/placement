<?php

namespace App\Http\Controllers;

use App\Contracts\JobAPI;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function indexall(Request $request)
    {
        if(!$request->user()->is('administrator')) abort(404);

        $users = User::all();
        return view('admins/main', compact('users'));
    }

    public function index(Request $request)
    {
        if(!$request->user()->is('administrator')) abort(404);

        $users = User::all();
        return view('admins/user', compact('users'));
    }

    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function makeAdmin(Request $request, $id)
    {
        if(!$request->user()->isAdministrator()) abort(404);

        $user = User::find($id);
        $user->assignRole('administrator');
//        $user->save();

        return back();
    }

    public function revokeAdmin(Request $request, $id)
    {
        if(!$request->user()->isAdministrator()) abort(404);

        $user = User::find($id);
        $user->revokeRole('administrator');
//        $user->save();

        return back();
    }
}