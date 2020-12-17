<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->new_course = new Courses();
    }

    public function index()
    {
        $data['titlle'] = 'Courses';
        $data['sn'] = 1;
        $data['courses'] = Courses::all();
        return view('admin.course.index', $data);
    }

    public function add(Request $request)
    {
        if ($_POST) {
            //dd($request->all());
            $rules = array(
                'title' => ['required', 'max:255'],
                'amount' => ['required', 'max:255'],
                'tutor_name' => ['required', 'max:255'],
                'material' => ['required', 'max:255'],
                'cover' => 'required|image|mimes:jpg,jpeg,png|max:5000',
                'tutor_avatar' => 'required|image|mimes:jpg,jpeg,png|max:5000',
                'material_file' => 'mimes:pdf,docx,doc|max:15000',
                'material_video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm|max:75000',
            );
            $fieldNames = array(
                'title'     => 'Course Name',
                'amount'   => 'Amount Offered For Course',
                'tutor_name'  => 'Tutor\'s Name',
                'material'  => 'Text Material',
                'cover'   => 'Course Cover Picture',
                'tutor_avatar'   => 'Tutor\'s Picture',
                'material_file'   => 'File Material',
                'material_video'   => 'Video Material',
            );
            //dd($request->file());
            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($fieldNames);
            if ($validator->fails()) {
                Session::flash('warning', 'Please check the form again!');
                return back()->withErrors($validator)->withInput();
            } else {
                    $file = $request->file('cover');
                    $picture = 'CC' . date('dMY') . time() . '.' . $file->getClientOriginalExtension();
                    $pictureDestination = 'uploads/course/cover';
                    $file->move($pictureDestination, $picture);
                    
                    $file2 = $request->file('tutor_avatar');
                    $picture2 = 'TA' . date('dMY') . time() . '.' . $file2->getClientOriginalExtension();
                    $pictureDestination2 = 'uploads/course/tutor_avatar';
                    $file2->move($pictureDestination2, $picture2);
                    if($request->file('material_file')){
                        $file3 = $request->file('material_file');
                        $picture3 = 'MF' . date('dMY') . time() . '.' . $file3->getClientOriginalExtension();
                        $pictureDestination3 = 'uploads/course/material_file';
                        $file3->move($pictureDestination3, $picture3);
                    }
                    if($request->file('material_video')){
                        $file4 = $request->file('material_video');
                        $picture4 = 'MV' . date('dMY') . time() . '.' . $file4->getClientOriginalExtension();
                        $pictureDestination4 = 'uploads/course/material_video';
                        $file4->move($pictureDestination4, $picture4);
                    }
                try {
                    $this->new_course->new($request, $picture, $picture2, $picture3 ?? '', $picture4 ?? '');
                    Session::flash('success', 'Course Uploaded Successfully');
                    return redirect('admin/courses');
                } catch (\Throwable $th) {
                    Session::flash('error', $th->getMessage());
                    return \back();
                }
            }
        } else {
            $data['titlle'] = 'Add New Course';
            return view('admin.course.add', $data);
        }
        
    }

}
