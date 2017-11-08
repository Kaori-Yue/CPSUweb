<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $header_text }}</h1>
    </div>
    <div class="panel-body">
        @if(Request::is('*/create'))
        <div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
            {!! Form::label('cover', 'Cover Image') !!}
            {!! Form::file('cover', ['class' => 'form-control', 'id' => 'uploadBlog', 'value' => 'Choose a file', 'accept' => 'image/*']) !!}
            <div class="form-group">
                <div class="upload-demo-wrap" style="margin: 20px 0">
                    <div id="upload-demo-blog"></div>
                </div>
                <div style="display: none">
                    {!! Form::label('imageCrop', 'imageCrop') !!}
                    {!! Form::text('new_image', null, ['class' => 'form-control','id' => 'new_image']) !!}
                </div>
            </div>
            {{--{!! Form::file('cover', ['class' => 'form-control']) !!}--}}
            @if ($errors->has('cover'))
                <span class="help-block">
                    <strong>{{ $errors->first('cover') }}</strong>
                </span>
            @endif

        </div>
        @else
            {!! Form::label('cover', 'Current Cover Image') !!}<br>
            <img src="{{ url('image/show/'.$blog->cover) }}" height="100" alt="">
            or
            <button data-toggle="collapse" data-target="#cover" type="button" class="btn btn-warning">
                New Cover Image
            </button>

            <div id="cover" class="collapse">
                <div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
                    {!! Form::label('cover', 'New Cover Image') !!}
                    {!! Form::file('cover', ['class' => 'form-control', 'id' => 'uploadBlog']) !!}
                    @if ($errors->has('cover'))
                        <span class="help-block">
                    <strong>{{ $errors->first('cover') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="upload-demo-wrap" style="margin: 20px 0">
                <div id="upload-demo-blog"></div>
            </div>
            <div style="display: none">
                {!! Form::label('imageCrop', $blog->id, ['id' => 'blog_id']) !!}
                {!! Form::text('new_image', null, ['class' => 'form-control', 'id' => 'new_image']) !!}
            </div>

        @endif


        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
            {!! Form::label('content', 'Content') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '30', 'style' => 'font-size:16px', 'id' => 'demo']) !!}
            @if ($errors->has('content'))
                <span class="help-block">
                    <strong>{{ $errors->first('content') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('hash_tags', 'HashTag (Separate by comma if multiple)') !!}
            {!! Form::text('hash_tags', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publish_date', 'Publish Date') !!}
            {!! Form::date('publish_date', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publish_time', 'Publish Time') !!}
            {!! Form::time('publish_time', null, ['class' => 'form-control']) !!}
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
        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}
            @if ($errors->has('category_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('category_id') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('featured', 'Featured') !!}
            {!! Form::select('featured', [0 => 'Normal',1 => 'Featured'], null, ['class' => 'form-control']) !!}
        </div>

    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg upload-result-blog']) !!}
        {!! Form::reset('Reset', ['class' => 'btn btn-default btn-lg']) !!}
    </div>
</div>
