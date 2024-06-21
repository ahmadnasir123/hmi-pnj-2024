<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tulisan extends Model
{
    // use HasFactory;

    use SoftDeletes;
    // declare table
    public $table = 'tulisan';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'judul',
        'deskripsi',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}