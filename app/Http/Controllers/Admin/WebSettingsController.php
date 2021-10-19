<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class WebSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }



    public function index(Request $request)
    {
        function save_file($file)
        {
            if ($file) {
                $picture = Uuid::randomNumber(4) . date('dMY') . time() . '.' . $file->getClientOriginalExtension();
                $pictureDestination = 'uploads/logo';
                $file->move($pictureDestination, $picture);
                return $picture;
            } else {
                return null;
            }
        }

        if ($_POST) {
            //dd($request->all());
            $rules = array(
                'website_name' => ['max:255'],
                'email' => ['max:255'],
                'phone' => ['max:255'],
                'ceo_name' => ['max:255'],
                'facebook_link' => ['max:255'],
                'twitter_link' => ['max:255'],
                'linkedin_link' => ['max:255'],
                'website_logo' => 'image|mimes:jpg,jpeg,png|max:5000',
                'dashboard_logo' => 'image|mimes:jpg,jpeg,png|max:5000',
                'ceo_picture' => 'image|mimes:jpg,jpeg,png|max:5000',
            );
            $fieldNames = array(
                'website_name' => 'Website Name',
                'ceo_name' => 'CEO Name',
                'about_content' => 'About Content',
                'website_logo' => 'Website Logo',
                'dashboard_logo' => 'Dashboard Logo',
                'ceo_picture' => 'CEO Picture',
                'facebook_link' => 'FaceBook Link',
                'twitter_link' => 'Twitter Link',
                'linkedin_link' => 'LinkedIn Link',
            );
            //dd($request->all());
            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($fieldNames);
            if ($validator->fails()) {
                Session::flash('warning', 'Please check the form again!');
                return back()->withErrors($validator)->withInput();
            } else {
                function save_file_to_base64($file)
                {
                    if ($file) {
                        $extension = $file->extension();
                        $extension = 'jpeg';
                        $image = base64_encode(file_get_contents($file));
                        return $extension . '-' . $image;
                    } else {
                        return null;
                    }
                }
                $settings = Setting::first();
                $type = $request->type;
                switch ($type) {
                    case 'index':
                        if ($settings) {
                            $settings->website_name = $request->website_name;
                            $settings->facebook_link = $request->facebook_link;
                            $settings->twitter_link = $request->twitter_link;
                            $settings->linkedin_link = $request->linkedin_link;
                            $settings->website_logo = $request->hasFile('website_logo') ? save_file_to_base64($request->file('website_logo')) : $settings->website_logo;
                            $settings->dashboard_logo = $request->hasFile('dashboard_logo') ? save_file_to_base64($request->file('dashboard_logo')) : $settings->dashboard_logo;
                            $settings->save();
                            Session::flash('success', 'Website Settings Updated Successfully');
                            return \back();
                        } else {
                            $data = [
                                'website_name' => $request->website_name,
                                'facebook_link' => $request->facebook_link,
                                'twitter_link' => $request->twitter_link,
                                'linkedin_link' => $request->linkedin_link,
                                'website_logo' => $request->hasFile('website_logo') ? save_file($request->file('website_logo')) : '',
                                'dashboard_logo' => $request->hasFile('dashboard_logo') ? save_file($request->file('dashboard_logo')) : '',
                            ];
                            Setting::create($data);
                            Session::flash('success', 'Website Settings Updated Successfully');
                            return \back();
                        }
                        break;
                    case 'about':
                        if ($settings) {
                            $settings->ceo_name = $request->ceo_name;
                            $settings->about_content = $request->about_content;
                            $settings->website_logo = $request->hasFile('ceo_picture') ? save_file_to_base64($request->file('ceo_picture')) : $settings->ceo_picture;
                            $settings->save();
                            Session::flash('success', 'About Us Settings Updated Successfully');
                            return \back();
                        } else {
                            $data = [
                                'ceo_name' => $request->ceo_name,
                                'about_content' => $request->about_content,
                                'ceo_picture' => $request->hasFile('ceo_picture') ? save_file($request->file('ceo_picture')) : '',
                            ];
                            Setting::create($data);
                            Session::flash('success', 'About Us Settings Updated Successfully');
                            return \back();
                        }
                        break;
                    case 'contact':
                        if ($settings) {
                            $settings->email = $request->email;
                            $settings->address = $request->address;
                            $settings->phone = $request->phone;
                            $settings->short_desc = $request->short_desc;
                            $settings->save();
                            Session::flash('success', 'Contact Us Settings Updated Successfully');
                            return \back();
                        } else {
                            $data = [
                                'email' => $request->email,
                                'phone' => $request->phone,
                                'address' => $request->address,
                                'short_desc' => $request->short_desc,
                            ];
                            Setting::create($data);
                            Session::flash('success', 'Contact Us Settings Updated Successfully');
                            return \back();
                        }
                        break;

                    default:
                        # code...
                        break;
                }

                return \back();
            }
        } else {
            $data['title'] = 'Web Settings';
            return view('admin.web_settings.index', $data);
        }
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
