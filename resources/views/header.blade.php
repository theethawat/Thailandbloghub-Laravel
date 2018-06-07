@section("header")
<nav class="navbar navbar-expand-lg sticky-top navbar-dark  bg-dark navme">
  <div class="container">
  <a class="navbar-brand kanit" href="#"><img class="logo" src="{{URL::asset('photomain/logo_tbh.png')}}"> ไทยแลนด์บล็อกฮับ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" style="width:100%;">
    

        

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">หน้าหลัก <span class="sr-only">(current)</span></a>
          </li>
 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            หมวดหมู่
            </a>
        
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="{{ url('catagory/science') }}">วิทยาศาสตร์</a>
            <a class="dropdown-item" href="{{url('catagory/it')}}">ไอที</a>
            <a class="dropdown-item" href="{{url('catagory/travel')}}">ท่องเที่ยว</a>
            <a class="dropdown-item" href="{{url('catagory/business')}}">ธุรกิจ</a>
            <a class="dropdown-item" href="{{url('catagory/education')}}">การศึกษา</a>
            <a class="dropdown-item" href="{{url('catagory/entertainment')}}">บันเทิง</a>
            <a class="dropdown-item" href="{{url('catagory/homegarden')}}">บ้านและสวน</a>
            <a class="dropdown-item" href="{{url('catagory/news')}}">ข่าวสาร</a>
            <a class="dropdown-item" href="{{url('catagory/other')}}">อื่นๆ</a>
          </div>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/adding')}}">เพิ่มบทความ</a>
          </li>

    
     
          </ul>
          @if (Route::has('login'))
               
                    @auth
                        <a class="nav-item nav-link justify-content-end" href="{{ url('/home') }}">Dashboard</a>
                        <a class="nav-item nav-link justify-content-end" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
               @else
              <a class="nav-item nav-link justify-content-end " href="{{ route('login') }}">เข้าสู่ระบบ</a>
  
           
              <a class="nav-item nav-link justify-content-end" href="{{ route('register') }}">ลงทะเบียน</a>

              
   
               @endauth

            @endif



    </div>
  </div>
</div>
</nav>





@show