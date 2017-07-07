<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $header_text }}</h1>
    </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
            {!! Form::label('cover', 'Cover Image') !!}
            {!! Form::file('cover', ['class' => 'form-control']) !!}
            @if ($errors->has('cover'))
                <span class="help-block">
                    <strong>{{ $errors->first('cover') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
            {!! Form::label('content', 'Content') !!}
            <div class="col-md-12" style="padding: 0">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#imageModal">
                    <i class="material-icons">insert_photo</i>
                </button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#fileModal">
                    <i class="material-icons">attach_file</i>
                </button>
                <button onclick="addTab()" type="button" class="btn btn-default">
                    <i class="material-icons">format_indent_increase</i>
                </button>
                <button onclick="addBold()" type="button" class="btn btn-default">
                    <i class="material-icons">format_bold</i>
                </button>
                <button onclick="addItalic()" type="button" class="btn btn-default">
                    <i class="material-icons">format_italic</i>
                </button>
                <button onclick="addQuote()" type="button" class="btn btn-default">
                    <i class="material-icons">format_quote</i>
                </button>
                <button onclick="addSmall()" type="button" class="btn btn-default">
                    <i class="material-icons">format_size</i>
                </button>
                <button onclick="addUnderline()" type="button" class="btn btn-default">
                    <i class="material-icons">format_underlined</i>
                </button>
                <button onclick="addHeader()" type="button" class="btn btn-default">
                    <i class="material-icons">title</i>
                </button>
                <button onclick="addOrderList()" type="button" class="btn btn-default">
                    <i class="material-icons">format_list_numbered</i>
                </button>
                <button onclick="addUnorderList()" type="button" class="btn btn-default">
                    <i class="material-icons">format_list_bulleted</i>
                </button>
                <button onclick="addTable()" type="button" class="btn btn-default">
                    <i class="material-icons">border_all</i>
                </button>
                <button onclick="addLink()" type="button" class="btn btn-default">
                    <i class="material-icons">insert_link</i>
                </button>
                <button onclick="addVideo()" type="button" class="btn btn-default">
                    <i class="material-icons">local_movies</i>
                </button>
            </div>
            <div class="col-md-6">
                {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '25', 'style' => 'font-size:14px', 'id' => 'demo']) !!}
                @if ($errors->has('content'))
                    <span class="help-block">
                    <strong>{{ $errors->first('content') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-md-6">
                <div id="out" style="padding: 1%;background: #f9f9f9; height: 490px;font-size: 14px"></div>
            </div>
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
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
        {!! Form::reset('Reset', ['class' => 'btn btn-default btn-lg']) !!}
    </div>

    <div class="modal fade" id="imageModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Uploaded Image</h4>
                </div>
                <div class="modal-body">
                    <div id="home" class="tab-pane fade in active">
                        <h3>
                            Recent Image
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </h3>
                        @foreach($images as $image)
                            @include('image._card')
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="fileModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Uploaded File</h4>
                </div>
                <div class="modal-body">
                    <div id="home" class="tab-pane fade in active">
                        <h3>
                            Recent File
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </h3>
                        @foreach($files as $file)
                            @include('file._card')
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <script>
        function addTab(){
            var text = document.forms.blogForm.content.value;
            text += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            document.forms.blogForm.content.value = text;
        }

        function addBold(){
            var text = document.forms.blogForm.content.value;
            text += "<b> </b>";
            document.forms.blogForm.content.value = text;
        }

        function addItalic(){
            var text = document.forms.blogForm.content.value;
            text += "<i> </i>";
            document.forms.blogForm.content.value = text;
        }

        function addUnderline(){
            var text = document.forms.blogForm.content.value;
            text += "<u> </u>";
            document.forms.blogForm.content.value = text;
        }

        function addHeader(){
            var text = document.forms.blogForm.content.value;
            text += "<h3> </h3>";
            document.forms.blogForm.content.value = text;
        }

        function addDel() {
            var text = document.forms.blogForm.content.value;
            text += "<del> </del>";
            document.forms.blogForm.content.value = text;
        }

        function addQuote() {
            var text = document.forms.blogForm.content.value;
            text += "<blockquote> </blockquote>";
            document.forms.blogForm.content.value = text;
        }

        function addSmall() {
            var text = document.forms.blogForm.content.value;
            text += "<small> </small>";
            document.forms.blogForm.content.value = text;
        }

        function addUnorderList() {
            var text = document.forms.blogForm.content.value;
            text += "<ul>\n";
            text += "\t<li> </li>\n";
            text += "\t<li> </li>\n";
            text += "\t<li> </li>\n";
            text += "</ul>";
            document.forms.blogForm.content.value = text;
        }

        function addOrderList() {
            var text = document.forms.blogForm.content.value;
            text += "<ol>\n";
            text += "\t<li> </li>\n";
            text += "\t<li> </li>\n";
            text += "\t<li> </li>\n";
            text += "</ol>";
            document.forms.blogForm.content.value = text;
        }

        function addTable() {
            var text = document.forms.blogForm.content.value;
            text += "<table class='table table-hover'>\n";
            text += "\t<thead>\n";
            text += "\t<tr>\n";
            text += "\t\t<th></th>\n";
            text += "\t\t<th></th>\n";
            text += "\t<tr>\n";
            text += "\t</thead>\n";
            text += "\t<tbody>\n";
            text += "\t<tr>\n";
            text += "\t\t<td></td>\n";
            text += "\t\t<td></td>\n";
            text += "\t<tr>\n";
            text += "\t</tbody>\n";
            text += "</table>";
            document.forms.blogForm.content.value = text;
        }

        function addLink() {
            var text = document.forms.blogForm.content.value;
            text += "<a href=' '></a>";
            document.forms.blogForm.content.value = text;
        }

        function addVideo() {
            var text = document.forms.blogForm.content.value;
            text += "<iframe width='100%' height='100%' src=' '></iframe>";
            document.forms.blogForm.content.value = text;
        }

        $("#demo").on("input propertychange", function(){
            $("#out").html($("textarea").val());
        });
    </script>
</div>
