<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

  public $fillable = ['name',
                      'content',
                      'category_id'];

}
