@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'news', 'class' => 'form-horizontal', 'files' => 'true', 'name' => 'blogForm']) !!}
    @include('blog._form', ['header_text' => 'Create Blog', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection

@section('script')
    <script src="{{ URL::asset('js/bower_components/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: "#demo",  // change this value according to your HTML
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
            ],
            image_class_list: [
                {title: 'Responsive', value: 'img-responsive'},
                {title: 'None', value: ''}
            ],
            setup: function(ed) {
                ed.on('keydown', function(event) {
                    if (event.keyCode === 9) { // tab pressed
                        if (event.shiftKey) {
                            ed.execCommand('Outdent');
                        }
                        else {
                            ed.execCommand('Indent');
                        }

                        event.preventDefault();
                        return false;
                    }
                });
            }
        });
    </script>
@endsection