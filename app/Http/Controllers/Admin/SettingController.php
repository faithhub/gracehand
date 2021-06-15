<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        if ($_POST) {
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
                //dd($request->all());
                if ($request->file('avatar')) {
                    $file = $request->file('avatar');
                    $picture = 'PP' . 'CG' . date('dMY') . time() . '.' . $file->getClientOriginalExtension();
                    $pictureDestination = 'uploads/profile_pictures';
                    $file->move($pictureDestination, $picture);
                }
                $user = User::find(Auth::user()->id);
                $user->name = $request->name;
                $user->mobile = $request->mobile;
                $user->address = $request->address;
                $user->avatar = $request->hasFile('avatar') ? $picture : $user->avatar;
                $user->save();
                Session::flash('success', 'Profile Updated Successfully');
                return \back();
            }
        } else {
            $data['title'] = 'My Profile';
            return view('admin.settings.index', $data);
        }
    }
    public function change_password()
    {
        $data['title'] = 'Change Password';
        return view('admin.settings.password', $data);
    }
    public function about_us(Request $request)
    {
        if ($_POST) {
            # code...
        } else {
            $data['title'] = 'About Us';
            return view('admin.web_settings.about', $data);
        }
    }

    public function contact_us(Request $request)
    {
        if ($_POST) {
            # code...
        } else {
            $data['title'] = 'Contact Us';
            return view('admin.web_settings.contact', $data);
        }
    }

    public function slider(Request $request)
    {
        if ($_POST) {
            # code...
        } else {
            $data['title'] = 'Home Page Slider';
            $data['sn'] = 1;
            $data['sliders'] = Slider::all();
            return view('admin.web_settings.slider', $data);
        }
    }
}
