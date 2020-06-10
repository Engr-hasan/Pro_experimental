<?php

namespace App\Http\Controllers\AccessControl;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if (!auth()->user()->can('access_control_user_controller_index')) {
            abort(403, 'Unauthorized action.');
        }*/
        $data = [
            'users' => User::all(),
            'carbon' => new Carbon
        ];

        return view('accessControl.user-list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('access_control_user_controller_create')) {
            abort(403, 'Unauthorized action.');
        }

        $data = [
            'model' => new \App\User,
            'roles' => Role::pluck('name', 'id'),
        ];
//        return view('accessControl.user-list.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\User $user)
    {
        if (!auth()->user()->can('access_control_user_controller_edit')) {
            abort(403, 'Unauthorized action.');
        }

        $data = [
            'user' => $user,
            'roles' => Role::pluck('name', 'id'),
            'selected_roles' => Role::whereIn('name', $user->getRoleNames())->pluck('id')
        ];

        return view('accessControl.user-list.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (!auth()->user()->can('access_control_user_controller_update')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'roles' => 'required|array',
            'password' => 'nullable|string|min:8|confirmed'

        ]);

        $user->fill($request->only('name', 'email'));
        $user->syncRoles($request->get('roles'));
        if ($request->get('password')) $user->password = bcrypt($request->get('password'));
        $user->save();

        \Toastr::success('User Information Updated Successfully!.', '', ["progressbar" => true]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
