<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classroom
 * @package App\Models
 * @version June 8, 2021, 1:16 pm UTC
 *
 * @property string $name
 * @property string $code
 * @property string $description
 * @property boolean $status
 */
class Classroom extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const STATUS_RESERVED = 0;
    const STATUS_AVAILABLE = 1;

    public static $ClassroomStatus = [
        self::STATUS_RESERVED => "Reserved",
        self::STATUS_AVAILABLE => "Available"
    ];

    public static $ClassroomStatusCssColor = [
        self::STATUS_AVAILABLE => "success",
        self::STATUS_RESERVED => "danger"
    ];

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'code',
        'description',
        'status'
    ];


    protected $appends = [
        'classroom_status_css'
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function getClassroomStatusCssAttribute() {
        return '<span class="label label-' . self::$ClassroomStatusCssColor[$this->status] . '">' . ucwords(str_replace('_', ' ',
                self::$ClassroomStatus[$this->status])) . '</span>';
    }

}
