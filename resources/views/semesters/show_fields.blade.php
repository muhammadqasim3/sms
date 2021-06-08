<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $semester->name }}</p>
</div>

<!-- Code Field -->
<div class="col-sm-12">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $semester->code }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $semester->duration }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $semester->description }}</p>
</div>

