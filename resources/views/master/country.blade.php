@extends('app_flight')

@section('content')

<center><h3 class="fonts">Country</h3></center>

<table class="striped"  style="margin:15px">
	<thead>
		<tr>
			<th>Country ID</th>
			<th>Country Name</th>
			<th>Country AreaCode</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key)
		<tr>
			<td>{{ $key->country_id }}</td>
			<td>{{ $key->country_name }}</td>
			<td>{{ $key->country_areacode }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
