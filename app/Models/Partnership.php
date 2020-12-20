<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
  use HasFactory;

  public function create($data)
  {
    $save = new self;
    $save->fullName = $data['fullName'];
    $save->email = $data['email'];
    $save->address = $data['address'];
    $save->mobile = $data['mobile'];
    $save->refCode = $data['refCode'];
    $save->save();
  }
}
