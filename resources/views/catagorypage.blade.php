@extends("template2")
@section("content")

  <h4 class="kanit headsection">{{$thainame}} </h4><hr>
  <div class="flex3">
  @foreach($data as $in)  
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
                <a href="{{url('member/'.$in->auther)}}"<button type="button" class="btn btn-light"> <i class="fas fa-paper-plane"></i> View</button></a>
                <a href="#"<button type="button" class="btn btn-light" style="overflow: hidden;text-overflow: ellipsis; "> <i class="fas fa-user"></i> {{$in->auther}}</button></a>
           </div>

        </div>
    </div><br>
    
  @endforeach 
</div>

@endsection