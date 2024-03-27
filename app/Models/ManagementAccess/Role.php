<?php

namespace App\Models\ManagementAccess;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'role';

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

    // many to many relationship
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    // many to many relationship
    public function permission()
    {
        return $this->belongsToMany('App\Models\ManagementAccess\Permission');
    }
    
    // one to many relationship
    public function role_user()
    {
        // 2 parameter (path model , field foreign key) 
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }

    // one to many relationship
    public function permission_role()
    {
        // 2 parameter (path model , field foreign key) 
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
}
