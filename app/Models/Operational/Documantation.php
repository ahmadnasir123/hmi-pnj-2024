<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documantation extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'documantation';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
