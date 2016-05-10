@extends('app_flight')

@section('content')
<div class="">
  <h1>Search Flight</h1>
<div class="row">
      <div class="col s12">
        <div class="col s6">
          <select type="text" name="from" class="browser-default" id="from">
            @foreach($airport as $key)
              <option value="{{$key->airport_code}}">
                {{$key->airport_name}} ({{$key->airport_code}})
              </option>
            @endforeach
          </select>

        </div>
        <div class="col s6">
          <select type="text" name="to" class="browser-default" id="to">
            @foreach($airport as $key)
              <option value="{{$key->airport_code}}">
                {{$key->airport_name}} ({{$key->airport_code}})
              </option>
            @endforeach
          </select>

        </div>
        <div class="row">
          <div class="col s2">
            <select name="type" id="type"  class="browser-default" onchange="check_type()">
              <option value="OW">OneWay</option>
              <option value="RT">RoundTrip</option>
            </select>
          </div>
          <div class="col s2">
            <input type="text" class="for_date" name="depart_date" class="browser-default" id="depart_date">
          </div>
          <div class="col s2">
            <input type="text" class="for_date" name="return_date" class="browser-default" id="return_date">
          </div>

          <div class="col s1">
            <select name="adult" id="adult">
              @for($i=1;$i<6;$i++)
              <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
          </div>
          <div class="col s1">
            <select name="child" id="child" class="browser-default">
              @for($i=1;$i<6;$i++)
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
          <span class="btn">Search</span>
          <div>


        </div>
      </div>

    </div>
</div>


@endsection
@section('footer')
<script type="text/javascript">
  $(".for_date").datepicker();

  function check_type(){
    var type =$("#type").val();
    if(type == "OW"){
      $("#return_date").prop('disabled',true);
    }else{
      $("#return_date").prop('disabled',false);
    }
  }
check_type();
</script>
