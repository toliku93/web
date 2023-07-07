<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'score', 'comment',
    ];

    public function people()
    {
        return $this->belongsTo('App\Models\People');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
