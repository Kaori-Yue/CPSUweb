<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $form_header }}</h1>
    </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">
            {!! Form::label('degree', 'ระดับหลักสูตร') !!}
            @if(isset($curricula))
            {!! Form::select('degree', $degree, $curricula->degree, ['class' => 'form-control']) !!}
            @else
            {!! Form::select('degree', $degree, null, ['class' => 'form-control']) !!}
            @endif
            @if ($errors->has('degree'))
                <span class="help-block">
                    <strong>{{ $errors->first('degree') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('name_th') ? ' has-error' : '' }}">
            {!! Form::label('name_th', 'ชื่อหลักสูตร (TH)') !!}
            {!! Form::text('name_th', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name_th'))
                <span class="help-block">
                    <strong>{{ $errors->first('name_th') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
            {!! Form::label('name_en', 'ชื่อหลักสูตร (EN)') !!}
            {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('name_en') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('degree_name_th') ? ' has-error' : '' }}">
            {!! Form::label('degree_name_th', 'ชื่อปริญญา (TH)') !!}
            {!! Form::text('degree_name_th', null, ['class' => 'form-control']) !!}
            @if ($errors->has('degree_name_th'))
                <span class="help-block">
                    <strong>{{ $errors->first('degree_name_th') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('degree_name_en') ? ' has-error' : '' }}">
            {!! Form::label('degree_name_en', 'ชื่อปริญญา (EN)') !!}
            {!! Form::text('degree_name_en', null, ['class' => 'form-control']) !!}
            @if ($errors->has('degree_name_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('degree_name_en') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
            {!! Form::label('cost', 'ค่าใช้จ่าย') !!}
            {!! Form::number('cost', null, ['class' => 'form-control']) !!}
            @if ($errors->has('cost'))
                <span class="help-block">
                    <strong>{{ $errors->first('cost') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('credit') ? ' has-error' : '' }}">
            {!! Form::label('credit', 'จำนวนหน่วยกิต') !!}
            {!! Form::number('credit', null, ['class' => 'form-control']) !!}
            @if ($errors->has('credit'))
                <span class="help-block">
                    <strong>{{ $errors->first('credit') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('enrollment_criteria') ? ' has-error' : '' }}">
            {!! Form::label('enrollment_criteria', 'เกณฑ์การเข้าศึกษา') !!}
            {!! Form::textarea('enrollment_criteria', null, ['class' => 'form-control']) !!}
            @if ($errors->has('enrollment_criteria'))
                <span class="help-block">
                    <strong>{{ $errors->first('enrollment_criteria') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('graduation_criteria') ? ' has-error' : '' }}">
            {!! Form::label('graduation_criteria', 'เกณฑ์สำเร็จการศึกษา') !!}
            {!! Form::textarea('graduation_criteria', null, ['class' => 'form-control']) !!}
            @if ($errors->has('graduation_criteria'))
                <span class="help-block">
                    <strong>{{ $errors->first('graduation_criteria') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('entrance_subject') ? ' has-error' : '' }}">
            {!! Form::label('entrance_subject', 'วิชาที่สอบ') !!}
            {!! Form::textarea('entrance_subject', null, ['class' => 'form-control']) !!}
            @if ($errors->has('entrance_subject'))
                <span class="help-block">
                    <strong>{{ $errors->first('entrance_subject') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('document') ? ' has-error' : '' }}">
            {!! Form::label('document', 'เอกสาร') !!}
            {!! Form::textarea('document', null, ['class' => 'form-control']) !!}
            @if ($errors->has('document'))
                <span class="help-block">
                    <strong>{{ $errors->first('document') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            {!! Form::label('status', 'สถานะหลักสูตร') !!}
            @if(isset($curricula))
            {!! Form::select('status', $status, $curricula->status, ['class' => 'form-control']) !!}
            @else
            {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
            @endif
            @if ($errors->has('status'))
                <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
            {!! Form::label('file', 'ไฟล์รายละเอียดหลักสูตร') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
            @if ($errors->has('file'))
                <span class="help-block">
                    <strong>{{ $errors->first('file') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>
