<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'employee';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'category_id',
        'name',
        'angkatan',
        'lk1',
        'tahun_1',
        'lk2',
        'tahun_2',
        'lk3',
        'tahun_3',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many relationship
    public function category()
    {
        return $this->belongsTo('App\Models\MasterData\Category', 'category_id', 'id');
    }

    
}
