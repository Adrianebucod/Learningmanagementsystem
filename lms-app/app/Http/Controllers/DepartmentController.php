<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class DepartmentController extends Controller
{
    function department(){
        return view('adminside.department');
    }
    function departmentPost(Request $request){
        $request->validate(['departmentname'=>'required|unique:department',
                            'personincharge'=>'required',
                           ]);
        $department = new Department();
        $department->departmentname = $request->departmentname;
        $department->personincharge = $request->personincharge;
        $res = $department->save();
        if($res){
            return back()->with('success','You have added department successfully');
        }else{
            return back()->with('error','Something wrong');
        }
    }

    function show(){
        $data=department::all();
        return view('adminside.department',['department'=>$data]);
    }

    public function delete($id)
    {
        DB::delete('delete from department where id = ?', [$id]);
        return redirect('department')->with('success','Department Deleted');
    }
}
