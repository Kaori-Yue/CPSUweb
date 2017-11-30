<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $header_text }}</h1>
    </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('name_th') ? ' has-error' : '' }}">
            {!! Form::label('name_th', 'Name(TH)') !!}
            {!! Form::text('name_th', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name_th'))
                <span class="help-block">
                    <strong>{{ $errors->first('name_th') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
            {!! Form::label('name_en', 'Name(EN)') !!}
            {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('name_en') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('doctor_degree') ? ' has-error' : '' }}">
            {!! Form::label('doctor_degree', 'Doctor Degree') !!}
            {!! Form::text('doctor_degree', null, ['class' => 'form-control']) !!}
            @if ($errors->has('doctor_degree'))
                <span class="help-block">
                    <strong>{{ $errors->first('doctor_degree') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('master_degree') ? ' has-error' : '' }}">
            {!! Form::label('master_degree', 'Master Degree') !!}
            {!! Form::text('master_degree', null, ['class' => 'form-control']) !!}
            @if ($errors->has('master_degree'))
                <span class="help-block">
                    <strong>{{ $errors->first('master_degree') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('bachelor_degree') ? ' has-error' : '' }}">
            {!! Form::label('bachelor_degree', 'Bachelor Degree') !!}
            {!! Form::text('bachelor_degree', null, ['class' => 'form-control']) !!}
            @if ($errors->has('bachelor_degree'))
                <span class="help-block">
                    <strong>{{ $errors->first('bachelor_degree') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
            {!! Form::label('website', 'Website') !!}
            {!! Form::text('website', null, ['class' => 'form-control']) !!}
            @if ($errors->has('website'))
                <span class="help-block">
                    <strong>{{ $errors->first('website') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
            {!! Form::label('position', 'Position') !!}
            {!! Form::text('position', null, ['class' => 'form-control']) !!}
            @if ($errors->has('position'))
                <span class="help-block">
                    <strong>{{ $errors->first('position') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('expertise') ? ' has-error' : '' }}">
            {!! Form::label('expertise', 'Expertise') !!}
            {!! Form::text('expertise', null, ['class' => 'form-control']) !!}
            @if ($errors->has('expertise'))
                <span class="help-block">
                    <strong>{{ $errors->first('expertise') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            {!! Form::label('status', 'Status') !!}
            {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
            @if ($errors->has('status'))
                <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>

        @if(Request::is('*/create'))
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('image', 'Image') !!}
            {!! Form::file('image', ['class' => 'form-control', 'id' => 'upload']) !!}
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
            <div class="upload-demo-wrap" style="margin: 20px 0">
                <div id="upload-demo"></div>
            </div>
            <div style="display: none">
                {!! Form::label('imageCrop') !!}
                {!! Form::text('new_image', null, ['class' => 'form-control', 'id' => 'new_image']) !!}
            </div>


        @else
            {!! Form::label('image', 'Current Image') !!}<br>
            <img src="{{ url('image/show/'.$teacher->image) }}" height="100" alt="">
            or
            <button data-toggle="collapse" data-target="#cover" type="button" class="btn btn-warning">
                New Image
            </button>

            <div id="cover" class="collapse">
                {!! Form::label('image', 'Image') !!}
                {!! Form::file('image', ['class' => 'form-control', 'id' => 'upload', 'value' => 'Choose a file', 'accept' => 'image/*']) !!}
                @if ($errors->has('image'))
                    <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
            <div class="upload-demo-wrap" style="margin: 20px 0">
                <div id="upload-demo" class="upload-result-teacher-update"></div>
            </div>
            <div style="display: none">
                {!! Form::label('imageCrop', $teacher->id, ['id' => 'teacher_id']) !!}
                {!! Form::text('new_image', null, ['class' => 'form-control', 'id' => 'new_image']) !!}
            </div>
        @endif
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg upload-result']) !!}
    </div>
</div>



