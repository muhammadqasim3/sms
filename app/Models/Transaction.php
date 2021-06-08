<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version June 8, 2021, 1:27 pm UTC
 *
 * @property integer $student_id
 * @property integer $fee_id
 * @property integer $user_id
 * @property integer $paid
 * @property string $date
 * @property string $remarks
 * @property string $description
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'date',
        'remarks',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid' => 'integer',
        'date' => 'date',
        'remarks' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required|integer',
        'fee_id' => 'required|integer',
        'user_id' => 'required|integer',
        'paid' => 'required|integer',
        'date' => 'required',
        'remarks' => 'required|string',
        'description' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
