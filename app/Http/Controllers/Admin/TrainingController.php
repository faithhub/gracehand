<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\ShortTraining;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TrainingController extends Controller
{
  public function __construct()
  {
    $this->create_training = new Training();
    $this->create_short_training = new ShortTraining();
    $this->chapter = new Chapter();
  }

  public function short_training()
  {
    $data['page_title'] = 'Short Training';
    $data['trainings'] = ShortTraining::OrderBy('id', 'DESC')->get();
    $data['sn'] = 1;
    return view('admin.training.index_short', $data);
  }

  public function add_short_training(Request $request)
  {
    if ($_POST) {
      $rules = array(
        'title' => ['required', 'max:255'],
        'amount' => ['required', 'max:255'],
        'avatar' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5000'],
        'description' => ['required']
      );

      $fieldNames = array(
        'title' => 'Training Title',
        'amount' => 'Amount For Training',
        'avatar' => 'Training Picture',
        'description' => 'Training Description'
      );

      $validator = Validator::make($request->all(), $rules);
      $validator->setAttributeNames($fieldNames);
      if ($validator->fails()) {
        Session::flash('warning', 'error occur');
        return back()->withErrors($validator)->withInput();
      } else {
        try {
          $file = $request->file('avatar');
          $trainingCover = 'ST' . date('dMY') . time() . '.' . $file->getClientOriginalExtension();
          $fileDestination = 'uploads/short_trainings';
          $file->move($fileDestination, $trainingCover);

          $this->create_short_training->create($request, $trainingCover);
          Session::flash('success', 'Traning created Successfully');
          return redirect('admin/short-training');
        } catch (\Throwable $th) {
          Session::flash('error', $th->getMessage());
          return back();
        }
      }
    } else {
      $data['page_title'] = 'Add New Short Training';
      return view('admin.training.add_short_training', $data);
    }
  }

  public function view_short_training($id)
  {
    $data['page_title'] = 'View Short Training';
    $data['training'] = $s = ShortTraining::where('id', $id)->first();
    return view('admin.training.view_short_training', $data);
  }

  public function short_publish($id)
  {
    try {
      $training = ShortTraining::find($id);
      $training->published = 'yes';
      $training->save();
      Session::flash('success', 'Training Published successfully');
      return back();
    } catch (\Throwable $th) {
      Session::flash('warning', $th->getMessage());
      return back();
    }
  }

  public function short_unpublish($id)
  {
    try {
      $training = ShortTraining::find($id);
      $training->published = 'no';
      $training->save();
      Session::flash('success', 'Training Unpublished successfully');
      return back();
    } catch (\Throwable $th) {
      Session::flash('warning', $th->getMessage());
      return back();
    }
  }

  public function short_delete(Request $request)
  {
    try {
      $training = ShortTraining::find($request->id);
      if ($training->applied_users > 0) {
        Session::flash('warning', 'Can\'t delete this training, ' . $training->applied_users . ' User (s) has already applied');
        return back();
      } else {
        $training->delete();
        Session::flash('success', 'Training Deleted successfully');
        return back();
      }
    } catch (\Throwable $th) {
      Session::flash('warning', $th->getMessage());
      return back();
    }
  }


  public function full_training()
  {
    $data['page_title'] = 'Full Package Training';
    $data['trainings'] = Training::where(['trainingType' => 'full']);
    return view('admin.training.index_full', $data);
  }

  public function add_full_training(Request $request)
  {
    if ($_POST) {
      $rules = array(
        'title' => ['required', 'max:255'],
        'amount' => ['required', 'max:255'],
        'avatar' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5000'],
        'description' => ['required']
      );

      $fieldNames = array(
        'title' => 'Training Title',
        'amount' => 'Amount For Training',
        'avatar' => 'Training Picture',
        'description' => 'Training Description'
      );

      $validator = Validator::make($request->all(), $rules);
      $validator->setAttributeNames($fieldNames);
      if ($validator->fails()) {
        Session::flash('warning', 'error occur');
        return back()->withErrors($validator)->withInput();
      } else {
        try {
          $file = $request->file('avatar');
          $trainingCover = 'ST' . date('dMY') . time() . '.' . $file->getClientOriginalExtension();
          $fileDestination = 'uploads/short_trainings';
          $file->move($fileDestination, $trainingCover);

          $this->create_short_training->create($request, $trainingCover);
          Session::flash('success', 'Traning created Successfully');
          return redirect('admin/short-training');
        } catch (\Throwable $th) {
          Session::flash('error', $th->getMessage());
          return back();
        }
      }
    } else {
      $data['page_title'] = 'Add New Full Package Training';
      return view('admin.training.add_full_training', $data);
    }
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
