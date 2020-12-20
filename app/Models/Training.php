<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
  use HasFactory;

  public function create($data)
  {
    $save = new self;
    $save->title = $data['title'];
    $save->description = $data['description'];
    $save->trainingType = $data['trainingType'];
    $save->amount = $data['amount'];
    $save->avatar = $data['avatar'];
    $save->save();
  }
}
