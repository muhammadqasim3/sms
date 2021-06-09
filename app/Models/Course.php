<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 * @package App\Models
 * @version June 8, 2021, 1:21 pm UTC
 *
 * @property string $name
 * @property string $code
 * @property string $description
 * @property boolean $status
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public static $CourseStatus = [
        self::STATUS_ACTIVE => "Active",
        self::STATUS_INACTIVE => "Inactive"
    ];

    public static $CourseStatusCssColor = [
        self::STATUS_ACTIVE => "success",
        self::STATUS_INACTIVE => "danger"
    ];

    public $fillable = [
        'name',
        'code',
        'description',
        'status'
    ];

    protected $appends = [
        'course_status_css'
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

    public function getCourseStatusCssAttribute() {
        return '<span class="label label-' . self::$CourseStatusCssColor[$this->status] . '">' . ucwords(str_replace('_', ' ',
            self::$CourseStatus[$this->status])) . '</span>';
    }
    
}
