 <li class="list-card-detail-curricula">
         <a href="{{ url('curricula/'.$curricula->slug) }}">
            <div class="card-detail-curricula">
                <ul class="wrapper-in-card-detail-curricula">
                    <li class="list-in-card-detail-curricula">
                        <img src="{{ URL::asset('image/010-book-4.svg') }}" class="image-card-detail-curricula">
                    </li>
                    <li class="list-in-card-detail-curricula">
                        <p class="field-card-detail-curricula">{{$curricula->name_th}}</p>
                        <p class="name-card-detail-curricula">{{$curricula->name_en}}</p>
                    </li>
                </ul>
            </div>
         </a>
 </li>
