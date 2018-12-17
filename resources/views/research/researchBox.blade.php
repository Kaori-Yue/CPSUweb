<tr item-date="{{ date('d-m-Y', strtotime($research->publication)) }}" item-id="{{ $research->id }}">
	<td style="padding-bottom: 20px">
		<div class="_container">
			<h3 style="font-weight: 100; color: #117167; display:inline">ข้อมูลผลงานวิจัย</h3>
			{{ ($research->publication) }}
			{{-- {{ $research->date }} --}}
			<div class="card-content">
				<div class="card-body">
					{{-- {{dd($research)}} --}}
				<p contenteditable="false">{{ ( $research->info ) }}</p>

				</div>
			</div>
		</div>
	</td>

	@if (Auth::check() && Auth::user()->id == $teacher_read->user_id + 1)
		<td>
			<table style="margin-top: 7px">
				<tr>
					<th>
						<button type="button" class="button" style="width: 75px;font-size: 14px; background: #007bff" onclick="editResearch(this)">EDIT</button>
					</th>
				</tr>
				<tr>
					<th>
						<button type="button" class="button" style="width: 75px;font-size: 14px; background: #dc3545" onclick="deleteResearch(this)">DELETE</button>
					</th>
				</tr>
				<tr>
					<th>
						<button type="button" class="button" style="width: 75px;font-size: 14px; background: #28a745" onclick="saveResearch(this)">SAVE</button>
					</th>
				</tr>
			</table>
		</td>
	@endif
</tr>