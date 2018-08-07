<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Posts Model protected submitted array forms -> avoid getting mass assignment error
    protected $guarded = [];
}
