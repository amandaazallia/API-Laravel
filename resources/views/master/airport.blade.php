@extends('app_flight')

@section('content')

<h4>Airport</h4>

<table>
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
			<td>{{ $key->code }}</td>
			<td>{{ $key->country_name }}</td>
			<td>{{ $key->country_areacode }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
