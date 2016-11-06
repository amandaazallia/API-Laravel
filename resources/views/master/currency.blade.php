@extends('app_flight')

@section('content')

<center>

	<h3 class="fonts">Currency</h3>
</center>

<table class="striped"  style="margin:15px">
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

@section('footer')

@endsection
