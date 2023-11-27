<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class chats extends Controller
{
    public function composechat(){
        $mainInfo = DB::select("SELECT * FROM main_info");
        $mainAboout = DB::select("SELECT * FROM about");
        $rhuTeams = DB::select("SELECT * FROM teams");
        $email = session('email');
        $medicalrecordof = DB::select("SELECT * FROM med_rec WHERE email = '$email'");
        $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");
        $chats = DB::select("SELECT * FROM `chatid` ORDER by id DESC ");
        $rhusched = DB::select("SELECT * FROM rhusched");

        return view('users.composechat',['rhusched'=>$rhusched,'mainInfo' => $mainInfo, 'mainAboout' => $mainAboout,'rhuTeams' => $rhuTeams,'name' => $name ,'medicalrecordof' => $medicalrecordof ,'chats' => $chats]);
    }
    public function chats(Request $request){

        $getid = $request->input('codeid');

        if($getid != ""){
           session()->put('id',$getid);
        }

       $id = session('id');
       $rhusched = DB::select("SELECT * FROM rhusched");
       $mainInfo = DB::select("SELECT * FROM main_info");
       $mainAboout = DB::select("SELECT * FROM about");
       $rhuTeams = DB::select("SELECT * FROM teams");
       $email = session('email');
       $medicalrecordof = DB::select("SELECT * FROM med_rec WHERE email = '$email'");
       $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");

       $chats = DB::select("SELECT * FROM `chats` WHERE code = $id ORDER BY id asc");
       $chatting = DB::select("SELECT * FROM `chatid` WHERE id = $id ");
       $chatingemail = "";
       $imagefind = 0;
       $imagefind1 = 0;

       foreach($chatting as $item){
        if($item -> user1 == $email){
            $chatingemail = $item->user2;
        }
        else{
            $chatingemail = $item->user1;
        }
       }

       $chatcode = $id;
       $dp = DB::select("SELECT * FROM `userimage` WHERE useremail = '$chatingemail'");
        $userimage = "";
        foreach($dp as $picture){
            $imagefind = 1;
        }
        if($imagefind){
            $userimage = $picture -> imagename;
        }
        else{
            $userimage = "pic.webp";
        }
        
       $dp1 = DB::select("SELECT * FROM `userimage` WHERE useremail = '$email'");
        $chatingimage = "";
        foreach($dp1 as $picture){
            $imagefind1 = 1;
        }
        if($imagefind1){
            $chatingimage = $picture -> imagename;
        }
        else{
            $chatingimage = "pic.webp";
        }

        return view('users.chats',['rhusched'=>$rhusched,'dp1' => $chatingimage,'dp' => $userimage,'mainInfo' => $mainInfo, 'mainAboout' => $mainAboout,'rhuTeams' => $rhuTeams,'name' => $name ,'medicalrecordof' => $medicalrecordof,'chats' => $chats,'chatting' => $chatting ,'chatcode' => $chatcode]);
    }
    public function createchat(Request $request){

        $logedinemail = session('email');
        $date = date('Y-m-d');

        $validate = $request->validate([
            'email' => 'required',
            'message' => 'required'
        ]);

        $email = $request->input('email');
        $message = $request->input('message');


        $chatid = DB::select("SELECT * FROM chatid");

        $find=0;

        foreach($chatid as $index => $item){
            if(($logedinemail == $item -> user1) && (($email == $item -> user2)) || ($logedinemail == $item -> user2) && (($email == $item -> user1))){
                $find = 1;
                $findid1 = $item -> id;

                $chatinsert = DB::insert("INSERT INTO `chats` (`id`, `email`, `date`, `chat`, `receiver`, `code`) VALUES (NULL, '$logedinemail', '$date', '$message', '$email',$findid1)");

                if($chatinsert){
                    return redirect('/composechat')->with('success','Message Sent Successfuly!');
                }else{
                    return redirect('/composechat');
                } 
            }
        }

        if($find == 0){
            $insertchatid = DB::insert("INSERT INTO `chatid` (`id`, `user1`, `user2`) VALUES (NULL, '$logedinemail', '$email')");
        }
        return $this->createchat($request);
    }
    public function adminComposeChat(){

        $email = session('email');
        $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");
        $chats = DB::select("SELECT * FROM `chatid` ORDER by id DESC");

        return view ('admin.admincomposechat',['chats' => $chats,'name' => $name]);
    }
    public function adminchats(Request $request){

        $getid = $request->input('codeid');

        if($getid != ""){
           session()->put('id',$getid);
        }

       $id = session('id');

       $email = session('email');
       $medicalrecordof = DB::select("SELECT * FROM med_rec WHERE email = '$email'");
       $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");
       $chatting = DB::select("SELECT * FROM `chatid` WHERE id = $id ");
       $chatingemail = "";
       $imagefind = 0;
       $imagefind1 = 0;
       $userimage = "";

       foreach($chatting as $item){
        if($item -> user1 == $email){
            $chatingemail = $item->user2;
        }
        else{
            $chatingemail = $item->user1;
        }
       }

       $chats = DB::select("SELECT * FROM `chats` WHERE code = $id ORDER BY id asc");

       $chatcode = $id;

       $dp = DB::select("SELECT * FROM `userimage` WHERE useremail = '$chatingemail'");
       foreach($dp as $picture){
        $imagefind = 1;
            }
            if($imagefind){
                $userimage = $picture -> imagename;
            }
            else{
                $userimage = "pic.webp";
            }
            
        $dp1 = DB::select("SELECT * FROM `userimage` WHERE useremail = '$email'");
            $chatingimage = "";
            foreach($dp1 as $picture){
                $imagefind1 = 1;
            }
            if($imagefind1){
                $chatingimage = $picture -> imagename;
            }
            else{
                $chatingimage = "pic.webp";
            }

       return view('admin.adminchat',['dp'=> $userimage,'dp1'=>$chatingimage,'name' => $name ,'medicalrecordof' => $medicalrecordof,'chats' => $chats,'chatting' => $chatting ,'chatcode' => $chatcode]);   
   }
   public function admincreatechat(Request $request){

    $logedinemail = session('email');
    $date = date('Y-m-d');

    $validate = $request->validate([
        'email' => 'required',
        'message' => 'required'
    ]);

    $email = $request->input('email');
    $message = $request->input('message');


    $chatid = DB::select("SELECT * FROM chatid");

    $find=0;

    foreach($chatid as $index => $item){
        if(($logedinemail == $item -> user1) && (($email == $item -> user2)) || ($logedinemail == $item -> user2) && (($email == $item -> user1))){
            $find = 1;
            $findid1 = $item -> id;

            $chatinsert = DB::insert("INSERT INTO `chats` (`id`, `email`, `date`, `chat`, `receiver`, `code`) VALUES (NULL, '$logedinemail', '$date', '$message', '$email',$findid1)");

            if($chatinsert){
                return redirect('/adminComposeChat')->with('success','Message Sent Successfuly!');
            }else{
                return redirect('/adminComposeChat');
            } 
        }
    }

    if($find == 0){
        $insertchatid = DB::insert("INSERT INTO `chatid` (`id`, `user1`, `user2`) VALUES (NULL, '$logedinemail', '$email')");
    }

    return $this->admincreatechat($request);
}
public function reply(Request $request){

    $date = date('Y-m-d');
    $logedinemail = session('email');
    $message = $request->input('message');
    $code = $request->input('code');
    $email = "";

    $receiver = DB::select("SELECT * FROM chatid WHERE id = $code");

    foreach($receiver as $item){
        if($item -> user1 == $logedinemail){
            $email = $item -> user2;
        }else{
            $email = $item -> user1;
        }
    }

    $chatinsert = DB::insert("INSERT INTO `chats` (`id`, `email`, `date`, `chat`, `receiver`, `code`) VALUES (NULL, '$logedinemail', '$date', '$message', '$email',$code)");

        if($chatinsert){
            return redirect('/chats')->with('success','Message Sent Successfuly!');
        }else{
            return redirect('/chats');
        }  
}
public function adminreply(Request $request){

    $date = date('Y-m-d');
    $logedinemail = session('email');
    $message = $request->input('message');
    $code = $request->input('code');
    $email = "";

    $receiver = DB::select("SELECT * FROM chatid WHERE id = $code");

    foreach($receiver as $item){
        if($item -> user1 == $logedinemail){
            $email = $item -> user2;
        }else{
            $email = $item -> user1;
        }
    }

    $chatinsert = DB::insert("INSERT INTO `chats` (`id`, `email`, `date`, `chat`, `receiver`, `code`) VALUES (NULL, '$logedinemail', '$date', '$message', '$email',$code)");

        if($chatinsert){
            return redirect('/adminchats')->with('success','Message Sent Successfuly!');
        }else{
            return redirect('/adminchats');
        }  
}
}
