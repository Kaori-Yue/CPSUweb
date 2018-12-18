<tr item-date="{{($research->publication) }}" item-id="{{ $research->id }}">
		<td style="padding-bottom: 20px">
			<div class="_container">
				<h3 style="font-weight: 100; color: #117167; display:inline">ข้อมูลผลงานวิจัย</h3>
				{{ ($research->publication) }}
				{{-- {{ $research->date }} --}}
				<div class="card bg-light mb-3" style="max-width: 96rem;">
					<div class="card-body">
						{{-- {{dd($research)}} --}}
					<p contenteditable="false">{{ ( $research->info ) }}</p>
	
					</div>
				</div>
			</div>
		</td>
		
		{{-- {{dd($research) }} --}}
		@if (Auth::check() && Auth::user()->id == $teacher_read->user_id + 1)
			<td>
				<table style="margin-top: 7px">
					<tr>
						<th>
						<button onclick="window.location.href = '/research/teacher/{{$research->id}}/edit';" type="button" class="button" style="width: 75px;font-size: 14px; background: #4caf50;margin-bottom:5px" onclick="editResearch(this)">EDIT</button>
						</th>
					</tr>
					<tr>
						<th>
							<button type="button" class="button btn btn-danger btn-block" style="width: 75px;font-size: 14px; background: #d2691e" data-toggle="modal" data-target="#deleteModal{{$research->id}}">Delete</button>

								<div class="modal fade" id="deleteModal{{$research->id}}" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												{{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
												<h4 class="modal-title">Confirm</h4>
											</div>
											<div class="modal-body">
												<p>Do you want to delete this research?</p>
											</div>
											<div class="modal-footer">
												{!! Form::model($research, ['method' => 'DELETE', 'url'=>'research/'.$research->id]) !!}
												<button class="btn btn-primary" style="background-color:#00b300;color:white;width:45px" type="submit">
													Yes
												</button>
												{!! Form::close() !!}
												{{-- <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button> --}}
												<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#b30000;color:white;width:45px">No</button>
											</div>
										</div>
									</div>
								</div>
						</th>
					</tr>
					<tr>
						
					</tr>
				</table>
			</td>
		@endif
	</tr>