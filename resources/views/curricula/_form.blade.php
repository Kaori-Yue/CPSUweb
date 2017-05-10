<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $form_header }}</h1>
    </div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('degree', 'ระดับหลักสูตร') !!}
            @if(isset($curricula))
            {!! Form::select('degree', $degree, $curricula->degree, ['class' => 'form-control']) !!}
            @else
            {!! Form::select('degree', $degree, null, ['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('name_th', 'ชื่อหลักสูตร (TH)') !!}
            {!! Form::text('name_th', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name_en', 'ชื่อหลักสูตร (EN)') !!}
            {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('degree_name_th', 'ชื่อปริญญา (TH)') !!}
            {!! Form::text('degree_name_th', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('degree_name_en', 'ชื่อปริญญา (EN)') !!}
            {!! Form::text('degree_name_en', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cost', 'ค่าใช้จ่าย') !!}
            {!! Form::number('cost', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('credit', 'จำนวนหน่วยกิต') !!}
            {!! Form::number('credit', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('enrollment_criteria', 'เกณฑ์การเข้าศึกษา') !!}
            {!! Form::textarea('enrollment_criteria', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('graduation_criteria', 'เกณฑ์สำเร็จการศึกษา') !!}
            {!! Form::textarea('graduation_criteria', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status', 'สถานะหลักสูตร') !!}
            @if(isset($curricula))
            {!! Form::select('status', $status, $curricula->status, ['class' => 'form-control']) !!}
            @else
            {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('file', 'ไฟล์รายละเอียดหลักสูตร') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>
