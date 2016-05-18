@extends('app_flight')

@section('content')

<div class="">
<h1>Search Flight</h1>
	<div class="row">
		<div class="col s12">
		<div class="row">
			<div class="col s6">
			<select type="text" class="browser-default" name="form" id="form">
			@foreach($airport as $key)
				<option value="{{$key->airport_code}}">
					{{$key->airport_name}} {{$key->airport_code}}
				</option>
			@endforeach
			</select>
			</div>
			<div class="col s6">
			<select name="to" id="to" class="browser-default">
			@foreach($airport as $key)
				<option value="{{$key->airport_code}}">
					{{$key->airport_name}} {{$key->airport_code}}
				</option>
			@endforeach
			</select>
			</div>

		</div>
		<div class="row">
			<div class="col s2">
				<select name="type" onchange="check_type()" id="type" class="browser-default">
				<option value="OW">Oneway</option>
				<option value="RT">Roundtrip</option>
				</select>
			</div>
			<div class=" col s2">
				<input type="text" class="for_date" name="depart_date" id="depart_date">
			</div>
			<div class="col s2">
				<input type="text" class="for_date" name="return_date" id="return_date">
			</div>
			<div class="col s1">
				<select name="adult" id="adult" class="browser-default">
				@for($i=0;$i<6;$i++)
				<option value="{{$i}}">{{$i}}</option>
				@endfor
				</select>
			</div>
			<div class="col s1">
				<select name="child" id="child" class="browser-default">
				@for($i=0;$i<6;$i++)
				<option value="{{$i}}">{{$i}}</option>
				@endfor
				</select>
			</div>
			<div class="col s1">
				<select name="infant" id="infant" class="browser-default">
				@for($i=0;$i<6;$i++)
				<option value="{{$i}}">{{$i}}</option>
				@endfor
				</select>
			</div>
			<div class="col s3">
				<span class="btn" onclick="search()">Search</span>

			</div>

		</div>

		</div>

	</div>
</div>
<div id="result"></div>
@endsection
@section('footer')
<script type="text/javascript">
	$(".for_date").datepicker();

	function check_type(){
		var tipe = $("#type").val();
		if(tipe=='OW'){
			$("#return_date").prop('disabled',true);
		}else{
			$("#return_date").prop('disabled',false);
		}
	}
	check_type();

	function search(){
		$.ajax({
			url:'{{route("ajax_search_flight")}}',
			type:'POST',
			data:{
				from:$("#form").val(),
				to:$("#to").val(),
				type:$("#type").val(),
				depart_date:$("#depart_date").val(),
				return_date:$("#return_date").val(),
				adult:$("#adult").val(),
				child:$("#child").val(),
				infant:$("#infant").val(),
				_token:'{{csrf_token()}}'
		},
			success:function(data){
				var hasil_depart = data.departures;

				var res_depart = hasil_depart.result;
				var html = '<ul class="collapsible popout">';
				for (data in res_depart(){
					html += '<li>';
					html += '<div class="collapsible-header">';
					html += res_depart[data].airlines_name;

					html += '</div>';
					html += '<div class="collapsible-body">';

					var flights = res_depart[data].flight_infos;
					var fligh_infos = flights.flight.infos;
					for(info in res_depart){
						html += '<h4>'+flight_infos[info].flight_number+'</h4>';
						html += '<div class="">';
						html += flight_infos[info].departure_city+' at'+flight_infos[info].simple_departure_time;
						html += '</div>';
						html += '<div class="pull-right">';
						html += flight_infos[info].arrival_city_' at';
									+flight_infos[info].simple_arrival_time;
						html += '</div>';
						html += '<hr>';
					}
					html += '</div>';
					html += '</li>';
								})
				$("#result").html(data);
			}
		});
	}
</script>
@endsection
