<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version June 8, 2021, 1:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $roleUsers
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $first_name
 * @property string $last_name
 * @property boolean $gender
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $nationality
 * @property string $nic
 * @property string $image
 * @property boolean $status
 * @property string $date_registered
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const MALE = 10;
    const FEMALE = 20;

    public static $GENDER = [
        self::MALE => 'Male',
        self::FEMALE => 'Female'
    ];

    const ACTIVE = 1;
    const INACTIVE = 0;

    public static $USER_STATUS = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive'
    ];

    protected $dates = ['deleted_at'];

    public $with = [
        'roles'
      ];
  

    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'phone',
        'address',
        'nationality',
        'nic',
        'image',
        'status',
        'date_registered'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'boolean',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'nationality' => 'string',
        'nic' => 'string',
        'image' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'gender' => 'nullable|boolean',
        'dob' => 'nullable',
        'phone' => 'nullable|string|max:100',
        'address' => 'nullable|string',
        'nationality' => 'nullable|string|max:100',
        'nic' => 'nullable|string|max:100',
        'image' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'date_registered' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function roleUsers()
    {
        return $this->hasMany(\App\Models\RoleUser::class, 'user_id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    // dynamic attribute for showing multiple roles
    public function getRolesCsvAttribute(){
        return implode(",", $this->roles->pluck('name')->all());
    }
    
}
