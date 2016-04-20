@extends('app')

@section('content')
<h4>Currency</h4>
<table>
  <thead>
    <tr>
      <th>Code</th>
      <th>Name Long</th>
      <th>Name Short</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key)
    <tr>
      <td>{{$key->country_id}}</td>
      <td>{{$key->country_id}}</td>
      <td>{{$key->country_id}}</td>
    </tr>
  </tbody>
</table>
@endsection
