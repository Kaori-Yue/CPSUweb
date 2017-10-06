<div class="col-md-12" style="padding: 10px;height: 100%">
    <div class="category-card" style="background-image: url('{{ URL::asset('image/document_card_bg.jpg') }}');">
        <div class="category-content">
                <h3><b>{{ $category->name }}</b></h3>
                <h4>{{ $category->description }}</h4>
                <div class="hidden-xs">
                    <br>
                </div>
                <hr>
                <p>{{ $category->name }}</p>
            </a>
            @if(Request::is('admin/*'))
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ url('category/'.$category->id.'/edit') }}" class="btn btn-warning btn-block">
                        Edit
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$category->id}}">Delete</button>

                    <div class="modal fade" id="deleteModal{{$category->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this category ?</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::model($category, ['method' => 'DELETE', 'url'=>'category/'.$category->id]) !!}
                                    <button class="btn btn-danger btn-block" type="submit">
                                        Delete
                                    </button>
                                    {!! Form::close() !!}
                                    <br>
                                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>