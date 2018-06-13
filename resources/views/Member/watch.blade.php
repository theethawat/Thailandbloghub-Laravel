@extends(".template2")
@section("content")
<h4 class="kanit  headsection">บล็อกเกอร์</h4><hr>
<div class="row">
    <div class="col-sm-4">
        <img class="profile-img" src="{{URL::asset('photomain/wall_all.png')}}">
        @if($data->nickname != NULL)
        <h3 class="kanit">{{$data->nickname}} </h3>
        @endif
        <h4 class="kanit">{{$data->name}} </h4>
        @if($data->interview == NULL)
            <p>บล็อกเกอร์คนนี้ยังไม่มีคำแนะนำตัว</p>
        @else
            <p>{{$data->interview}} </p>
        @endif
        <hr>

        @guest
            <button style="width:100%;" type="button" class="btn btn-secondary" disabled>Logging in To Follow</button>
        @else
            @if(Auth::user()->id == $data->id)
                @if($data->nickname == NULL)
                    <p class="text-muted">คุณยังไม่มีชื่อเล่น หรือ ชื่อในวงการของคุณเลย แก้ไขข้อมูลเพื่อเพิ่มชื่อของคุณ</p>
                @endif
                <button type="button" style="width:100%;" class="btn btn-primary">แก้ไขข้อมูล</button>
            @else
                <button type="button" style="width:100%;" class="btn btn-light">Follow</button>
            @endif
        @endguest
    </div>
    <div class="col-sm-8">
        <div class="card" style="width:100%;margin-top:0.5em;">
            <div class="card-header">
                 Featured
            </div>

            <div class="card-body">
                @foreach ($science as $in)
                    <div class="media">
                        @if($in->photo !=NULL)
                            <img class="memberpage-img-show" src="{{URL::asset($in->photo)}}" alt="Blog photo">
                        @else
                            <img class="memberpage-img-show" src="{{URL::asset('photomain/wall_all.png')}}" alt="Generic placeholder image">
                        @endif
                        <div style="width:100%;">
                            <a href="{{$in->url}}"><h6 class="kanit"> {{$in->title}}</h6></a> 
                            <p> {{$in->bloginfo}} </p>
                        </div>
                    </div><hr>
                @endforeach
            </div>

        </div>
    </div>
  
</div>
@endsection