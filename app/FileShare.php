<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileShare extends Model
{
    # Каким полям разрешено массовое заполнение  ($task->fill($request->all());)
    //protected $fillable = ['author_nickname', 'message'];
    protected $guarded = [];
    protected $table = 'file_share';

    //
}
