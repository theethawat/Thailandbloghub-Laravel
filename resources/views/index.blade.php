@extends("template")
@section("content")

<div class="header-index scihead">
    <h3 class="kanit headsection"> <i class="fas fa-flask"></i> วิทยาศาสตร์/Science</h3>
    <h6 class="kanit headsection font-italic"> เรียนรู้ สู่การค้นพบที่ไม่มีที่สิ้นสุด learning to the infinite discovery </h6>
</div>

    
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
  <div class="header-index ithead">
    <h3 class="kanit headsection"> <i class="fas fa-desktop"></i> ไอที/Information Technology</h3>
    <h6 class="kanit headsection font-italic"> ต่อยอดสู่สิ่งสำคัญแห่งยุค</h6>
</div>
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