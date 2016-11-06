@extends('app_flight')

@section('content')

<center><h3 class="fonts">Airport</h3></center>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large waves-effect waves-light teal lighten-2" href="{{url('/airline/flight')}}">
			<i class="material-icons">add</i>
		</a>
</div>



<table class="striped"  style="margin:15px">
	<thead>
		<tr>
			<th>Airport Name</th>
			<th>Location</th>
			<th>Country</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key)
		<tr>
			<td>{{ $key->airport_name }}</td>
			<td>{{ $key->location_name }}</td>
			<td>{{ $key->country_id }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
