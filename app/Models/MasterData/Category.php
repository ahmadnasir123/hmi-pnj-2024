<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'category';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function employee()
    {
        return $this->hasMany('App\Models\Operational\Employee', 'category_id');
    }

    // one to many relationship
    public function management()
    {
        return $this->hasMany('App\Models\Operational\Management', 'category_id');
    }



}
