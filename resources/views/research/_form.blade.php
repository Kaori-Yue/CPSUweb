<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Create Research</h1>
    </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('publication') ? ' has-error' : '' }}">
            {!! Form::label('publication', 'ปีที่ตีพิมพ์') !!}
            {!! Form::selectRange('publication', date("Y") + 543 - 20, date("Y") + 543, null , ['class' => 'form-control', 'placeholder' => 'ปี พ.ศ.']   ) !!}
            @if ($errors->has('publication'))
                <span class="help-block">
                    <strong>{{ $errors->first('publication') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('owner') ? ' has-error' : '' }}">
            {!! Form::label('owner', 'เจ้าของ') !!}
            {!! Form::select('owner',App\Teacher::pluck('name_th', 'id'), isset($teacher) ? $teacher->id - 1 : null , ['class' => 'form-control', 'disabled'=> isset($teacher) ? true : false, 'placeholder' => 'เจ้าของ']) !!}
            @if(Auth::user()->role != 'admin')
            {!! Form::hidden('owner', 'controller') !!}
            @endif
            @if ($errors->has('owner'))
                <span class="help-block">
                    <strong>{{ $errors->first('owner') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('info') ? ' has-error' : '' }}">
            {!! Form::label('info', 'รายละเอียด') !!}
            {!! Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => 'รายละเอียด']) !!}
            @if ($errors->has('info'))
                <span class="help-block">
                    <strong>{{ $errors->first('info') }}</strong>
                </span>
            @endif
        </div>


    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>
