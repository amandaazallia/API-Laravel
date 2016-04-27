@extends('app')

@section('content')

<h4>Country</h4>

<table>
	<thead>
		<tr>
			<th>Country ID</th>
			<th>Country Name</th>
			<th>Country AreaCode</th>
		</tr>
	</thead>
	<tbody>
		@endforeach($data as $key)
		<tr>
			<td>{{ $key->country_id }}</td>
			<td>{{ $key->country_name }}</td>
			<td>{{ $key->country_areacode }}</td>
		</tr>
	</tbody>
</table>

@endsection
