@extends('admin.index')

@section('show')
    {!! Form::model($blog, ['url' => 'news/'.$blog->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true', 'name' => 'blogForm']) !!}
    @include('blog._form', ['header_text' => 'Edit Blog', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection

@section('head')
    <script src="{{ URL::asset('js/bower_components/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: "#demo",
            content_css : "{{ URL::asset('css/main.css') }}",
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
            image_list: [
                    @foreach($images as $image)
                {title: "{!! $image->original_name !!}", value: "{!! url('image/show/'.$image->id) !!}"},
                @endforeach
            ]
        });
    </script>
@endsection