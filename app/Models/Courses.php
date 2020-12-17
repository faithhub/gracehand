<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function new($data, $picture, $picture2, $picture3, $picture4)
    {
        //dD($data);
        $save      = new self();
        $save->cover = $picture;
        $save->title = $data->title;
        $save->amount = $data->amount;
        $save->tutor_avatar = $picture2;
        $save->tutor_name = $data->tutor_name;
        $save->material_file = $picture3;
        $save->material_video = $picture4;
        $save->material = $data->material;
        $save->save();

    }
}
