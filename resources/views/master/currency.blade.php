@extends('app_flight')

@section('content')

<h4>Currency</h4>

<table>
	<thead>
		<tr>

			<th>Name</th>
			<th>Code</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key)
		<tr>

			<td>{{ $key->name }}</td>
			<td>{{ $key->code }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
