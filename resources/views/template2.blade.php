<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{URL::asset('mystyle.css')}}">
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 
<title>Thailand Blog Hub</title>
</head>
<body>


    @include("header")
     <div class="container">
        <div class="row">

            <div class="col col-sm-9">
            <!-- Teal page content  -->
            @yield("content")
            </div>
        
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.0&appId=389712018153235&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <div class="col col-sm-3">
            <h6 class="kanit" style="margin-top:1em;"> <i class="fas fa-user"></i> ข้อมูลผู้ใช้งาน</h6><hr>
            @guest
            <p>กรุณาลงชื่อเข้าใช้หรือลงทะเบียน</p>
            @else
            <div class="card">
                <div class="card-body">            
                        <b><h6> ยินดีต้อนรับ</b> <br>  
                         {{ Auth::user()->name }}
                         </h6> 
                </div>
            </div>    
                        @endguest
            <br>
            <h6 class="kanit"> <i class="fab fa-facebook-square"></i> อย่าลืมถูกใจเพจของเรานะ</h6><hr>
            <!--facebook-->
            <div style="margin-bottom:1em;"class="fb-page"data-href="https://www.facebook.com/thailandbloghub" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thailandbloghub" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thailandbloghub">Thailand Blog Hub</a></blockquote></div>
            <!-- Grey navigation panel -->
            </div>

        </div>
    
    </div>
    @include("footer")
   
</body>
</html>