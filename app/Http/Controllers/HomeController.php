<?php

namespace App\Http\Controllers;

use App\Models\Partnership;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('auth');
    $this->create_partner = new Partnership();
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $data['title'] = "Home";
    return view('web.index', $data);
  }
  public function about()
  {
    $data['title'] = "About Us";
    return view('web.about', $data);
  }
  public function contact()
  {
    $data['title'] = "Contact Us";
    return view('web.contact', $data);
  }
  public function courses()
  {
    $data['title'] = "Home Page";
    return view('web.courses', $data);
  }
  public function course_info()
  {
    $data['title'] = "Home Page";
    return view('web.course_info');
  }
  public function partnership()
  {
    $data['title'] = "Partnership";
    return view('web.partnership', $data);
  }
  public function create_partnership(Request $request)
  {
    $refcode = rand(111111, 999999);
    $data = array(
      'fullName' => $request->fullName,
      'email' => $request->email,
      'mobile' => $request->mobile,
      'address' => $request->address,
      'refCode' => $refcode,
    );

    $rules = array(
      'fullName' => ['required', 'max:255'],
      'email' => ['required', 'email', 'max:255', 'unique:partnerships'],
      'mobile' => ['required', 'min:11', 'max:11'],
      'address' => ['required', 'max:255'],
    );

    $fieldNames = array(
      'fullName' => 'Name',
      'email' => 'E-mail',
      'mobile' => 'Mobile Number',
      'address' => 'Address',
    );

    // dd($request->all());
    // dd($data);

    $validator = Validator::make($request->all(), $rules);
    $validator->setAttributeNames($fieldNames);

    if ($validator->fails()) {
      Session::flash('error', 'Error fill your data');
      //dd($validator);
      return back()->withErrors($validator)->withInput();
    } else {
      $this->create_partner->create($data);
      Session::flash('success', 'Registeration successful, check your email for details');
      return back();
    }
  }
}
