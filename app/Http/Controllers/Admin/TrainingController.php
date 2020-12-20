<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TrainingController extends Controller
{
  public function __construct()
  {
    $this->create_training = new Training();
    $this->chapter = new Chapter();
  }

  public function ongoing_training()
  {
    $data['page_title'] = 'Short Training';
    $data['trainings'] = Training::where([['trainingType', 'short']])->get();
    $data['sn'] = 1;
    return view('admin.training.index', $data);
  }

  public function full_training()
  {
    $data['page_title'] = 'Full Training';
    $data['trainings'] = Training::where(['trainingType' => 'full']);
    return view('admin.training.index', $data);
  }

  public function add_training()
  {
    return view('admin.training.add');
  }

  public function addNewTraining(Request $request)
  {
    $rules = array(
      'title' => ['required', 'max:255'],
      'amount' => ['required', 'max:255'],
      'avatar' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5000'],
      'trainingType' => ['required', 'max:255'],
      'description' => ['required']
    );

    $fieldNames = array(
      'title' => 'Title',
      'amount' => 'Amount',
      'avatar' => 'Avatar',
      'trainingType' => 'Training Type',
      'description' => 'Description'
    );

    // dd($request);

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      Session::flash('error', 'Testing error');
      return back()->withErrors($validator)->withInput();
    } else {
      if ($request->file('avatar')) {
        $file = $request->file('avatar');
        $trainingCover = 'Training' . date('dMY') . time() . '.' . $file->getClientOriginalExtension();
        $fileDestination = 'uploads/trainings';
        $file->move($fileDestination, $trainingCover);
      }

      $data = array(
        'title' => $request->title,
        'amount' => $request->amount,
        'avatar' => $trainingCover,
        'trainingType' => $request->trainingType,
        'description' => $request->description
      );

      $this->create_training->create($data);
      Session::flash('success', 'Traning created Successfully');
      // dd($request);
      return back();
    }
  }

  public function addChapters($trainingId)
  {
    if ($trainingId == null) {
      Session::flash('warning', 'Something went wrong, please refresh the page');
      return back();
    } else {
      $data['trainingInfo'] = Training::where(['id' => $trainingId])->get();
      $data['chapterCount'] = Chapter::where([['trainingId', $trainingId]])->count();
      return view('admin.training.addChapter', $data);
    }
  }

  public function addChapter(Request $request)
  {
    $data = array(
      'trainingId' => $request->trainingId,
      'chapterTitle' => $request->chapterTitle,
      'chapterNo' => $request->chapterNo,
      'content' => $request->content,
    );

    $rules = array(
      'trainingId' => ['required'],
      'chapterTitle' => ['required', 'max:255'],
      'chapterNo' => ['required'],
      'content' => ['required'],
    );

    $fieldNames = array(
      'trainingId' => 'Training Id',
      'chapterTitle' => 'Chapter Title',
      'chapterNo' => 'Chapter Number',
      'content' => 'Chapter Content',
    );

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      Session::flash('warning', 'Something went wrong, please check your inputs, or refresh the page');
      return back()->withErrors($validator)->withInput();
    } else {
      // dd($data);
      $this->chapter->create($data);
      Session::flash('success', 'Something went wrong, please refresh the page');
      return back();
    }
  }

  public function publish(Request $request)
  {
    if ($request == null) {
      Session::flash('warning', 'Something went wrong, please check your inputs, or refresh the page');
      return back();
    } else {
      // dd($request);
      $training = Training::find($request->trainingId);
      $training->published = 'yes';
      $training->save();
      Session::flash('success', 'Training published successfully');
      return back();
    }
  }
}
