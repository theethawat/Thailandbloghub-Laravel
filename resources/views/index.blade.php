@extends("template")
@section("content")
<!-- Section -->
<h3 class="kanit headsection">วิทยาศาสตร์/Science </h3>
<div class="flex3">

  @foreach( $science as $in)  
    <div class="card maincard">
        @if($in->photo !=NULL)
        <img class="card-img-top" src="{{URL::asset($in->photo)}}" alt="Blog photo">
        @else
        <img class="card-img-top" src="{{URL::asset('photomain/wall_all.png')}}" alt="Blog photo">
        @endif
        <div class="card-body">
            <h5 class="kanit">{{$in->title}} </h5>
            <p>{{$in->bloginfo}}</p>

            <div style="display:flex;">
                <a href="{{$in->url}}"<button type="button" class="btn btn-light"> <i class="fas fa-paper-plane"></i> View</button></a>
                <a href="{{url('member/'.$in->auther)}}"<button type="button" class="btn btn-light" style="overflow: hidden;text-overflow: ellipsis; "> <i class="fas fa-user"></i> {{$in->auther}}</button></a>
           </div>

        </div>
    </div><br>
    
  @endforeach 

  </div>
  <!--end section-->


  <!-- Section -->
<h3 class="kanit headsection">ไอที/Information Technology </h3>
<div class="flex3">

  @foreach( $it as $in)  
  <div class="card maincard">
        @if($in->photo !=NULL)
        <img class="card-img-top" src="{{URL::asset($in->photo)}}" alt="Blog photo">
        @else
        <img class="card-img-top" src="{{URL::asset('photomain/wall_all.png')}}" alt="Blog photo">
        @endif
        <div class="card-body">
            <h5 class="kanit">{{$in->title}} </h5>
            <p>{{$in->bloginfo}}</p>

            <div style="display:flex;">
                <a href="{{$in->url}}"<button type="button" class="btn btn-light"> <i class="fas fa-paper-plane"></i> View</button></a>
                <a href="{{url('member/'.$in->auther)}}"<button type="button" class="btn btn-light" style="overflow: hidden;text-overflow: ellipsis; "> <i class="fas fa-user"></i> {{$in->auther}}</button></a>
           </div>

        </div>
    </div><br>
    
    
  @endforeach 

  </div>
  <!--end section-->

 
  
  

@endsection