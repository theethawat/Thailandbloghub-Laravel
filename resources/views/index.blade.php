@extends("template")
@section("content")
  <h3 class="kanit" style="margin-top:1em;">Highlight</h3><hr>
  <h4 class="kanit">วิทยาศาสตร์(Science)</h4>
  <div class="flex3">
  @foreach($science as $sci)  
    <div class="card maincard">
        <div class="card-body">
            <h5 class="kanit">{{$sci->title}}</h5>
            <h6 class="kanit">{{$sci->blogtitle}}</h6>
            <p>{{$sci->bloginfo}}</p>

        </div>
    </div>
    
  @endforeach
  </div>

@endsection