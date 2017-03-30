@extends('main')

@section('content')
    <div class="container" {{--style="border: solid"--}}>
        <div class="row">
        {!! Form::open(['url' => 'teacher', 'class' => 'form-horizontal', 'files' => 'true']) !!}
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>Create Teacher</h1>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('name_th', 'Name(TH)') !!}
                    {!! Form::text('name_th', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name_en', 'Name(EN)') !!}
                    {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('doctor_degree', 'Doctor Degree') !!}
                    {!! Form::text('doctor_degree', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('master_degree', 'Master Degree') !!}
                    {!! Form::text('master_degree', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('bachelor_degree', 'Bachelor Degree') !!}
                    {!! Form::text('bachelor_degree', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('website', 'Website') !!}
                    {!! Form::text('website', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('position', 'Position') !!}
                    {!! Form::text('position', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('expertise', 'Expertise') !!}
                    {!! Form::text('expertise', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Status') !!}
                    {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'Image') !!}
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="panel-footer">
                {!! Form::submit('Finish', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
@stop