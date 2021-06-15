<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortTraining extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'amount', 'avatar'];

    public function create($data, $avatar)
    {
        $save = new self;
        $save->title = $data['title'];
        $save->description = $data['description'];
        $save->amount = $data['amount'];
        $save->avatar = $avatar;
        $save->save();
    }
}
