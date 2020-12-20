<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
  use HasFactory;
  public function create($data)
  {
    $save = new self();
    $save->trainingId = $data['trainingId'];
    $save->chapterTitle = $data['chapterTitle'];
    $save->chapterNo = $data['chapterNo'];
    $save->content = $data['content'];
    $save->save();
  }
}
