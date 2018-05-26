@extends("template")
@section("content")
    <h3 class="kanit" style="margin-top:1em;">เพิ่มบล็อก/บทความใหม่</h3><hr>
    @guest
    <p>กรุณาลงชื่อเข้าใช้ หรือ ลงทะเบียน  <a href="{{route('login')}}">คลิก</a></p>
    @else
    <form  action="addissue" method="POST" role="form">
        <label class="kanit">ชื่อบทความ</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="ใส่ชื่อบทความของท่าน"required autofocus>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="kanit">ชื่อเว็บไซต์/บล็อก</label>
                <input type="text" class="form-control" id="blogtitle" name="blogtitle" placeholder="ใส่ชื่อเว็บบล็อกของคุณ">
            </div>
            <div class="form-group col-md-6">
            
                <label class="kanit">หมวดหมู่ของบทความ</label>
                <select name="catagory" id="catagory" class="form-control" required>
                    <option value="01SC">วิทยาศาสตร์</option>
                    <option value="02IT">ไอที</option>
                    <option value="03TR">ท่องเที่ยว</option>
                    <option value="04BI">ธุรกิจ</option>
                    <option value="05ED">การศึกษา</option>
                    <option value="06ET">บันเทิง</option>
                    <option value="07HG">บ้านและสวน</option>
                    <option value="08NE">ข่าวสาร</option>
                    <option value="09OT">อื่นๆ</option>
                    </select>
            </div>
        </div>
        <label class="kanit">URL ของหน้าบทความ</label>
        <input type="url" name="pageurl" id="pageurl" class="form-control" placeholder="กรุณาใส่ http:// หรือ https:// ด้วย ตามหน้าเว็บของท่าน"required>
        <label class="kanit">บรรยายเล็กน้อยเกี่ยวกับบทความของท่าน</label> 
        <textarea class="form-control" name="describe" id="describe" rows="3"></textarea>
        <input type="text" name="user" id="user" value="{{Auth::user()->name}}" hidden>
        <input type="text" name="userid" id="userid" value="{{Auth::user()->id}}" hidden>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary kanit" style="margin-top:1em;">เพิ่มบทความ</button>
    </form>
    @endguest


@endsection