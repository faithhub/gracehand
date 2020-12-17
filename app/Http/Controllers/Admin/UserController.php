<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $data['title'] = 'Users';
        $data['sn'] = 1;
        $data['users'] = User::where(['role' => 'User', 'status' => 'Active'])->get();
        return view('admin.users.index', $data);
    }

    public function view_user($id)
    {
        $data['title'] = 'View User Details';
        $user = User::find($id);
        if ($user->count() > 0) {
            try {                
                $data['user'] = $user;
                return view('admin.users.view', $data);
            } catch (\Throwable $th) {
                Session::flash('warning', $th->getMessage());
                return back();
            }
        }else{
            Session::flash('warning', 'User not found');
            return back();
        }
    }

    public function edit_user($id)
    {
        $data['title'] = 'Edit User';
        $user = User::find($id);
        if ($user->count() > 0) {
            try {                
                $data['user'] = $user;
                return view('admin.users.edit', $data);
            } catch (\Throwable $th) {
                Session::flash('warning', $th->getMessage());
                return back();
            }
        }else{
            Session::flash('warning', 'User not found');
            return back();
        }
    }

    public function edit(Request $request)
    {
        //dd($request->all());
        $rules = array(
            'name' => ['required', 'max:255'],
            'mobile' => ['max:255'],
            'address' => ['max:255'],
            'avatar' => 'image|mimes:jpg,jpeg,png|max:5000',
        );
        $fieldNames = array(
            'name'     => 'Full Name',
            'mobile'   => 'Mobile Number',
            'address'  => 'Address',
            'avatar'   => 'Profile Picture',
        );
        //dd($request->all());
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);
        if ($validator->fails()) {
            Session::flash('warning', 'Please check the form again!');
            return back()->withErrors($validator)->withInput();
        } else {
            if ($request->file('avatar')) {
                $file = $request->file('avatar');
                $picture = 'PP'.'CG' . date('dMY') . time() . '.' . $file->getClientOriginalExtension();
                $pictureDestination = 'uploads/profile_pictures';
                $file->move($pictureDestination, $picture);
            }
            try {
                $user = User::find($request->id);
                $user->name = $request->name;
                $user->mobile = $request->mobile;
                $user->address = $request->address;
                $user->status = $request->status;
                $user->avatar = $request->hasFile('avatar') ? $picture : $user->avatar;
                $user->save();
                Session::flash('success', 'User Profile Updated Successfully');
                return \back();
            } catch (\Throwable $th) {
                Session::flash('error', $th->getMessage());
                return \back();
            }
        }
    }
    public function delete_user(Request $request)
    {
        try {
            User::find($request->id)->delete();            
            Session::flash('success', 'User Deleted Successfully');
            return \back();
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return \back();
        }
    }
}
