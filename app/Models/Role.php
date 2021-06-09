<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version June 8, 2021, 1:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $roleUsers
 * @property string $name
 * @property string $description
 */
class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    const SUPERADMIN = 10;
    const PRINCIPLE = 20;
    const TEACHER = 30;
    const STAFF = 40;
    const STUDENT = 50;

    public static $ROLES = [
        self::SUPERADMIN => 'Super Admin',
        self::PRINCIPLE => 'Principle',
        self::TEACHER => 'Teacher',
        self::STAFF => 'Staff',
        self::STUDENT => 'Student'
    ];

    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function roleUsers()
    {
        return $this->hasMany(\App\Models\RoleUser::class, 'role_id');
    }
}
