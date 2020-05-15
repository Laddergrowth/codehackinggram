<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $guarded = [];  // linha que da permiaso pra passar tudo que ta okay part 2:03:18

        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
