@extends('admin.indexTeacher')

@section('show')
    {!! Form::model($research, ['url' => 'research/'.$research->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('research._formEdit', ['url' => 'research', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection