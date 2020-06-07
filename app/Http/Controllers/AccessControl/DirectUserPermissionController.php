<?php

namespace App\Http\Controllers\AccessControl;

use App\Http\Controllers\Controller;
use App\ModelHasPermission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class DirectUserPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'users'=>User::paginate(15),
            'permissions'=>Role::all(),
//            'permissions'=>DB::table('permissions')->paginate(15),
            'model_has_permissions'=>ModelHasPermission::all(),
            'cross_check'=>function($model_has_permissions, $user_id, $permission_id){
                foreach($model_has_permissions as $row){
                    if($user_id==$row->model_id && $permission_id==$row->permission_id){
                        return 'checked';
                    }
                }
                return '';
            }
        ];

        //dd($data);

        return view('accessControl.direct-user-permission.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $matrix=$request->get('matrix');
        ModelHasPermission::truncate();
        if(is_array($matrix)){
            foreach($matrix as $user_id=>$permissions){
                $user=User::find($user_id);
                $user->syncPermissions($permissions);
            }
        }

        \Toastr::success('Information Updated Successfully!.', '', ["progressbar" => true]);
        return redirect()->back();
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
    public function edit($id)
    {
        //
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
        //
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
