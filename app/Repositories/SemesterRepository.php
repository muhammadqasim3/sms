<?php

namespace App\Repositories;

use App\Models\Semester;
use App\Repositories\BaseRepository;

/**
 * Class SemesterRepository
 * @package App\Repositories
 * @version June 8, 2021, 1:41 pm UTC
*/

class SemesterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'duration',
        'description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Semester::class;
    }
}
