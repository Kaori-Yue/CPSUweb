<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Edit Research</h1>
    </div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file', 'File') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
        </div>
        @php $num = 0; @endphp
        @foreach($research->images as $image)
            <hr>
            {!! Form::hidden('id'.$loop->iteration, $image->pivot->image_id) !!}
            <div class="form-group">
                {!! Form::label('name'.$loop->iteration, 'Section '.$loop->iteration. ' Name') !!}
                {!! Form::text('name'.$loop->iteration, $image->pivot->name, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image'.$loop->iteration, 'Section '.$loop->iteration. ' Image') !!}
                {!! Form::file('image'.$loop->iteration, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description'.$loop->iteration, 'Section '.$loop->iteration.' Description') !!}
                {!! Form::textarea('description'.$loop->iteration, $image->pivot->description, ['class' => 'form-control']) !!}
            </div>
            @php $num = $loop->iteration @endphp
        @endforeach

        @for($i = $num + 1; $i <= 5; $i++)
            <hr>
            <div class="form-group">
                {!! Form::label('name'.$i, 'Section '.$i. ' Name') !!}
                {!! Form::text('name'.$i, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image'.$i, 'Section '.$i. ' Image') !!}
                {!! Form::file('image'.$i, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description'.$i, 'Section '.$i.' Description') !!}
                {!! Form::textarea('description'.$i, null, ['class' => 'form-control']) !!}
            </div>
        @endfor
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>