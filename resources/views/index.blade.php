@extends("template")
@section("content")
  <h3 class="kanit" style="margin-top:1em;">Highlight</h3><hr>
  <h4 class="kanit headsection">วิทยาศาสตร์ (Science)</h4>
  <div class="flex3">
  @foreach($science as $in)  
    <div class="card maincard">
        <div class="card-body">
            <h6 class="kanit">{{$in->blogtitle}}</h6>
            <h5 class="kanit">{{$in->title}}</h5>
            <p>{{$in->bloginfo}}</p>
            <button class="btn btn-light kanit"><i class="fas fa-user"></i> {{$in->auther}} </button>
            <a href="{{$in->url}}"<button type="button" class="btn btn-info kanit"> <i class="fas fa-paper-plane"></i> View</button></a>
        </div>
    </div><br>
    
  @endforeach 

  </div>
  <h4 class="kanit headsection">ไอที (Information Technology)</h4>
  <div class="flex3">
  @foreach($it as $in)  
    <div class="card maincard">
        <div class="card-body">
            <h6 class="kanit">{{$in->blogtitle}}</h6>
            <h5 class="kanit">{{$in->title}}</h5>
            <p>{{$in->bloginfo}}</p>
            <button class="btn btn-light kanit"><i class="fas fa-user"></i> {{$in->auther}} </button>
            <a href="{{$in->url}}"<button type="button" class="btn btn-info kanit"> <i class="fas fa-paper-plane"></i> View</button></a>
        </div>
    </div><br>
    
  @endforeach
  </div>

@endsection