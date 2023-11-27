<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function mainpage(){
        session()->put('is_login',0);

        $mainInfo = DB::select("SELECT * FROM main_info");
        $mainAboout = DB::select("SELECT * FROM about");
        $rhuTeams = DB::select("SELECT * FROM teams");
        $gallery = DB::select("SELECT * FROM gallery");
        $boards = DB::select("SELECT * FROM boards");
        $rhusched = DB::select("SELECT * FROM rhusched");

        return view('users.index',['rhusched'=>$rhusched,'mainInfo' => $mainInfo, 'mainAboout' => $mainAboout,'rhuTeams' => $rhuTeams,'gallery' => $gallery,'boards'=>$boards ]);
    }
    public function login(){
        $mainInfo = DB::select("SELECT * FROM main_info");
        $rhusched = DB::select("SELECT * FROM rhusched");
        return view('users.login',['rhusched'=>$rhusched,'mainInfo' => $mainInfo]);
    }

    public function tologin(Request $request){
        $username = $request->input('aemail');
        $password = $request->input('apassword');
        $decpas = md5($password);
        $loggedin = 0;
        $loguser = 0;

        $islogin = DB::select("SELECT * FROM userlogin WHERE email = '$username' AND userpassword = '$decpas'");
        
        foreach($islogin as $islog){
            if($islog -> usertype == 'admin'){
                if(session()->has('usertype')){
                    session()->pull('usertype');
                }
                session()->put('email',$username);
                session()->put('is_login',1);
                return redirect('/monitoring');
            }
            else if($islog -> usertype == 'sensos'){
                if(session()->has('usertype')){
                    session()->pull('usertype');
                }
                session()->put('email',$username);
                session()->put('is_login',3);
                return redirect('/sensoring');
            }
            else if($islog -> usertype == 'user'){
                if(session()->has('usertype')){
                    session()->pull('usertype');
                }
                session()->put('email',$username);
                session()->put('is_login',2);
                return redirect('/sensoring');
            }
            else if($islog -> usertype == 'banned'){
                return redirect('/login')->with('failed','Your Account Was Banned, Please Go RHU Pozorrubio to fix your Account!');
            }
            else{
                session()->put('email',$username);
                session()->put('is_login',4);
                return redirect('/brgyhomepage');
            }
        }
        return redirect('/login')->with('failed','Check username and password!');
    }
    public function signup(Request $request){

        $request->validate([
            'email' => 'required|unique:userlogin,email',
            'username' => 'required',
            'birthdate' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
        
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $birthdate = $request->input('birthdate');

        $encpass = md5($password);

        $register = DB::insert("INSERT INTO userlogin (`userlogin_id`, `username`, `email`, `userpassword`, `usertype`, `bdate`) VALUES (NULL , '$username','$email','$encpass', 'user','$birthdate' )");

        if($register){
            return redirect('/login')->with('success','Account Created Successfully');
        }
        else{
            return redirect('/login');
        }
    }
    public function userLoggedIn(){
        $rhusched = DB::select("SELECT * FROM rhusched");
        $mainInfo = DB::select("SELECT * FROM main_info");
        $mainAboout = DB::select("SELECT * FROM about");
        $rhuTeams = DB::select("SELECT * FROM teams");
        $email = session('email');
        $medicalrecordof = DB::select("SELECT * FROM med_rec WHERE email = '$email'");
        $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");
        $gallery = DB::select("SELECT * FROM gallery ");
        $boards = DB::select("SELECT * FROM boards");
        $med_inventory = DB::select("SELECT * FROM vaccination ORDER BY vac_id DESC LIMIT 1");
        $vac = DB::select("SELECT * FROM vaccination");
        $time = DB::select("SELECT * FROM `appointment_time`");
        $appointment = DB::select("SELECT * FROM `appointment` WHERE `status` = 'approved'");
        $datenow = now()->format('Y-m-d');
        $todaysappointments = DB::select("SELECT * FROM `appointment` WHERE `date` = '$datenow' AND `status` = 'approved'");
        $dp = DB::select("SELECT * FROM `userimage` WHERE useremail = '$email'");
        $personaldata = DB::select("SELECT * FROM `userlogin` WHERE email = '$email'");
        $oldpass = DB::select("SELECT userpassword  from userlogin WHERE email = '$email'");
        $data = "";
        $oldpassword = "";
        $userimage = "";
        $username = "";
        $bdate = "";
        $adrs = "";
        $imagefind = 0;
        foreach($oldpass as $olp){
            $oldpassword = $olp ->userpassword;
        }
        foreach($personaldata as $pd){
            $username = $pd -> username;
            $bdate = $pd -> bdate;
            $adrs = $pd -> addrs;
        }
        foreach($dp as $picture){
            $imagefind = 1;
        }
        if($imagefind){
            $userimage = $picture -> imagename;
        }
        else{
            $userimage = "pic.webp";
        }

        foreach($med_inventory as $val){
            $data.= "['First Dose',".$val->first_dose."],['Second Dose',".$val->second_dose."],['Booster',".$val->booster."],['Not Vaccinated',".$val->Not_Vaccinated."]";
        }
        return view('users.user-logedin',['rhusched'=>$rhusched,'adrs' => $adrs,'username'=>$username,'oldpassword'=> $oldpassword,'bdate' =>$bdate,'dp'=>$userimage,'todaysappointments' => $todaysappointments,'appointment'=>$appointment,'mainInfo' => $mainInfo, 'mainAboout' => $mainAboout,'rhuTeams' => $rhuTeams,'name' => $name ,'med_inventory' => $med_inventory,'medicalrecordof' => $medicalrecordof,'gallery' => $gallery,'boards' => $boards,'data' => $data,'time' => $time]);
    }
    public function cancellappointment($id){

        $cancellingappointment = DB::delete("DELETE FROM appointment WHERE id = $id");
        
        if($cancellingappointment){
            return redirect('/qr')->with('success','Appointment Cancelled Successfuly!');
        }
    }
    public function updateappointment(Request $request){

        $request->validate([
            'date' => 'required',
            'phone' => 'required|digits:11',
        ]);

        $id = $request->input('updatingid');
        $name = $request->input('name');
        $timeappointed = $request->input('timeappointed');
        $email = session('email');
        $services = $request->input('services');
        $date = $request->input('date');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $doctor = $request->input('doctor');
        $pd = "pending";
        $ap = "approved";
        $ispending = 1;
        $listofAppointment = DB::select("SELECT * FROM appointment WHERE appointment_time = '$timeappointed' AND date = '$date'");
        
        foreach($listofAppointment as $item){
            $ispending = 0;
        }

        if(!$ispending){
            $insertAppointment = DB::insert("UPDATE `appointment` SET `name` = ?, `date` = ?, `service` = ?, `contact` = ?, `message` = ?, `status` = ?, `doctor` = ?, `appointment_time` = ? WHERE `appointment`.`id` = ?",[$name,$date,$services,$phone,$message,$pd,$doctor,$timeappointed,$id]);
        }
        else{
            $insertAppointment = DB::insert("UPDATE `appointment` SET `name` = ?, `date` = ?, `service` = ?, `contact` = ?, `message` = ?, `status` = ?, `doctor` = ?, `appointment_time` = ? WHERE `appointment`.`id` = ?",[$name,$date,$services,$phone,$message,$ap,$doctor,$timeappointed,$id]);
        }

        if($insertAppointment){
            return redirect('/qr')->with('success','Appointment Successfuly Updated!');
        }else{
            return redirect('/userLoggedIn');
        }
    }

    public function addAppointment(Request $request){
        $name = $request->input('name');
        $timeappointed = $request->input('timeappointed');
        $email = session('email');
        $service = $request->input('service');
        $service1 = $request->input('service1');
        $services2 = $request->input('service2');
        $date = $request->input('date');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $doctor = $request->input('doctor');
        $ispending = 1;
        $services ="";
        $services = $service." ".$service1." ".$services2;
        $listofAppointment = DB::select("SELECT * FROM appointment WHERE appointment_time = '$timeappointed' AND date = '$date'");

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'phone' => 'required|digits:11'
        ]);

        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $clength = strlen($char);
        $randomString = '';

        for ($i = 0; $i < 32; $i++) {
            $randomString .= $char[rand(0, $clength - 1)];
        }

        foreach($listofAppointment as $item){
            $ispending = 0;
        }

        if(!$ispending){
            $insertAppointment = DB::insert("INSERT INTO `appointment` (`id`, `name`, `date`, `service`, `contact`, `message`, `email`, `status`, `qrcode`, `doctor`, `appointment_time`) VALUES (NULL, '$name', '$date', '$services', '$phone', '$message', '$email', 'pending', '$randomString', '$doctor', '$timeappointed');");
        }
        else{
            $insertAppointment = DB::insert("INSERT INTO `appointment` (`id`, `name`, `date`, `service`, `contact`, `message`, `email`, `status`, `qrcode`, `doctor`, `appointment_time`) VALUES (NULL, '$name', '$date', '$services', '$phone', '$message', '$email', 'approved', '$randomString', '$doctor', '$timeappointed');");
        }

        if($insertAppointment){
            return redirect('/qr')->with('success','Appointment Successfuly Added!');
        }else{
            return redirect('/userLoggedIn');
        }
    }
    public function qr(){
        $mainInfo = DB::select("SELECT * FROM main_info");
        $email = session('email');
        $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");
        $appointment = DB::select("SELECT * FROM appointment  WHERE email = '$email'");
        $time = DB::select("SELECT * FROM `appointment_time`");
        $rhuTeams = DB::select("SELECT * FROM teams");
        $rhusched = DB::select("SELECT * FROM rhusched");

        return view('users.qr',['rhusched'=>$rhusched,'mainInfo' => $mainInfo, 'name' => $name ,'app' =>$appointment,'time' => $time,'rhuTeams' => $rhuTeams]);
    }
    public function usermedreclist(){
        $mainInfo = DB::select("SELECT * FROM main_info");
        $email = session('email');
        $medicalrecordof = DB::select("SELECT * FROM med_rec WHERE email = '$email'");
        $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");
        $dp = DB::select("SELECT * FROM `userimage` WHERE useremail = '$email'");
        $rhusched = DB::select("SELECT * FROM rhusched");
        $userimage = "";
        foreach($dp as $picture){
            $imagefind = 1;
        }
        if($imagefind){
            $userimage = $picture -> imagename;
        }
        return view('users.usermedrec',['rhusched'=>$rhusched,'dp'=>$userimage,'mainInfo' => $mainInfo,'name' => $name ,'medicalrecordof' => $medicalrecordof]);
    }
    public function usermonitoring(){
        $brgy = DB::select("SELECT *  FROM brgy");
        $mainInfo = DB::select("SELECT * FROM main_info");
        $rhusched = DB::select("SELECT * FROM rhusched");
        return view('users.monitoring',['rhusched'=>$rhusched,'brgy'=> $brgy,'mainInfo'=> $mainInfo]);
    }
    public function vmprogram(Request $request){
        $id = $request->input('brgy');
        $rhusched = DB::select("SELECT * FROM rhusched");
        $mainInfo = DB::select("SELECT * FROM main_info");
        $infant = DB::select("SELECT mon_infant  FROM monitoring WHERE mon_name = '$id'  ORDER BY date DESC limit 1");
        $population = DB::select("SELECT population  FROM monitoring WHERE mon_name = '$id'  ORDER BY date DESC limit 1");
        $pwd = DB::select("SELECT mon_pwds  FROM monitoring WHERE mon_name = '$id'  ORDER BY date DESC limit 1");
        $covid = DB::select("SELECT mon_covid  FROM monitoring WHERE mon_name = '$id'  ORDER BY date DESC limit 1");
        $date = DB::select("SELECT date  FROM monitoring WHERE mon_name = '$id'  ORDER BY date DESC limit 1");
        return view('users.view-monitoring-program',['rhusched'=>$rhusched,'infant' => $infant,'population' => $population,'pwd' => $pwd,'covid' => $covid,'mainInfo'=> $mainInfo, 'brgy' => $id, 'date' => $date]);
    }
    public function personal(Request $request){

        $email = session('email');
        $npassword = $request->input('npassword');
        $op = $request->input('opassword');
        $username = $request->input('username');
        $bdate = $request->input('bdate');
        $adrs = $request->input('adrs');
        $opas = md5($op);
        $npassword = md5($npassword);
        $userid = DB::select("SELECT userlogin_id  from userlogin WHERE email = '$email'");
        $oldpass = DB::select("SELECT userpassword  from userlogin WHERE email = '$email'");
        $oldpassword = "";
        $hasimage = 0;
        $id = 0;
        foreach($userid as $itemid){
            $id = $itemid ->userlogin_id;
        }
        foreach($oldpass as $olp){
            $oldpassword = $olp ->userpassword;
        }
        $request->validate([
            'opassword' => 'required'
        ]);
        if($oldpassword == $opas){
            if($request->filled('npassword')){
                $updatepass = DB::update("UPDATE `userlogin` SET `userpassword` = '$npassword', `bdate` = '$bdate',`username` = '$username' WHERE `userlogin`.`userlogin_id` = $id");
            }else{
                $updatepass = DB::update("UPDATE `userlogin` SET `bdate` = '$bdate',`username` = '$username',`addrs` = '$adrs' WHERE `userlogin`.`userlogin_id` = $id");
            }
    
            if($request->hasfile('uploadimage')){
                $file = $request->file('uploadimage');
                $extension = $file->getClientOriginalExtension();
                $filename = time().".".$extension;
                
    
                $old_image = DB::select("SELECT * FROM userimage WHERE useremail = '$email'");
                foreach($old_image as $items){
                    $hasimage = 1;
                }
                if($hasimage){
                    $updateimage = DB::update("UPDATE `userimage` SET `imagename` = '$filename' WHERE `userimage`.`useremail` = '$email';");
                    unlink('profilepic/'.$old_image[0] -> imagename);
                }
                else{
                    $uploadimage = DB::insert("INSERT INTO `userimage` (`id`, `useremail`, `imagename`) VALUES (NULL, '$email', '$filename')");
                }
                    $file->move('profilepic/',$filename);
            }
                return redirect('/userLoggedIn')->with('success', 'Personal Information Updated Successfully!');
        }else{
            return redirect('/userLoggedIn')->with('failed', 'Old password dont match');
        }
    }
}
