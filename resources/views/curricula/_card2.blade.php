 <a href="{{ url('curricula/'.$curricula->slug) }}" style="text-decoration: none">
     <li class="list-wrapper-card-all">
         <div class="card-curricula">
             <img src="{{ URL::asset('image/curricula.svg') }}" class="image-card-curricula">
             <h3 class="type-card-curricula">
                 @if($curricula->degree == 'Bachelor Degree')
                     ปริญญาตรี
                 @elseif($curricula->degree == 'Master Degree')
                     ปริญญาโท
                 @else
                     ปริญญาเอก
                 @endif
             </h3>
             <p class="detail-card-curricula">{{$curricula->name_th}}</p>
         </div>
     </li>
 </a>
