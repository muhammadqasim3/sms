<div class="table-responsive">
    <table class="table" id="faculties-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Code</th>
        <th>Description</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculty)
            <tr>
                <td>{{ $faculty->name }}</td>
            <td>{{ $faculty->code }}</td>
            <td>{{ $faculty->description }}</td>
            <td>{{ $faculty->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faculties.destroy', $faculty->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faculties.show', [$faculty->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faculties.edit', [$faculty->id]) }}" class='btn btn-default btn-xs'>
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
