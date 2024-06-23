<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'message';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'user_id',
        'pesan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // one to many relationship
    public function user()
    {
        // 3 parameter (path model , field foreign key, primary key from table hasMany relationship/hasOne relationship) 
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    
}

