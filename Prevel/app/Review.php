<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use Notifiable;

    protected $fillable = [
        'tripname','province','location','start date','end date','description'
    ];
}
