<div class="table-responsive">
    <table class="table" id="semesters-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Code</th>
        <th>Duration</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($semesters as $semester)
            <tr>
                <td>{{ $semester->name }}</td>
            <td>{{ $semester->code }}</td>
            <td>{{ $semester->duration }}</td>
            <td>{{ $semester->description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['semesters.destroy', $semester->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('semesters.show', [$semester->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('semesters.edit', [$semester->id]) }}" class='btn btn-default btn-xs'>
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
