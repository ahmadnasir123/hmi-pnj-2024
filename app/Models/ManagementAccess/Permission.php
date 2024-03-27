<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'permission';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many relationship
    public function permission_role()
    {
        // 2 parameter (path model , field foreign key) 
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'permission_id');
    }

    // many to many relationship
    public function role()
    {
        return $this->belongsToMany('App\Models\ManagementAccess\Role');
    }
}
