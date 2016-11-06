@extends('app_flight')

@section('content')

<center>
<h3 class="fonts">Language</h3>
</center>
<table class="striped" style="margin:15px">
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
			<td>{{$key->code}}</td>
			<td>{{$key->name_short}}</td>
			<td>{{$key->name_long}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
