<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Management extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'management';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'category_id',
        'employee_id',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many relationship
    public function category()
    {
        return $this->belongsTo('App\Models\MasterData\Category', 'category_id', 'id');
    }

    // one to many relationship
    public function employee()
    {
        return $this->belongsTo('App\Models\Operational\Employee', 'employee_id', 'id');
    }
}
