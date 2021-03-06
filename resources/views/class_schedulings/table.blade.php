<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
        <th>Teacher Id</th>
        <th>Semester Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classScheduling)
            <tr>
                <td>{{ $classScheduling->course_id }}</td>
            <td>{{ $classScheduling->level_id }}</td>
            <td>{{ $classScheduling->shift_id }}</td>
            <td>{{ $classScheduling->classroom_id }}</td>
            <td>{{ $classScheduling->batch_id }}</td>
            <td>{{ $classScheduling->day_id }}</td>
            <td>{{ $classScheduling->time_id }}</td>
            <td>{{ $classScheduling->teacher_id }}</td>
            <td>{{ $classScheduling->semester_id }}</td>
            <td>{{ $classScheduling->start_date }}</td>
            <td>{{ $classScheduling->end_date }}</td>
            <td>{{ $classScheduling->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classScheduling->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('classSchedulings.edit', [$classScheduling->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
