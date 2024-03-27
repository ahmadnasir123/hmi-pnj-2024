<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'detail_user';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function type_user()
    {
        // 2 parameter (path model, field foreign key, field primary key from table has many/one)
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }

    public function user()
    {
        // 2 parameter (path model, field foreign key, field primary key from table has many/one)
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
