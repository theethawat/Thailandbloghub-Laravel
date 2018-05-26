<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input; //ใช้คำสั่ง Input
use Illuminate\Support\Facades\DB;  //ใช้คำสั่ง DB หรือ Database
use Illuminate\Support\Facades\Redirect; //ใช้คำสั่ง Redirect
use Illuminate\Http\Request;

Class Thailandbloghubcontroller extends Controller
{

        public function index(){
            //recieve data
            $science = DB::table('01sc')->orderBy('id','DESC')->get();
            $it = DB::table('02it')->orderBy('id','DESC')->get();
            $travel = DB::table('03tr')->orderBy('id','DESC')->get();
            $business = DB::table('04bi')->orderBy('id','DESC')->get();
            $education = DB::table('05ed')->orderBy('id','DESC')->get();
            $entertain = DB::table('06et')->orderBy('id','DESC')->get();
            $homegarden=DB::table('07hg')->orderBy('id','DESC')->get();
            $news=DB::table('08ne')->orderBy('id','DESC')->get();
            $other=DB::table('09ot')->orderBy('id','DESC')->get();
            //return data
            return view('index')
            ->with('title','projectsb 01sc')
            ->with('science',$science)
            ->with('it',$it)
            ->with('travel',$travel)
            ->with('business',$business)
            ->with('education',$education)
            ->with('entertain',$entertain)
            ->with('homegarden',$homegarden)
            ->with('news',$news)
            ->with('other',$other);//ส่งออก,ตัวแปรเดิม
        }

        public function adding(){
        return view('adding');
        }

        public function addissue(Request $request){
            //recieve data in form
            $title = $request->input('title');
            $blogtitle=$request->input('blogtitle');
            $catagory=$request->input('catagory');
            $pageurl=$request->input('pageurl');
            $describe=$request->input('describe');
            $user=$request->input('user');
            $userid=$request->input('userid');

            DB::table($catagory)->insert(
                ['title'=>$title,
                'blogtitle'=>$blogtitle,
                'url'=>$pageurl,
                'bloginfo'=>$describe,
                'auther'=>$user,
                'autherid'=>$userid]
            );
            return view('index');
        }

}
?>