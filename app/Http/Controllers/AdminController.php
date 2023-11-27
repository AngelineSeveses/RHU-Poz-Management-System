<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function monitoring(){
        $mon = DB::select("SELECT *  FROM monitoring ORDER BY date DESC");
        $brgy = DB::select("SELECT *  FROM brgy ORDER BY id ASC");
        $mon_name	 = DB::select("SELECT mon_name FROM monitoring");
        $Alipangpang = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Alipangpang'  ORDER BY date DESC limit 1");
        $Amagbagan = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Amagbagan'  ORDER BY date DESC limit 1");
        $Balacag = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Balacag'  ORDER BY date DESC limit 1");
        $Banding = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Banding'  ORDER BY date DESC limit 1");
        $Bantugan = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Bantugan'  ORDER BY date DESC limit 1");
        $Batakil = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Batakil'  ORDER BY date DESC limit 1");
        $Bobonan = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Bobonan'  ORDER BY date DESC limit 1");
        $Buneg = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Buneg'  ORDER BY date DESC limit 1");
        $Cablong = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Cablong'  ORDER BY date DESC limit 1");
        $Castaño = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Castaño'  ORDER BY date DESC limit 1");
        $Dilan = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Dilan'  ORDER BY date DESC limit 1");
        $Don = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Don Benito'  ORDER BY date DESC limit 1");
        $Haway = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Haway'  ORDER BY date DESC limit 1");
        $Imbalbalatong = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Imbalbalatong'  ORDER BY date DESC limit 1");
        $Inoman = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Inoman'  ORDER BY date DESC limit 1");
        $Laoac = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Laoac'  ORDER BY date DESC limit 1");
        $Maambal = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Maambal'  ORDER BY date DESC limit 1");
        $Malasin = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Malasin'  ORDER BY date DESC limit 1");
        $Malokiat = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Malokiat'  ORDER BY date DESC limit 1");
        $Manaol = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Manaol'  ORDER BY date DESC limit 1");
        $Nama = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Nama'  ORDER BY date DESC limit 1");
        $Nantangalan = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Nantangalan'  ORDER BY date DESC limit 1");
        $Palacpalac = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Palacpalac'  ORDER BY date DESC limit 1");
        $Palguyod = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Palguyod'  ORDER BY date DESC limit 1");
        $P1 = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Poblacion I'  ORDER BY date DESC limit 1");
        $P2 = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Poblacion II'  ORDER BY date DESC limit 1");
        $P3 = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Poblacion III'  ORDER BY date DESC limit 1");
        $P4 = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Poblacion IV'  ORDER BY date DESC limit 1");
        $Rosario = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Rosario'  ORDER BY date DESC limit 1");
        $Sugcong = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Sugcong'  ORDER BY date DESC limit 1");
        $Talogtog = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Talogtog'  ORDER BY date DESC limit 1");
        $Tulnac = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Tulnac'  ORDER BY date DESC limit 1");
        $Villegas = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Villegas'  ORDER BY date DESC limit 1");
        $Casanfernandoan = DB::select("SELECT mon_name, population  FROM monitoring WHERE mon_name = 'Casanfernandoan'  ORDER BY date DESC limit 1");
        $data = "";
        foreach($Villegas as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'gold'],";
        }
        foreach($Tulnac as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'blue'],";
        }
        foreach($Talogtog as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'violet'],";
        }
        foreach($Sugcong as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'orange'],";
        }
        foreach($P4 as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'purple'],";
        }
        foreach($P3 as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'silver'],";
        }
        foreach($P2 as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'green'],";
        }
        foreach($P1 as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'red'],";
        }
        foreach($Palguyod as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'blue'],";
        }
        foreach($Palacpalac as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'violet'],";
        }
        foreach($Nantangalan as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'orange'],";
        }
        foreach($Nama as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'silver'],";
        }
        foreach($Manaol as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'purple'],";
        }
        foreach($Malokiat as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'gold'],";
        }
        foreach($Malasin as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'red'],";
        }
        foreach($Maambal as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'green'],";
        }
        foreach($Laoac as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'blue'],";
        }
        foreach($Inoman as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'blue'],";
        }
        foreach($Imbalbalatong as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'violet'],";
        }
        foreach($Haway as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'orange'],";
        }
        foreach($Don as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'silver'],";
        }
        foreach($Dilan as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'purple'],";
        }
        foreach($Castaño as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'gold'],";
        }
        foreach($Casanfernandoan as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'green'],";
        }
        foreach($Cablong as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'red'],";
        }
        foreach($Banding as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'green'],";
        }
        foreach($Balacag as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'blue'],";
        }
        foreach($Bantugan as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'violet'],";
        }
        foreach($Batakil as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'orange'],";
        }
        foreach($Bobonan as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'silver'],";
        }
        foreach($Buneg as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'purple'],";
        }
        foreach($Amagbagan as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'green'],";
        }
        foreach($Alipangpang as $index => $val){
            $data.= "['" .$val->mon_name. "',".$val->population.",'gold'],";
        }
        

        // infants
        $iAlipangpang = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Alipangpang'  ORDER BY date DESC limit 1");
        $iAmagbagan = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Amagbagan'  ORDER BY date DESC limit 1");
        $iBalacag = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Balacag'  ORDER BY date DESC limit 1");
        $iBanding = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Banding'  ORDER BY date DESC limit 1");
        $iBantugan = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Bantugan'  ORDER BY date DESC limit 1");
        $iBatakil = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Batakil'  ORDER BY date DESC limit 1");
        $iBobonan = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Bobonan'  ORDER BY date DESC limit 1");
        $iBuneg = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Buneg'  ORDER BY date DESC limit 1");
        $iCablong = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Cablong'  ORDER BY date DESC limit 1");
        $iCastaño = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Castaño'  ORDER BY date DESC limit 1");
        $iDilan = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Dilan'  ORDER BY date DESC limit 1");
        $iDon = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Don Benito'  ORDER BY date DESC limit 1");
        $iHaway = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Haway'  ORDER BY date DESC limit 1");
        $iImbalbalatong = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Imbalbalatong'  ORDER BY date DESC limit 1");
        $iInoman = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Inoman'  ORDER BY date DESC limit 1");
        $iLaoac = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Laoac'  ORDER BY date DESC limit 1");
        $iMaambal = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Maambal'  ORDER BY date DESC limit 1");
        $iMalasin = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Malasin'  ORDER BY date DESC limit 1");
        $iMalokiat = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Malokiat'  ORDER BY date DESC limit 1");
        $iManaol = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Manaol'  ORDER BY date DESC limit 1");
        $iNama = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Nama'  ORDER BY date DESC limit 1");
        $iNantangalan = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Nantangalan'  ORDER BY date DESC limit 1");
        $iPalacpalac = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Palacpalac'  ORDER BY date DESC limit 1");
        $iPalguyod = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Palguyod'  ORDER BY date DESC limit 1");
        $iP1 = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Poblacion I'  ORDER BY date DESC limit 1");
        $iP2 = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Poblacion II'  ORDER BY date DESC limit 1");
        $iP3 = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Poblacion III'  ORDER BY date DESC limit 1");
        $iP4 = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Poblacion IV'  ORDER BY date DESC limit 1");
        $iRosario = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Rosario'  ORDER BY date DESC limit 1");
        $iSugcong = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Sugcong'  ORDER BY date DESC limit 1");
        $iTalogtog = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Talogtog'  ORDER BY date DESC limit 1");
        $iTulnac = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Tulnac'  ORDER BY date DESC limit 1");
        $iVillegas = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Villegas'  ORDER BY date DESC limit 1");
        $iCasanfernandoan = DB::select("SELECT mon_name, mon_infant  FROM monitoring WHERE mon_name = 'Casanfernandoan'  ORDER BY date DESC limit 1");
        $infants = "";

        foreach($iCasanfernandoan as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'green'],";
        }
        foreach($iVillegas as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'gold'],";
        }
        foreach($iTulnac as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'blue'],";
        }
        foreach($iTalogtog as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'violet'],";
        }
        foreach($iSugcong as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'orange'],";
        }
        foreach($iP4 as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'purple'],";
        }
        foreach($iP3 as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'silver'],";
        }
        foreach($iP2 as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'green'],";
        }
        foreach($iP1 as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'red'],";
        }
        foreach($iPalguyod as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'blue'],";
        }
        foreach($iPalacpalac as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'violet'],";
        }
        foreach($iNantangalan as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'orange'],";
        }
        foreach($iNama as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'silver'],";
        }
        foreach($iManaol as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'purple'],";
        }
        foreach($iMalokiat as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'gold'],";
        }
        foreach($iMalasin as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'red'],";
        }
        foreach($iMaambal as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'green'],";
        }
        foreach($iLaoac as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'blue'],";
        }
        foreach($iInoman as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'blue'],";
        }
        foreach($iImbalbalatong as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'violet'],";
        }
        foreach($iHaway as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'orange'],";
        }
        foreach($iDon as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'silver'],";
        }
        foreach($iDilan as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'purple'],";
        }
        foreach($iCastaño as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'gold'],";
        }
        foreach($iCablong as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'red'],";
        }
        foreach($iBanding as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'green'],";
        }
        foreach($iBalacag as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'blue'],";
        }
        foreach($iBantugan as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'violet'],";
        }
        foreach($iBatakil as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'orange'],";
        }
        foreach($iBobonan as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'silver'],";
        }
        foreach($iBuneg as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'purple'],";
        }
        foreach($iAmagbagan as $index => $val){
            $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'gold'],";
        }
        foreach($iAlipangpang as $index => $val){
                $infants.= "['" .$val->mon_name. "',".$val->mon_infant.",'red'],";
        }

        // pwd
        $iiAlipangpang = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Alipangpang'  ORDER BY date DESC limit 1");
        $iiAmagbagan = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Amagbagan'  ORDER BY date DESC limit 1");
        $iiBalacag = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Balacag'  ORDER BY date DESC limit 1");
        $iiBanding = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Banding'  ORDER BY date DESC limit 1");
        $iiBantugan = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Bantugan'  ORDER BY date DESC limit 1");
        $iiBatakil = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Batakil'  ORDER BY date DESC limit 1");
        $iiBobonan = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Bobonan'  ORDER BY date DESC limit 1");
        $iiBuneg = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Buneg'  ORDER BY date DESC limit 1");
        $iiCablong = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Cablong'  ORDER BY date DESC limit 1");
        $iiCastaño = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Castaño'  ORDER BY date DESC limit 1");
        $iiDilan = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Dilan'  ORDER BY date DESC limit 1");
        $iiDon = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Don Benito'  ORDER BY date DESC limit 1");
        $iiHaway = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Haway'  ORDER BY date DESC limit 1");
        $iiImbalbalatong = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Imbalbalatong'  ORDER BY date DESC limit 1");
        $iiInoman = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Inoman'  ORDER BY date DESC limit 1");
        $iiLaoac = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Laoac'  ORDER BY date DESC limit 1");
        $iiMaambal = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Maambal'  ORDER BY date DESC limit 1");
        $iiMalasin = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Malasin'  ORDER BY date DESC limit 1");
        $iiMalokiat = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Malokiat'  ORDER BY date DESC limit 1");
        $iiManaol = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Manaol'  ORDER BY date DESC limit 1");
        $iiNama = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Nama'  ORDER BY date DESC limit 1");
        $iiNantangalan = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Nantangalan'  ORDER BY date DESC limit 1");
        $iiPalacpalac = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Palacpalac'  ORDER BY date DESC limit 1");
        $iiPalguyod = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Palguyod'  ORDER BY date DESC limit 1");
        $iiP1 = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Poblacion I'  ORDER BY date DESC limit 1");
        $iiP2 = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Poblacion II'  ORDER BY date DESC limit 1");
        $iiP3 = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Poblacion III'  ORDER BY date DESC limit 1");
        $iiP4 = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Poblacion IV'  ORDER BY date DESC limit 1");
        $iiRosario = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Rosario'  ORDER BY date DESC limit 1");
        $iiSugcong = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Sugcong'  ORDER BY date DESC limit 1");
        $iiTalogtog = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Talogtog'  ORDER BY date DESC limit 1");
        $iiTulnac = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Tulnac'  ORDER BY date DESC limit 1");
        $iiVillegas = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Villegas'  ORDER BY date DESC limit 1");
        $iiCasanfernandoan = DB::select("SELECT mon_name, mon_pwds  FROM monitoring WHERE mon_name = 'Casanfernandoan'  ORDER BY date DESC limit 1");
        $pwd = "";

        foreach($iiCasanfernandoan as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'green'],";
        }
        foreach($iiVillegas as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'gold'],";
        }
        foreach($iiTulnac as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'blue'],";
        }
        foreach($iiTalogtog as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'violet'],";
        }
        foreach($iiSugcong as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'orange'],";
        }
        foreach($iiP4 as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'purple'],";
        }
        foreach($iiP3 as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'silver'],";
        }
        foreach($iiP2 as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'green'],";
        }
        foreach($iiP1 as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'red'],";
        }
        foreach($iiPalguyod as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'blue'],";
        }
        foreach($iiPalacpalac as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'violet'],";
        }
        foreach($iiNantangalan as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'orange'],";
        }
        foreach($iiNama as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'silver'],";
        }
        foreach($iiManaol as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'purple'],";
        }
        foreach($iiMalokiat as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'gold'],";
        }
        foreach($iiMalasin as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'red'],";
        }
        foreach($iiMaambal as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'green'],";
        }
        foreach($iiLaoac as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'blue'],";
        }
        foreach($iiInoman as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'blue'],";
        }
        foreach($iiImbalbalatong as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'violet'],";
        }
        foreach($iiHaway as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'orange'],";
        }
        foreach($iiDon as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'silver'],";
        }
        foreach($iiDilan as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'purple'],";
        }
        foreach($iiCastaño as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'gold'],";
        }
        foreach($iiCablong as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'red'],";
        }
        foreach($iiBanding as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'green'],";
        }
        foreach($iiBalacag as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'blue'],";
        }
        foreach($iiBantugan as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'violet'],";
        }
        foreach($iiBatakil as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'orange'],";
        }
        foreach($iiBobonan as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'silver'],";
        }
        foreach($iiBuneg as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'purple'],";
        }
        foreach($iiAmagbagan as $index => $val){
            $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'gold'],";
        }
        foreach($iiAlipangpang as $index => $val){
                $pwd.= "['" .$val->mon_name. "',".$val->mon_pwds.",'red'],";
        }
        // covid
        $iiiAlipangpang = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Alipangpang'  ORDER BY date DESC limit 1");
        $iiiAmagbagan = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Amagbagan'  ORDER BY date DESC limit 1");
        $iiiBalacag = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Balacag'  ORDER BY date DESC limit 1");
        $iiiBanding = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Banding'  ORDER BY date DESC limit 1");
        $iiiBantugan = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Bantugan'  ORDER BY date DESC limit 1");
        $iiiBatakil = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Batakil'  ORDER BY date DESC limit 1");
        $iiiBobonan = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Bobonan'  ORDER BY date DESC limit 1");
        $iiiBuneg = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Buneg'  ORDER BY date DESC limit 1");
        $iiiCablong = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Cablong'  ORDER BY date DESC limit 1");
        $iiiCastaño = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Castaño'  ORDER BY date DESC limit 1");
        $iiiDilan = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Dilan'  ORDER BY date DESC limit 1");
        $iiiDon = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Don Benito'  ORDER BY date DESC limit 1");
        $iiiHaway = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Haway'  ORDER BY date DESC limit 1");
        $iiiImbalbalatong = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Imbalbalatong'  ORDER BY date DESC limit 1");
        $iiiInoman = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Inoman'  ORDER BY date DESC limit 1");
        $iiiLaoac = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Laoac'  ORDER BY date DESC limit 1");
        $iiiMaambal = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Maambal'  ORDER BY date DESC limit 1");
        $iiiMalasin = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Malasin'  ORDER BY date DESC limit 1");
        $iiiMalokiat = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Malokiat'  ORDER BY date DESC limit 1");
        $iiiManaol = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Manaol'  ORDER BY date DESC limit 1");
        $iiiNama = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Nama'  ORDER BY date DESC limit 1");
        $iiiNantangalan = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Nantangalan'  ORDER BY date DESC limit 1");
        $iiiPalacpalac = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Palacpalac'  ORDER BY date DESC limit 1");
        $iiiPalguyod = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Palguyod'  ORDER BY date DESC limit 1");
        $iiiP1 = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Poblacion I'  ORDER BY date DESC limit 1");
        $iiiP2 = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Poblacion II'  ORDER BY date DESC limit 1");
        $iiiP3 = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Poblacion III'  ORDER BY date DESC limit 1");
        $iiiP4 = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Poblacion IV'  ORDER BY date DESC limit 1");
        $iiiRosario = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Rosario'  ORDER BY date DESC limit 1");
        $iiiSugcong = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Sugcong'  ORDER BY date DESC limit 1");
        $iiiTalogtog = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Talogtog'  ORDER BY date DESC limit 1");
        $iiiTulnac = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Tulnac'  ORDER BY date DESC limit 1");
        $iiiVillegas = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Villegas'  ORDER BY date DESC limit 1");
        $iiiCasanfernandoan = DB::select("SELECT mon_name, mon_covid  FROM monitoring WHERE mon_name = 'Casanfernandoan'  ORDER BY date DESC limit 1");
        $covid = "";

        foreach($iiiCasanfernandoan as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'green'],";
        }
        foreach($iiiVillegas as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'gold'],";
        }
        foreach($iiiTulnac as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'blue'],";
        }
        foreach($iiiTalogtog as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'violet'],";
        }
        foreach($iiiSugcong as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'orange'],";
        }
        foreach($iiiP4 as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'purple'],";
        }
        foreach($iiiP3 as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'silver'],";
        }
        foreach($iiiP2 as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'green'],";
        }
        foreach($iiiP1 as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'red'],";
        }
        foreach($iiiPalguyod as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'blue'],";
        }
        foreach($iiiPalacpalac as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'violet'],";
        }
        foreach($iiiNantangalan as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'orange'],";
        }
        foreach($iiiNama as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'silver'],";
        }
        foreach($iiiManaol as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'purple'],";
        }
        foreach($iiiMalokiat as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'gold'],";
        }
        foreach($iiiMalasin as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'red'],";
        }
        foreach($iiiMaambal as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'green'],";
        }
        foreach($iiiLaoac as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'blue'],";
        }
        foreach($iiiInoman as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'blue'],";
        }
        foreach($iiiImbalbalatong as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'violet'],";
        }
        foreach($iiiHaway as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'orange'],";
        }
        foreach($iiiDon as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'silver'],";
        }
        foreach($iiiDilan as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'purple'],";
        }
        foreach($iiiCastaño as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'gold'],";
        }
        foreach($iiiCablong as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'red'],";
        }
        foreach($iiiBanding as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'green'],";
        }
        foreach($iiiBalacag as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'blue'],";
        }
        foreach($iiiBantugan as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'violet'],";
        }
        foreach($iiiBatakil as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'orange'],";
        }
        foreach($iiiBobonan as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'silver'],";
        }
        foreach($iiiBuneg as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'purple'],";
        }
        foreach($iiiAmagbagan as $index => $val){
            $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'gold'],";
        }
        foreach($iiiAlipangpang as $index => $val){
                $covid.= "['" .$val->mon_name. "',".$val->	mon_covid.",'red'],";
        }
         // senior
         $aiiiAlipangpang = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Alipangpang'  ORDER BY date DESC limit 1");
         $aiiiAmagbagan = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Amagbagan'  ORDER BY date DESC limit 1");
         $aiiiBalacag = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Balacag'  ORDER BY date DESC limit 1");
         $aiiiBanding = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Banding'  ORDER BY date DESC limit 1");
         $aiiiBantugan = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Bantugan'  ORDER BY date DESC limit 1");
         $aiiiBatakil = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Batakil'  ORDER BY date DESC limit 1");
         $aiiiBobonan = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Bobonan'  ORDER BY date DESC limit 1");
         $aiiiBuneg = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Buneg'  ORDER BY date DESC limit 1");
         $aiiiCablong = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Cablong'  ORDER BY date DESC limit 1");
         $aiiiCastaño = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Castaño'  ORDER BY date DESC limit 1");
         $aiiiDilan = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Dilan'  ORDER BY date DESC limit 1");
         $aiiiDon = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Don Benito'  ORDER BY date DESC limit 1");
         $aiiiHaway = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Haway'  ORDER BY date DESC limit 1");
         $aiiiImbalbalatong = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Imbalbalatong'  ORDER BY date DESC limit 1");
         $aiiiInoman = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Inoman'  ORDER BY date DESC limit 1");
         $aiiiLaoac = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Laoac'  ORDER BY date DESC limit 1");
         $aiiiMaambal = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Maambal'  ORDER BY date DESC limit 1");
         $aiiiMalasin = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Malasin'  ORDER BY date DESC limit 1");
         $aiiiMalokiat = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Malokiat'  ORDER BY date DESC limit 1");
         $aiiiManaol = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Manaol'  ORDER BY date DESC limit 1");
         $aiiiNama = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Nama'  ORDER BY date DESC limit 1");
         $aiiiNantangalan = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Nantangalan'  ORDER BY date DESC limit 1");
         $aiiiPalacpalac = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Palacpalac'  ORDER BY date DESC limit 1");
         $aiiiPalguyod = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Palguyod'  ORDER BY date DESC limit 1");
         $aiiiP1 = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Poblacion I'  ORDER BY date DESC limit 1");
         $aiiiP2 = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Poblacion II'  ORDER BY date DESC limit 1");
         $aiiiP3 = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Poblacion III'  ORDER BY date DESC limit 1");
         $aiiiP4 = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Poblacion IV'  ORDER BY date DESC limit 1");
         $aiiiRosario = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Rosario'  ORDER BY date DESC limit 1");
         $aiiiSugcong = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Sugcong'  ORDER BY date DESC limit 1");
         $aiiiTalogtog = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Talogtog'  ORDER BY date DESC limit 1");
         $aiiiTulnac = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Tulnac'  ORDER BY date DESC limit 1");
         $aiiiVillegas = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Villegas'  ORDER BY date DESC limit 1");
         $aiiiCasanfernandoan = DB::select("SELECT mon_name, senior  FROM monitoring WHERE mon_name = 'Casanfernandoan'  ORDER BY date DESC limit 1");
         $senior = "";
 
         foreach($aiiiCasanfernandoan as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'green'],";
         }
         foreach($aiiiVillegas as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'gold'],";
         }
         foreach($aiiiTulnac as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'blue'],";
         }
         foreach($aiiiTalogtog as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'violet'],";
         }
         foreach($aiiiSugcong as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'orange'],";
         }
         foreach($aiiiP4 as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'purple'],";
         }
         foreach($aiiiP3 as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'silver'],";
         }
         foreach($aiiiP2 as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'green'],";
         }
         foreach($aiiiP1 as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'red'],";
         }
         foreach($aiiiPalguyod as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'blue'],";
         }
         foreach($aiiiPalacpalac as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'violet'],";
         }
         foreach($aiiiNantangalan as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'orange'],";
         }
         foreach($aiiiNama as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'silver'],";
         }
         foreach($aiiiManaol as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'purple'],";
         }
         foreach($aiiiMalokiat as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'gold'],";
         }
         foreach($aiiiMalasin as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'red'],";
         }
         foreach($aiiiMaambal as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'green'],";
         }
         foreach($aiiiLaoac as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'blue'],";
         }
         foreach($aiiiInoman as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'blue'],";
         }
         foreach($aiiiImbalbalatong as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'violet'],";
         }
         foreach($aiiiHaway as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'orange'],";
         }
         foreach($aiiiDon as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'silver'],";
         }
         foreach($aiiiDilan as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'purple'],";
         }
         foreach($aiiiCastaño as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'gold'],";
         }
         foreach($aiiiCablong as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'red'],";
         }
         foreach($aiiiBanding as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'green'],";
         }
         foreach($aiiiBalacag as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'blue'],";
         }
         foreach($aiiiBantugan as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'violet'],";
         }
         foreach($aiiiBatakil as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'orange'],";
         }
         foreach($aiiiBobonan as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'silver'],";
         }
         foreach($aiiiBuneg as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'purple'],";
         }
         foreach($aiiiAmagbagan as $index => $val){
             $senior.= "['" .$val->mon_name. "',".$val->	senior.",'gold'],";
         }
         foreach($aiiiAlipangpang as $index => $val){
                $senior.= "['" .$val->mon_name. "',".$val->	senior.",'red'],";
         }
         // under monitoring
         $aaiiiAlipangpang = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Alipangpang'  ORDER BY date DESC limit 1");
         $aaiiiAmagbagan = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Amagbagan'  ORDER BY date DESC limit 1");
         $aaiiiBalacag = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Balacag'  ORDER BY date DESC limit 1");
         $aaiiiBanding = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Banding'  ORDER BY date DESC limit 1");
         $aaiiiBantugan = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Bantugan'  ORDER BY date DESC limit 1");
         $aaiiiBatakil = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Batakil'  ORDER BY date DESC limit 1");
         $aaiiiBobonan = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Bobonan'  ORDER BY date DESC limit 1");
         $aaiiiBuneg = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Buneg'  ORDER BY date DESC limit 1");
         $aaiiiCablong = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Cablong'  ORDER BY date DESC limit 1");
         $aaiiiCastaño = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Castaño'  ORDER BY date DESC limit 1");
         $aaiiiDilan = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Dilan'  ORDER BY date DESC limit 1");
         $aaiiiDon = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Don Benito'  ORDER BY date DESC limit 1");
         $aaiiiHaway = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Haway'  ORDER BY date DESC limit 1");
         $aaiiiImbalbalatong = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Imbalbalatong'  ORDER BY date DESC limit 1");
         $aaiiiInoman = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Inoman'  ORDER BY date DESC limit 1");
         $aaiiiLaoac = DB::select("SELECT mon_name, under_monitoring  FROM monitoring WHERE mon_name = 'Laoac'  ORDER BY date DESC limit 1");
         $aaiiiMaambal = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Maambal'  ORDER BY date DESC limit 1");
         $aaiiiMalasin = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Malasin'  ORDER BY date DESC limit 1");
         $aaiiiMalokiat = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Malokiat'  ORDER BY date DESC limit 1");
         $aaiiiManaol = DB::select("SELECT mon_name, under_monitoring  FROM monitoring WHERE mon_name = 'Manaol'  ORDER BY date DESC limit 1");
         $aaiiiNama = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Nama'  ORDER BY date DESC limit 1");
         $aaiiiNantangalan = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Nantangalan'  ORDER BY date DESC limit 1");
         $aaiiiPalacpalac = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Palacpalac'  ORDER BY date DESC limit 1");
         $aaiiiPalguyod = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Palguyod'  ORDER BY date DESC limit 1");
         $aaiiiP1 = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Poblacion I'  ORDER BY date DESC limit 1");
         $aaiiiP2 = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Poblacion II'  ORDER BY date DESC limit 1");
         $aaiiiP3 = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Poblacion III'  ORDER BY date DESC limit 1");
         $aaiiiP4 = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Poblacion IV'  ORDER BY date DESC limit 1");
         $aaiiiRosario = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Rosario'  ORDER BY date DESC limit 1");
         $aaiiiSugcong = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Sugcong'  ORDER BY date DESC limit 1");
         $aaiiiTalogtog = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Talogtog'  ORDER BY date DESC limit 1");
         $aaiiiTulnac = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Tulnac'  ORDER BY date DESC limit 1");
         $aaiiiVillegas = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Villegas'  ORDER BY date DESC limit 1");
         $aaiiiCasanfernandoan = DB::select("SELECT mon_name, under_monitoring	  FROM monitoring WHERE mon_name = 'Casanfernandoan'  ORDER BY date DESC limit 1");
         $covid_under_monitoring = "";

         foreach($aaiiiCasanfernandoan as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'green'],";
        }
        foreach($aaiiiVillegas as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'gold'],";
        }
        foreach($aaiiiTulnac as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'blue'],";
        }
        foreach($aaiiiTalogtog as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'violet'],";
        }
        foreach($aaiiiSugcong as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'orange'],";
        }
        foreach($aaiiiP4 as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'purple'],";
        }
        foreach($aaiiiP3 as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'silver'],";
        }
        foreach($aaiiiP2 as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'green'],";
        }
        foreach($aaiiiP1 as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'red'],";
        }
        foreach($aaiiiPalguyod as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'blue'],";
        }
        foreach($aaiiiPalacpalac as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'violet'],";
        }
        foreach($aaiiiNantangalan as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'orange'],";
        }
        foreach($aaiiiNama as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'silver'],";
        }
        foreach($aaiiiManaol as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'purple'],";
        }
        foreach($aaiiiMalokiat as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'gold'],";
        }
        foreach($aaiiiMalasin as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'red'],";
        }
        foreach($aaiiiMaambal as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'green'],";
        }
        foreach($aaiiiLaoac as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'blue'],";
        }
        foreach($aaiiiInoman as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'blue'],";
        }
        foreach($aaiiiImbalbalatong as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'violet'],";
        }
        foreach($aaiiiHaway as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'orange'],";
        }
        foreach($aaiiiDon as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'silver'],";
        }
        foreach($aaiiiDilan as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'purple'],";
        }
        foreach($aaiiiCastaño as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'gold'],";
        }
        foreach($aaiiiCablong as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'red'],";
        }
        foreach($aaiiiBanding as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'green'],";
        }
        foreach($aaiiiBalacag as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'blue'],";
        }
        foreach($aaiiiBantugan as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'violet'],";
        }
        foreach($aaiiiBatakil as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'orange'],";
        }
        foreach($aaiiiBobonan as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'silver'],";
        }
        foreach($aaiiiBuneg as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->under_monitoring.",'purple'],";
        }
        foreach($aaiiiAmagbagan as $index => $val){
            $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'gold'],";
        }
        foreach($aaiiiAlipangpang as $index => $val){
               $covid_under_monitoring.= "['" .$val->mon_name. "',".$val->	under_monitoring.",'red'],";
        }
         // under quarantine
         $uaaiiiAlipangpang = DB::select("SELECT mon_name, 	on_quarantine	  FROM monitoring WHERE mon_name = 'Alipangpang'  ORDER BY date DESC limit 1");
         $uaaiiiAmagbagan = DB::select("SELECT mon_name, 	on_quarantine	  FROM monitoring WHERE mon_name = 'Amagbagan'  ORDER BY date DESC limit 1");
         $uaaiiiBalacag = DB::select("SELECT mon_name, 	on_quarantine	  FROM monitoring WHERE mon_name = 'Balacag'  ORDER BY date DESC limit 1");
         $uaaiiiBanding = DB::select("SELECT mon_name, 	on_quarantine	  FROM monitoring WHERE mon_name = 'Banding'  ORDER BY date DESC limit 1");
         $uaaiiiBantugan = DB::select("SELECT mon_name, 	on_quarantine	  FROM monitoring WHERE mon_name = 'Bantugan'  ORDER BY date DESC limit 1");
         $uaaiiiBatakil = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Batakil'  ORDER BY date DESC limit 1");
         $uaaiiiBobonan = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Bobonan'  ORDER BY date DESC limit 1");
         $uaaiiiBuneg = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Buneg'  ORDER BY date DESC limit 1");
         $uaaiiiCablong = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Cablong'  ORDER BY date DESC limit 1");
         $uaaiiiCastaño = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Castaño'  ORDER BY date DESC limit 1");
         $uaaiiiDilan = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Dilan'  ORDER BY date DESC limit 1");
         $uaaiiiDon = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Don Benito'  ORDER BY date DESC limit 1");
         $uaaiiiHaway = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Haway'  ORDER BY date DESC limit 1");
         $uaaiiiImbalbalatong = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Imbalbalatong'  ORDER BY date DESC limit 1");
         $uaaiiiInoman = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Inoman'  ORDER BY date DESC limit 1");
         $uaaiiiLaoac = DB::select("SELECT mon_name, on_quarantine  FROM monitoring WHERE mon_name = 'Laoac'  ORDER BY date DESC limit 1");
         $uaaiiiMaambal = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Maambal'  ORDER BY date DESC limit 1");
         $uaaiiiMalasin = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Malasin'  ORDER BY date DESC limit 1");
         $uaaiiiMalokiat = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Malokiat'  ORDER BY date DESC limit 1");
         $uaaiiiManaol = DB::select("SELECT mon_name, on_quarantine  FROM monitoring WHERE mon_name = 'Manaol'  ORDER BY date DESC limit 1");
         $uaaiiiNama = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Nama'  ORDER BY date DESC limit 1");
         $uaaiiiNantangalan = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Nantangalan'  ORDER BY date DESC limit 1");
         $uaaiiiPalacpalac = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Palacpalac'  ORDER BY date DESC limit 1");
         $uaaiiiPalguyod = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Palguyod'  ORDER BY date DESC limit 1");
         $uaaiiiP1 = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Poblacion I'  ORDER BY date DESC limit 1");
         $uaaiiiP2 = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Poblacion II'  ORDER BY date DESC limit 1");
         $uaaiiiP3 = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Poblacion III'  ORDER BY date DESC limit 1");
         $uaaiiiP4 = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Poblacion IV'  ORDER BY date DESC limit 1");
         $uaaiiiRosario = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Rosario'  ORDER BY date DESC limit 1");
         $uaaiiiSugcong = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Sugcong'  ORDER BY date DESC limit 1");
         $uaaiiiTalogtog = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Talogtog'  ORDER BY date DESC limit 1");
         $uaaiiiTulnac = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Tulnac'  ORDER BY date DESC limit 1");
         $uaaiiiVillegas = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Villegas'  ORDER BY date DESC limit 1");
         $uaaiiiCasanfernandoan = DB::select("SELECT mon_name, on_quarantine	  FROM monitoring WHERE mon_name = 'Casanfernandoan'  ORDER BY date DESC limit 1");
         $under_quarantine = "";

         foreach($uaaiiiCasanfernandoan as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'green'],";
        }
        foreach($uaaiiiVillegas as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'gold'],";
        }
        foreach($uaaiiiTulnac as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'blue'],";
        }
        foreach($uaaiiiTalogtog as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'violet'],";
        }
        foreach($uaaiiiSugcong as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'orange'],";
        }
        foreach($uaaiiiP4 as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'purple'],";
        }
        foreach($uaaiiiP3 as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'silver'],";
        }
        foreach($uaaiiiP2 as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'green'],";
        }
        foreach($uaaiiiP1 as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'red'],";
        }
        foreach($uaaiiiPalguyod as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'blue'],";
        }
        foreach($uaaiiiPalacpalac as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'violet'],";
        }
        foreach($uaaiiiNantangalan as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'orange'],";
        }
        foreach($uaaiiiNama as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'silver'],";
        }
        foreach($uaaiiiManaol as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'purple'],";
        }
        foreach($uaaiiiMalokiat as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'gold'],";
        }
        foreach($uaaiiiMalasin as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'red'],";
        }
        foreach($uaaiiiMaambal as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'green'],";
        }
        foreach($uaaiiiLaoac as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'blue'],";
        }
        foreach($uaaiiiInoman as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'blue'],";
        }
        foreach($uaaiiiImbalbalatong as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'violet'],";
        }
        foreach($uaaiiiHaway as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'orange'],";
        }
        foreach($uaaiiiDon as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'silver'],";
        }
        foreach($uaaiiiDilan as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'purple'],";
        }
        foreach($uaaiiiCastaño as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'gold'],";
        }
        foreach($uaaiiiCablong as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'red'],";
        }
        foreach($uaaiiiBanding as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'green'],";
        }
        foreach($uaaiiiBalacag as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'blue'],";
        }
        foreach($uaaiiiBantugan as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'violet'],";
        }
        foreach($uaaiiiBatakil as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'orange'],";
        }
        foreach($uaaiiiBobonan as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'silver'],";
        }
        foreach($uaaiiiBuneg as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->on_quarantine.",'purple'],";
        }
        foreach($uaaiiiAmagbagan as $index => $val){
            $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'gold'],";
        }
        foreach($uaaiiiAlipangpang as $index => $val){
               $under_quarantine.= "['" .$val->mon_name. "',".$val->	on_quarantine.",'red'],";
        }
 

        $allpersonel = DB::select("SELECT * FROM `populationperbarangay`");
        $infantslist = DB::select("SELECT * FROM `infants`");
        $pwddatas = DB::select("SELECT * FROM `pwd`");
        $covidcase = DB::select("SELECT * FROM `covidcase`");
        $oldpopulation = DB::select("SELECT * FROM `population`");

        return view('admin.monitoring',['covid_under_monitoring'=>$covid_under_monitoring,'senior'=>$senior,'oldpopulation'=>$oldpopulation,'covidcase'=>$covidcase,'pwddatas'=>$pwddatas,'infantslist'=>$infantslist,'allpersonel'=>$allpersonel,'data' => $data,'infants' => $infants,'covid' => $covid,'pwd' => $pwd,'monitoring' => $mon,'mon_name' => $mon_name,'brgy' => $brgy]);
    }
    public function updatemypopulation(Request $request){
        $pdata = $request->input('pplation');
        $updatepopulatioset = DB::update("UPDATE `population` SET `populationnumber` = '$pdata' WHERE `population`.`id` = 2");
        if($updatepopulatioset){
            return redirect('/monitoring')->with('success','Population Updated Successfuly!');
        }
        else{
            return redirect('/monitoring');
        }
    }
    public function sensoring(){
        $brgy = DB::select("SELECT *  FROM brgy ORDER BY id ASC");
        return view('sensos.sensos',['brgy' => $brgy]);
    }
    public function sensos(Request $request){
        $request->validate([
            'email' => 'required|unique:userlogin,email',
            'username' => 'required',
            'birthdate' => 'required',
            'usertype' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
        
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $birthdate = $request->input('birthdate');
        $usertype = $request->input('usertype');

        $encpass = md5($password);

        $register = DB::insert("INSERT INTO userlogin (`userlogin_id`, `username`, `email`, `userpassword`, `usertype`, `bdate`) VALUES (NULL , '$username','$email','$encpass', '$usertype','$birthdate' )");

        if($register){
            return redirect('/monitoring')->with('success','New Sensos team Added Successfuly!');
        }
        else{
            return redirect('/monitoring');
        }
    }
    public function savemonedit(Request $request){
        $request->validate([
            'population' => 'required|numeric',
            'barangay' => 'required',
            'infants' => 'required|numeric',
            'pwd' => 'required|numeric',
            'covid' => 'required|numeric'
        ]);

        $id = $request->input('editid');
        $barangay = $request->input('barangay');
        $population = $request->input('population');
        $infants = $request->input('infants');
        $pwd = $request->input('pwd');
        $covid = $request->input('covid');
        $date = now()->format('Y-m-d');

        $updatemonitor = DB::insert("UPDATE `monitoring` SET `mon_name` = '$barangay', `mon_covid` = '$covid', `mon_infant` = '$infants', `mon_pwds` = '$pwd', `population` = '$population' WHERE `monitoring`.`mon_id` = $id");

        if($updatemonitor){
            return redirect('/monitoring')->with('success', 'Data Updated Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function savemanualeditpopulation(Request $request){
        $name = $request->input('name');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $barangay = $request->input('barangay');
        $did = $request->input('did');
        $date = $request->input('date');
        $oldbarangay = $request->input('oldbarangay');

        $total_population = 0;
        $id_population = 0;
        $total_population1 = 0;
        $id_population1 = 0;

        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        $id1 = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$oldbarangay'  ORDER BY mon_id DESC LIMIT  1 ");
        

        $updatemydata = DB::update("UPDATE `populationperbarangay` SET `name` = '$name', `gender` = '$gender', `age` = '$age', `date` = '$date', `barangay` = '$barangay' WHERE `populationperbarangay`.`id` = $did");

        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_population ++;
        }
        foreach($id1 as $item){
            $id_population1 = $item-> mon_id;
            $total_population1 = $item -> population;
            $total_population1 --;
        }

        if($barangay != $oldbarangay){
            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");
            $updatepopulation1 = Db::update("UPDATE `monitoring` SET `population` = '$total_population1' WHERE `monitoring`.`mon_id` = $id_population1");
        }

        if($updatemydata){
            return redirect('/monitoring')->with('success', 'Data Updated Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function saveeditinfant(Request $request){
        $name = $request->input('infant_name');
        $gender = $request->input('infant_gender');
        $age = $request->input('infant_bdate');
        $barangay = $request->input('infant_barangay');
        $date = $request->input('date');
        $did = $request->input('iid');
        $oldbarangay = $request->input('oldbarangay');

        $infant_number = $request->input('infant_number');
        $mother_name = $request->input('mother_name');
        $father_name = $request->input('father_name');
        $birth_place = $request->input('birth_place');
        $parents_contact_number = $request->input('parents_contact_number');
        $infant_category = $request->input('infant_category');

        $total_population = 0;
        $total_infant = 0;
        $total_infant1 = 0;
        $id_population = 0;
        $total_population1 = 0;
        $id_population1 = 0;

        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        $id1 = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$oldbarangay'  ORDER BY mon_id DESC LIMIT  1 ");
        

        $updatemydata = DB::update("UPDATE `infants` SET 
        `fullname` = '$name', 
        `gender` = '$gender', 
        `bdate` = '$age', 
        `date` = '$date', 
        `barangay` = '$barangay' ,
        `infant_number` = '$infant_number' ,
        `mother_name` = '$mother_name' ,
        `father_name` = '$father_name' ,
        `birth_place` = '$birth_place' ,
        `parents_contact_number` = '$parents_contact_number' ,
        `category` = '$infant_category' 
        
        WHERE `infants`.`id` = $did");

        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_infant = $item -> mon_infant;
            $total_population ++;
            $total_infant ++;
        }
        foreach($id1 as $item){
            $id_population1 = $item-> mon_id;
            $total_population1 = $item -> population;
            $total_infant1 = $item -> mon_infant;
            $total_population1 --;
            $total_infant1 --;
        }

        if($barangay != $oldbarangay){
            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");
            $updatepopulation1 = Db::update("UPDATE `monitoring` SET `population` = '$total_population1' WHERE `monitoring`.`mon_id` = $id_population1");
            $upinfant = Db::update("UPDATE `monitoring` SET `mon_infant` = '$total_infant' WHERE `monitoring`.`mon_id` = $id_population");
            $upinfant1 = Db::update("UPDATE `monitoring` SET `mon_infant` = '$total_infant1' WHERE `monitoring`.`mon_id` = $id_population1");
        }
        if($updatemydata){
            return redirect('/monitoring')->with('success', 'Data Updated Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function saveeditpwd(Request $request){
        $name = $request->input('pwd_name');
        $gender = $request->input('pwd_gender');
        $age = $request->input('pwd_bdate');
        $barangay = $request->input('pwd_barangay');
        $did = $request->input('pid');
        $date = $request->input('date');

        $pwd_num = $request->input('pwd_number');
        $contact_number = $request->input('contact_number');
        $birth_place = $request->input('birth_place');
        $emergency_contact_person = $request->input('emergency_contact_person');
        $emergency_contact_number = $request->input('emergency_contact_number');
        $pwdemail = $request->input('pwdemail');
        $disability_type = $request->input('disability_type');
        $blood_type = $request->input('blood_type');
        $Number_of_checkups = $request->input('Number_of_checkups');
        $diagnosis = $request->input('diagnosis');
        $treatment = $request->input('treatment');

        $oldbarangay = $request->input('oldbarangay');
        $oldpname = $request->input('oldpname');
        $oldpbdate = $request->input('oldpdate');
        $oldgender = $request->input('oldpgender');

        $total_population = 0;
        $total_pwds = 0;
        $total_pwds1 = 0;
        $id_population = 0;
        $total_population1 = 0;
        $id_population1 = 0;
        $_myid = 0;


        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        $id1 = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$oldbarangay'  ORDER BY mon_id DESC LIMIT  1 ");
        

        $updatemydata = DB::update("UPDATE `pwd` SET 
        `name` = '$name',
        `gender` = '$gender',
        `date` = '$date', 
        `bdate` = '$age', 
        `pwd_num` = '$pwd_num',
        `contact` = '$contact_number',
        `birthplace` = '$birth_place',
        `ecp_name` = '$emergency_contact_person',
        `ecp_number` = '$emergency_contact_number',
        `email` = '$pwdemail',
        `disability_type` = '$disability_type',
        `bloodtype` = '$blood_type',
        `number_checkups` = '$Number_of_checkups',
        `diagnosis` = '$diagnosis',
        `treatment` = '$treatment'
        
        WHERE `pwd`.`id` = $did");
        $populationgetid = DB::select("SELECT id FROM `populationperbarangay` WHERE name = '$oldpname' AND age = '$oldpbdate' AND gender = '$oldgender' AND barangay = '$oldbarangay'");

        foreach($populationgetid as $item){
            $_myid = $item -> id;
        }
        
        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_pwds = $item -> mon_pwds;
            $total_population ++;
            $total_pwds ++;
        }
        foreach($id1 as $item){
            $id_population1 = $item-> mon_id;
            $total_population1 = $item -> population;
            $total_pwds1 = $item -> mon_pwds;
            $total_population1 --;
            $total_pwds1 --;
        }

        if($barangay != $oldbarangay){
            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");
            $updatepopulation1 = Db::update("UPDATE `monitoring` SET `population` = '$total_population1' WHERE `monitoring`.`mon_id` = $id_population1");
            $upinfant = Db::update("UPDATE `monitoring` SET `mon_pwds` = '$total_pwds' WHERE `monitoring`.`mon_id` = $id_population");
            $upinfant1 = Db::update("UPDATE `monitoring` SET `mon_pwds` = '$total_pwds1' WHERE `monitoring`.`mon_id` = $id_population1");
        }
        $updatepopulationvalue = DB::update("UPDATE `populationperbarangay` SET `name` = '$name', `gender` = '$gender', `age` = '$age', `barangay` = '$barangay' WHERE `populationperbarangay`.`id` = $_myid;");

        if($updatemydata){
            return redirect('/monitoring')->with('success', 'Data Updated Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function saveeditcovid(Request $request){
        $name = $request->input('covid_name');
        $gender = $request->input('covid_gender');
        $age = $request->input('covid_bdate');
        $barangay = $request->input('covid_barangay');
        $date = $request->input('date');
        $covid_category = $request->input('covid_category');
        $did = $request->input('cid');

        $oldbarangay = $request->input('oldbarangay');
        $oldpname = $request->input('oldpname');
        $oldpbdate = $request->input('oldpdate');
        $oldgender = $request->input('oldpgender');

        $total_population = 0;
        $total_covid = 0;
        $total_covid1 = 0;
        $id_population = 0;
        $total_population1 = 0;
        $id_population1 = 0;
        $_myid = 0;


        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        $id1 = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$oldbarangay'  ORDER BY mon_id DESC LIMIT  1 ");
        

        $updatemydata = DB::update("UPDATE `covidcase` SET `name` = '$name', `gender` = '$gender', `category` = '$covid_category', `age` = '$age', `date` = '$date', `barangay` = '$barangay' WHERE `covidcase`.`id` = $did");
        $populationgetid = DB::select("SELECT id FROM `populationperbarangay` WHERE name = '$oldpname' AND age = '$oldpbdate' AND gender = '$oldgender' AND barangay = '$oldbarangay'");

        foreach($populationgetid as $item){
            $_myid = $item -> id;
        }
        
        foreach($id as $item){  
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_covid = $item -> mon_covid;
            $total_population ++;
            $total_covid ++;
        }
        foreach($id1 as $item){
            $id_population1 = $item-> mon_id;
            $total_population1 = $item -> population;
            $total_covid1 = $item -> mon_covid;
            $total_population1 --;
            $total_covid1 --;
        }

        if($barangay != $oldbarangay){
            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");
            $updatepopulation1 = Db::update("UPDATE `monitoring` SET `population` = '$total_population1' WHERE `monitoring`.`mon_id` = $id_population1");
            $upinfant = Db::update("UPDATE `monitoring` SET `mon_covid` = '$total_covid' WHERE `monitoring`.`mon_id` = $id_population");
            $upinfant1 = Db::update("UPDATE `monitoring` SET `mon_covid` = '$total_covid1' WHERE `monitoring`.`mon_id` = $id_population1");
        }
        $updatepopulationvalue = DB::update("UPDATE `populationperbarangay` SET `name` = '$name', `gender` = '$gender', `age` = '$age', `barangay` = '$barangay' WHERE `populationperbarangay`.`id` = $_myid;");

        if($updatemydata){
            return redirect('/monitoring')->with('success', 'Data Updated Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function editmanualaddpopulation($id,$name,$age,$gender,$barangay,$date){
        return redirect('/monitoring')->with(['did' => $id,'name'=>$name,'age'=> $age,'gender'=>$gender,'barangay'=>$barangay,'date'=>$date]);
    }
    public function editinfants($id,$name,$bdate,$gender,$barangay,$date,$category,$parents_contact_number,$birth_place,$father_name,$mother_name,$infant_number){
        return redirect('/monitoring')->with(['iid' => $id,'iname'=>$name,'ibdate'=> $bdate,'igender'=>$gender,'ibarangay'=>$barangay,'idate'=>$date,'icategory'=>$category,'iparents_contact_number'=>$parents_contact_number,'ibirth_place'=>$birth_place,'ifather_name'=>$father_name,'imother_name'=>$mother_name,'iinfant_number'=>$infant_number]);
    }
    public function editpwd($id,$name,$bdate,$gender,$barangay,$date,$pwd_num,$contact,$birthplace,$ecp_name,$ecp_number,$email,$disability_type,$bloodtype,$treatment,$diagnosis,$number_checkups){
        return redirect('/monitoring')->with(['pid' => $id,'pname'=>$name,'pbdate'=> $bdate,'pgender'=>$gender,'pbarangay'=>$barangay,'pdwate'=>$date,'pwd_num'=>$pwd_num,
        'contact'=>$contact,
        'birthplace'=>$birthplace,
        'ecp_name'=>$ecp_name,
        'ecp_number'=>$ecp_number,
        'pwdemail'=>$email,	
        'disability_type'=>$disability_type,
        'bloodtype'=>$bloodtype,
        'treatment'=>$treatment,
        'diagnosis'=>$diagnosis,
        'number_checkups'=>$number_checkups	
    ]);
    }
    public function editcovid($id,$name,$bdate,$gender,$barangay,$date,$category){
        return redirect('/monitoring')->with(['cid' => $id,'cname'=>$name,'cbdate'=> $bdate,'cgender'=>$gender,'cbarangay'=>$barangay,'cdate'=>$date,'ccategory'=>$category]);
    }
    public function addinfant(Request $request){
        $request->validate([
            'infant_name' => 'required',
            'infant_bdate' => 'required',
            'infant_barangay' => 'required',
            'date' => 'required',
            'infant_gender' => 'required',
            'infant_number' => 'required',
            'mother_name' => 'required',
            'father_name' => 'required',
            'birth_place' => 'required',
            'parents_contact_number' => 'required',
            'infant_category' => 'required'
        ]);

        $name = $request->input('infant_name');
        $bdate = $request->input('infant_bdate');
        $gender = $request->input('infant_gender');
        $Barangay = $request->input('infant_barangay');
        $date = $request->input('date');
        $infant_number = $request->input('infant_number');
        $mother_name = $request->input('mother_name');
        $father_name = $request->input('father_name');
        $birth_place = $request->input('birth_place');
        $parents_contact_number = $request->input('parents_contact_number');
        $infant_category = $request->input('infant_category');

        $total_population = 0;
        $total_infant = 0;
        $id_population = 0;

        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        $infant = DB::insert("INSERT INTO `infants` (
            `id`, 
            `fullname`, 
            `bdate`, 
            `gender`, 
            `barangay`, 
            `date`,
            `infant_number`,
            `mother_name`,
            `father_name`,
            `birth_place`,
            `parents_contact_number`,
            `category`
        ) 
        VALUES (
            NULL, 
            '$name', 
            '$bdate', 
            '$gender', 
            '$Barangay',
            '$date',
            '$infant_number',
            '$mother_name',
            '$father_name',
            '$birth_place',
            '$parents_contact_number',
            '$infant_category'
        )");

        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_infant = $item -> mon_infant;
            $total_population ++;
            $total_infant ++;
        }

        $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");
        $updateinfant = Db::update("UPDATE `monitoring` SET `mon_infant` = '$total_infant' WHERE `monitoring`.`mon_id` = $id_population");
        if($updatepopulation){
            return redirect('/monitoring')->with('success', 'New Data Added Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function manualaddpopulation(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'barangay' => 'required',
            'date' => 'required',
            'gender' => 'required'
        ]);

        $name = $request->input('name');
        $age = $request->input('age');
        $date = $request->input('date');
        $gender = $request->input('gender');
        $Barangay = $request->input('barangay');

        $total_population = 0;
        $id_population = 0;

        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        $manualpapulation = DB::insert("INSERT INTO `populationperbarangay` (`id`, `name`, `gender`, `age`, `barangay`, `date`) VALUES (NULL, '$name', '$gender', '$age', '$Barangay','$date')");

        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_population ++;
        }

        $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");
        if($updatepopulation){
            return redirect('/monitoring')->with('success', 'New Data Added Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function seniorcitizen(Request $request){
        $request->validate([
            'sname' => 'required',
            'sage' => 'required',
            'sbarangay' => 'required',
            'sdate' => 'required',
            'sgender' => 'required'
        ]);

        $name = $request->input('sname');
        $age = $request->input('sage');
        $date = $request->input('sdate');
        $gender = $request->input('sgender');
        $Barangay = $request->input('sbarangay');

        $total_senior = 0;
        $id_population = 0;

        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        $manualpapulation = DB::insert("INSERT INTO `senior` (`id`, `name`, `gender`, `age`, `barangay`, `date`) VALUES (NULL, '$name', '$gender', '$age', '$Barangay','$date')");

        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_senior = $item -> senior;
            $total_senior ++;
        }

        $updatepopulation = Db::update("UPDATE `monitoring` SET `senior` = '$total_senior' WHERE `monitoring`.`mon_id` = $id_population");
        if($updatepopulation){
            return redirect('/monitoring')->with('success', 'New Data Added Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function addmonitoring(Request $request){
        $request->validate([
            'population' => 'required|numeric',
            'barangay' => 'required',
            'infants' => 'required|numeric',
            'pwd' => 'required|numeric',
            'dateuploaded' => 'required',
            'senior_citizen' => 'required',
            'covid' => 'required|numeric'
        ]);

        $barangay = $request->input('barangay');
        $population = $request->input('population');
        $infants = $request->input('infants');
        $pwd = $request->input('pwd');
        $covid = $request->input('covid');
        $senior_citizen = $request->input('senior_citizen');
        $date = $request->input('dateuploaded');

        $insertmonitor = DB::insert("INSERT INTO `monitoring` (`mon_id`, `mon_image`, `mon_name`, `mon_covid`, `mon_infant`, `mon_pwds`, `population`, `senior`, `under_monitoring`,'on_quarantine', `date`) VALUES (NULL, '', '$barangay', '$covid', '$infants', '$pwd', '$population','$senior_citizen','0','0, '$date')");

        if($insertmonitor){
            return redirect('/monitoring')->with('success', 'New Data Added Successfully!');
        }else{
            return redirect('/monitoring');
        }
    }
    public function delmonitor($id){
        $delmonitoring = DB::delete("DELETE FROM monitoring WHERE mon_id = $id");

        if($delmonitoring){
            return redirect('/monitoring')->with('success', 'Data Deleted Successfully!');
        }else{
            return redirect('/monitoring');
        }
        return($id);
    }
    public function delmonitormanual($id,$barangay){
        $delmonitoring = DB::delete("DELETE FROM `populationperbarangay` WHERE `populationperbarangay`.`id` = $id");
        $Barangay = $barangay;
        $total_population = 0;
        $id_population = 0;
        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        
        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_population --;
        }
        
        $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");

        if($delmonitoring){
            return redirect('/monitoring')->with('success', 'Data Deleted Successfully!');
        }else{
            return redirect('/monitoring');
        }
        return($id);
    }
    
    public function delinfants($id,$barangay){
        $delmonitoring = DB::delete("DELETE FROM `infants` WHERE `infants`.`id` = $id");
        $Barangay = $barangay;
        $total_population = 0;
        $total_infants = 0;
        $id_population = 0;
        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        
        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_infant = $item -> mon_infant;
            $total_infant --;
            $total_population --;
        }
        
        $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population' WHERE `monitoring`.`mon_id` = $id_population");
        $updatepopulation1 = Db::update("UPDATE `monitoring` SET `mon_infant` = '$total_infant' WHERE `monitoring`.`mon_id` = $id_population");

        if($delmonitoring){
            return redirect('/monitoring')->with('success', 'Data Deleted Successfully!');
        }else{
            return redirect('/monitoring');
        }
        return($id);
    }
    public function delpwd($id,$barangay){
        $delmonitoring = DB::delete("DELETE FROM `pwd` WHERE `pwd`.`id` = $id");
        
        $Barangay = $barangay;
        $total_population = 0;
        $total_pwd = 0;
        $id_population = 0;
        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        
        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_pwd = $item -> mon_pwds;
            $total_pwd --;
            $total_population --;
        }
        
        $updatepopulation1 = Db::update("UPDATE `monitoring` SET `mon_pwds` = '$total_pwd' WHERE `monitoring`.`mon_id` = $id_population");
        
        if($delmonitoring){
            return redirect('/monitoring')->with('success', 'Data Deleted Successfully!');
        }else{
            return redirect('/monitoring');
        }
        return($id);
    }
    public function delcovid($id,$barangay){
        $delmonitoring = DB::delete("DELETE FROM `covidcase` WHERE `covidcase`.`id` = $id");
        
        $Barangay = $barangay;
        $total_population = 0;
        $total_covid = 0;
        $id_population = 0;
        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        
        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_population = $item -> population;
            $total_covid = $item -> mon_covid;
            $total_covid --;
            $total_population --;
        }
        
        $updatepopulation1 = Db::update("UPDATE `monitoring` SET `mon_covid` = '$total_covid' WHERE `monitoring`.`mon_id` = $id_population");
        
        if($delmonitoring){
            return redirect('/monitoring')->with('success', 'Data Deleted Successfully!');
        }else{
            return redirect('/monitoring');
        }
        return($id);
    }
    public function addnewpwd(Request $request){

        $request->validate([
            'pwd_name' => 'required',
            'pwd_gender' => 'required',
            'pwd_bdate' => 'required',
            'date' => 'required',
            'pwd_number' => 'required',
            'contact_number' => 'required|min:11',
            'birth_place' => 'required',
            'emergency_contact_person' => 'required',
            'emergency_contact_number' => 'required:min:11',
            'pwdemail' => 'required',
            'disability_type' => 'required',
            'Number_of_checkups' => 'required',
            'diagnosis' => 'required',
            'treatment' => 'required'
        ]);

        $name = $request->input('pwd_name');
        $gender = $request->input('pwd_gender');
        $bdate = $request->input('pwd_bdate');
        $barangay = $request->input('pwd_barangay');
        $date = $request->input('date');
        
        $pwd_num = $request->input('pwd_number');
        $contact_number = $request->input('contact_number');
        $birth_place = $request->input('birth_place');
        $emergency_contact_person = $request->input('emergency_contact_person');
        $emergency_contact_number = $request->input('emergency_contact_number');
        $pwdemail = $request->input('pwdemail');
        $disability_type = $request->input('disability_type');
        $blood_type = $request->input('blood_type');
        $Number_of_checkups = $request->input('Number_of_checkups');
        $diagnosis = $request->input('diagnosis');
        $treatment = $request->input('treatment');

        $find = 0;
        $total_population = 0;
        $total_pwds = 0;
        $id_population = 0;

        $datapopulation = DB::select("SELECT * FROM `populationperbarangay` WHERE name = '$name' AND age = '$bdate' AND gender = '$gender' AND barangay = '$barangay'");
        
        foreach($datapopulation as $item){
            $find = 1;
        }
        
        if(!$find){
            $manualpapulation = DB::insert("INSERT INTO `populationperbarangay`
             (
                `id`,
                `name`, 
                `gender`, 
                `age`, 
                `barangay`, 
                `date`
            )
        VALUES (
            NULL,
             '$name', 
             '$gender', 
             '$bdate', 
             '$barangay',
             '$date'
        )
        ");
    
            $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$barangay'  ORDER BY mon_id DESC LIMIT  1 ");
    
            foreach($id as $item){
                $id_population = $item-> mon_id;
                $total_population = $item -> population;
                $total_pwds = $item -> mon_pwds;
                $total_population ++;
                $total_pwds ++;
            }
            

            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population',`mon_pwds` = '$total_pwds' WHERE `monitoring`.`mon_id` = $id_population");
        }
        
        $addnewpwd = DB::insert("INSERT INTO `pwd` (
            `id`, 
            `name`, 
            `bdate`, 
            `gender`, 
            `barangay`, 
            `date`,
            `pwd_num`, 
            `contact`, 
            `birthplace`, 
            `ecp_name`, 
            `ecp_number`, 
            `email`, 
            `disability_type`, 
            `bloodtype`, 
            `number_checkups`, 
            `diagnosis`, 
            `treatment`
        ) VALUES (
            NULL, 
            '$name', 
            '$bdate', 
            '$gender', 
            '$barangay',
            '$date',
            '$pwd_num',
            '$contact_number',
            '$birth_place',
            '$emergency_contact_person',
            '$emergency_contact_number',
            '$pwdemail',
            '$disability_type',
            '$blood_type',
            '$Number_of_checkups',
            '$diagnosis',
            '$treatment'
            )");

        return redirect('/monitoring')->with('success', 'New Data added Successfully!');

    }
    public function addnewcovid(Request $request){

        $request->validate([
            'covid_name' => 'required',
            'covid_gender' => 'required',
            'covid_bdate' => 'required',
            'date' => 'required',
            'covid_barangay' => 'required',
            'covid_category' => 'required'
        ]);

        $name = $request->input('covid_name');
        $gender = $request->input('covid_gender');
        $date = $request->input('date');
        $bdate = $request->input('covid_bdate');
        $barangay = $request->input('covid_barangay');
        $covid_category = $request->input('covid_category');
        
        $find = 0;
        $total_population = 0;
        $total_covid = 0;
        $under_monitoring = 0;
        $on_uarantine = 0;
        $id_population = 0;


        $datapopulation = DB::select("SELECT * FROM `populationperbarangay` WHERE name = '$name' AND age = '$bdate' AND gender = '$gender' AND barangay = '$barangay'");
        
        foreach($datapopulation as $item){
            $find = 1;
        }
        
        if(!$find){
            $manualpapulation = DB::insert("INSERT INTO `populationperbarangay` (`id`, `name`, `gender`, `age`, `barangay`, `date`) VALUES (NULL, '$name', '$gender', '$bdate', '$barangay', '$date')");

            
    
            $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$barangay'  ORDER BY mon_id DESC LIMIT  1 ");
    
            foreach($id as $item){
                $id_population = $item-> mon_id;
                $total_population = $item -> population;
                $total_covid = $item -> mon_covid;
                $under_monitoring= $item -> under_monitoring	;
                $on_uarantine= $item -> on_quarantine	;
                $total_population ++;
                $on_uarantine ++;
                $total_covid ++;
                $under_monitoring ++;
            }
    
        }
        if($covid_category == 'Confirmed case'){
            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population',`mon_covid` = '$total_covid' WHERE `monitoring`.`mon_id` = $id_population");
        }
        else if($covid_category == 'Under Monitoring'){
            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population',`under_monitoring` = '$under_monitoring' WHERE `monitoring`.`mon_id` = $id_population");
        }
        else if($covid_category == 'On Quarantine'){
            $updatepopulation = Db::update("UPDATE `monitoring` SET `population` = '$total_population',`on_quarantine` = '$on_uarantine' WHERE `monitoring`.`mon_id` = $id_population");
        }

        $addnewpwd = DB::insert("INSERT INTO `covidcase` (`id`, `name`, `age`, `gender`, `barangay` , `date`, `category`) VALUES (NULL, '$name', '$bdate', '$gender', '$barangay','$date','$covid_category')");

        return redirect('/monitoring')->with('success', 'New Data added Successfully!');

    }
    public function moveinfants($id,$barangay,$gender,$bdate,$fullname,$date){
        $moveddata = DB::delete("DELETE FROM `infants` WHERE `infants`.`id` = $id");
        $Barangay = $barangay;
        $total_infants = 0;
        $id_population = 0;
        $id = DB::select("SELECT * FROM `monitoring` WHERE mon_name = '$Barangay'  ORDER BY mon_id DESC LIMIT  1 ");
        
        foreach($id as $item){
            $id_population = $item-> mon_id;
            $total_infant = $item -> mon_infant;
            $total_infant --;
        }
        
        $manualpapulation = DB::insert("INSERT INTO `populationperbarangay` (`id`, `name`, `gender`, `age`, `barangay` , `date`) VALUES (NULL, '$fullname', '$gender', '$bdate', '$barangay','$date')");
        $updatepopulation1 = Db::update("UPDATE `monitoring` SET `mon_infant` = '$total_infant' WHERE `monitoring`.`mon_id` = $id_population");

        if($moveddata){
            return redirect('/monitoring')->with('success', 'Data Moved Successfully!');
        }else{
            return redirect('/monitoring');
        }
        return($id);
    }
    public function editomonitorin($id, $name, $population, $infant,$pwd,$covid, $date,$senior){
        return redirect('/monitoring')->with(['id' => $id,'name' => $name,'population' => $population,'infant' => $infant,'pwd' => $pwd,'covid' => $covid,'date' => $date,'senior'=>$senior]);
    }
    public function adminappointment(){

        $date =  date('Y-m-d');
        $allappointment = DB::select(" SELECT * FROM appointment");
        $todayappointment = DB::select(" SELECT * FROM appointment WHERE date = '$date'");

        return view('admin.admin-appointment', ['appointment'=> $allappointment, 'todayappointment' => $todayappointment]);
    }

    public function delappoinment($id){
        $delapp = DB::delete("DELETE FROM appointment WHERE id = $id");
        if($delapp){
            return redirect('/adminappointment')->with('success', 'Appointment Deleted Successfully!');
        }else{
            return redirect('/adminappointment');
        }
    }
    public function adminaddAppointment(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $services = $request->input('services');
        $date = $request->input('date');
        $phone = $request->input('phone');
        $message = $request->input('message');

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'email' => 'required',
            'phone' => 'required|digits:11',
            'message' => 'required'
        ]);

        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $clength = strlen($char);
        $randomString = '';

        for ($i = 0; $i < 32; $i++) {
            $randomString .= $char[rand(0, $clength - 1)];
        }

        $insertAppointment = DB::insert("INSERT INTO `appointment` (`id`, `name`, `date`, `service`, `contact`, `message`, `email`, `status`, `qrcode`) VALUES (NULL, '$name', '$date', '$services', '$phone', '$message', '$email', 'pending','$randomString')");

        if($insertAppointment){
            return redirect('/adminappointment')->with('success','Appointment Successfuly Added!');
        }else{
            return redirect('/adminappointment');
        }
    }
    public function todayappointment(){
        $date =  date('Y-m-d');
        $todayappointment = DB::select(" SELECT * FROM appointment WHERE date = '$date'");

        return view('admin.todayappointment', ['todayappointment' => $todayappointment]);
    }
    public function listofusers(){

        $listofusers = DB::select(" SELECT * FROM userlogin");

        return view('admin.userlist', ['listofusers' => $listofusers]);
    }
    public function setasadmin($id){
        $setasadmin = DB::update("UPDATE userlogin SET usertype = 'admin' WHERE userlogin_id = $id");
        if($setasadmin){
            return redirect('/listofusers')->with('success','User Set as Admin');
        }
    }
    public function setasuser($id){
        $setasadmin = DB::update("UPDATE userlogin SET usertype = 'user' WHERE userlogin_id = $id");
        if($setasadmin){
            return redirect('/listofusers')->with('success','User Set as Admin');
        }
    }
    public function banned($id){
        $setasadmin = DB::update("UPDATE userlogin SET usertype = 'banned' WHERE userlogin_id = $id");
        if($setasadmin){
            return redirect('/listofusers')->with('success','User Set as Admin');
        }
    }
    public function teams(){
        $allTeams = DB::select("SELECT * FROM teams");
        return view('admin.admin-teams',['allTeams'=> $allTeams]);
    }
    public function saveteams(Request $request){

        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
            'phone' => 'required|numeric|digits:11',
            'email' => 'required',
            'fb' => 'required'
        ]);
        
        $name = $request->input('name');
        $spe = $request->input('specialization');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $fb = $request->input('fb');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('teams_image/',$filename);

            $teams = DB::insert("INSERT INTO `teams` (`teams_ID`, `name`, `specialization`, `contact`, `email`, `facebook`, `image`) VALUES (NULL, '$name', '$spe', '$phone', '$email', '$fb', '$filename');");

            if($teams){
                return redirect('/teams')->with('success', 'New Teams Added Successfully!');
            }

        }else{
            return redirect('/teams')->with('failed', 'Please upload image in the form!');
        }
    }
    public function viewteams($id,$name,$image,$spe,$contact,$email,$facebook){
        return redirect('/teams')->with(['id'=> $id, 'name'=>$name, 'image'=>$image, 'spe'=>$spe, 'contact'=>$contact, 'facebook'=>$facebook, 'email'=>$email]);
    }
    public function editteams($id,$name,$image,$spe,$contact,$email,$facebook){
        return redirect('/teams')->with(['editid'=> $id, 'editname'=>$name, 'editimage'=>$image, 'editspe'=>$spe, 'editcontact'=>$contact, 'editfacebook'=>$facebook, 'editemail'=>$email]);
    }
    public function updateteams(Request $request){
        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
            'phone' => 'required|numeric|digits:11',
            'email' => 'required',
            'fb' => 'required'
        ]);
        
        $name = $request->input('name');
        $spe = $request->input('specialization');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $fb = $request->input('fb');
        $id = $request->input('id');


        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('teams_image/',$filename);

            $old_image = DB::select("SELECT * FROM teams WHERE teams_ID = $id");
            unlink('teams_image/'.$old_image[0] -> image);

            $update_teams = DB::update("UPDATE teams set name = '$name', specialization = '$spe', contact = '$phone', email = '$email', facebook = '$fb',image = '$filename' WHERE teams_ID = $id");

            if($update_teams){
                return redirect('/teams')->with('success', 'Teams Updated Successfully!');
            }else{
                return redirect('/teams');
            }
        }
        else{
            $update_teams = DB::update("UPDATE teams set name = '$name', specialization = '$spe', contact = '$phone', email = '$email', facebook = '$fb' WHERE teams_ID = $id");

            if($update_teams){
                return redirect('/teams')->with('success', 'Teams Updated Successfully!');
            }else{
                return redirect('/teams');
            }
        }
    }
    public function teamsdelete($id){

        $old_image = DB::select("SELECT * FROM teams WHERE teams_ID = $id");
        unlink('teams_image/'.$old_image[0] -> image);

        $deeleteTeams = DB::delete("DELETE FROM teams WHERE teams_ID = $id");

        if($deeleteTeams){
            return redirect('/teams')->with('success', 'Teams Deleted Successfully!');
        }else{
            return redirect('/teams');
        }
    }
    public function medicalrecord(){
        $Teams = DB::select("SELECT * FROM teams");
        $medrecordall = DB::select("SELECT * FROM `med_rec`");
        $medrecord = DB::select("SELECT email,COUNT(email) AS Records FROM `med_rec` GROUP BY email");
        return view ('admin.medrec',['medrecord' => $medrecord, 'Teams' =>$Teams, 'medrecordall' =>$medrecordall]);
    }
    public function viewmedicalrecord($email){
        $Teams = DB::select("SELECT * FROM teams");
        $name = DB::select("SELECT * FROM userlogin  WHERE email = '$email'");
        $medicalrecordof = DB::select("SELECT * FROM med_rec WHERE email = '$email'");
        $dp = DB::select("SELECT * FROM `userimage` WHERE useremail = '$email'");
        $userimage = "";
        foreach($dp as $picture){
            $imagefind = 1;
        }
        if($imagefind){
            $userimage = $picture -> imagename;
        }
        return view('admin.viewmedicalrecord',['dp' => $userimage,'medicalrecordof' => $medicalrecordof ,'name' => $name , 'Teams' => $Teams]);
    }
    public function delsinglemedrec(Request $request){

        $id = $request->input('id');

        $delmedrec = DB::delete("DELETE FROM med_rec WHERE email = '$id'");
        
        if($delmedrec){
            return redirect('/medicalrecord')->with('success','Medical record Successfuly DELETED!');
        }else{
            return redirect('/medicalrecord');
        }
    }
    public function addmedicalrecord(Request $request){
        $request->validate([
           'email' => 'required',
           'date_admited' => 'required',
           'med_info' => 'required',
           'med_rec' => 'required',
           'contact' => 'required',
           'address' => 'required',
        ]);
        
        $email = $request->input('email');
        $date_admited = $request->input('date_admited');
        $date_released = $request->input('date_released');
        $med_info = $request->input('med_info');
        $med_rec = $request->input('med_rec');
        $contact = $request->input('contact');
        $address = $request->input('address');
        $doctor = $request->input('doctor');
        $weight = $request->input('weight');
        $height = $request->input('height');

        $addmedrecord = DB::insert("INSERT INTO `med_rec` (`id`, `email`, `doctor`, `date_in`, `date_out`, `med_information`, `med_pres`, `contact`, `address`, `weight`, `height`) VALUES (NULL, '$email', '$doctor', '$date_admited', '$date_released', '$med_info', '$med_rec', '$contact', '$address', '$weight', '$height')");
        if($addmedrecord){
            return redirect('/medicalrecord')->with('success','Medical record Successfuly Added!');
        }else{
            return redirect('/medicalrecord');
        }
    }
    public function deletewarningmedicalrecord($id){
        return redirect('/medicalrecord')->with('id',$id);
    }
    public function editmedicalrecord($id, $email, $doctor,$weight,$height,$medinfo,$medpres,$contact,$address,$in){
        return redirect("/viewmedicalrecord/$email")->with('id',$id)->with('docotr',$doctor)->with('weight', $weight)->with('height' ,$height)->with('medinfo',$medinfo)->with('medpres',$medpres)->with('contact',$contact)->with('address',$address)->with('in',$in);
    }
    public function adminAbout(){
        $about = DB::select("SELECT * FROM about");
        return view('admin.rhu-about',['about' => $about]);
    }
    public function saveadminAbout(Request $request){

        $subject = $request->input('subject');
        $title = $request->input('title');
        

        if($request->hasfile('image')){
            
            $old_image = DB::select("SELECT * FROM about");
            unlink('about_image/'.$old_image[0] -> about_image);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('about_image/',$filename);
        

            $update = DB::update('update about set about_image = ?, title= ?, about_details = ? where about_ID = 1',[$filename, $title, $subject]);
            if($update){
                return redirect('/adminAbout')->with('success', 'About Data Updated Successfully!');
            }
            else{
                return ($filename.'hahah');
            }
        }
        else{
            $update = DB::update('update about set  title= ?, about_details = ? where about_ID = 1',[$title, $subject]);
            if($update){
                return redirect('/adminAbout')->with('success', 'About Data Updated Successfully!');
            }
            else{
                return redirect('/adminAbout');
            }
        }
    }
    public function rhunavigationdetails(){
        $main_info = DB::select("SELECT * FROM main_info");
        $rhusched = DB::select("SELECT * FROM rhusched");
        return view('admin.rhu-navigation-details',['rhusched'=>$rhusched,'main_info'=>$main_info]);
    }
    public function saverhunavigationdetails(Request $request){
        $validate = $request->validate([
        'phone' => 'required|numeric|digits:11',
        'sched' => 'required',
        'sched1' => 'required',
        'sched2' => 'required',
        'email' => 'required',
    ]);

    $phone = $request->input('phone');
    $sched = $request->input('sched');
    $sched1 = $request->input('sched1');
    $sched2 = $request->input('sched2');
    $email = $request->input('email');

        if($validate){
            $insert = DB::update("UPDATE main_info set 	contact = '$phone', sched = '$sched', email= '$email' WHERE main_ID = 1");
            $sched = DB::update("UPDATE `rhusched` SET `date` = '$sched' WHERE `rhusched`.`id` = 1");
            $sched1 = DB::update("UPDATE `rhusched` SET `date` = '$sched1' WHERE `rhusched`.`id` = 2");
            $sched2 = DB::update("UPDATE `rhusched` SET `date` = '$sched2' WHERE `rhusched`.`id` = 3");
            if($insert || $ched || $sched1 ||$sched2){
                return redirect('rhunavigationdetails')->with('success', 'Information Updated Successfully!');
            }
            else{
                return redirect('rhunavigationdetails');
            }
        }
    }
    public function vaccination(){
        $med_inventory = DB::select("SELECT * FROM vaccination ORDER BY vac_id DESC LIMIT 1");
        $vac = DB::select("SELECT * FROM vaccination");
        $notvac = DB::select("SELECT Not_Vaccinated	 FROM vaccination ORDER BY vac_id DESC LIMIT 1");
        $data = "";
        foreach($med_inventory as $val){
            $data.= "['First Dose',".$val->first_dose."],['Second Dose',".$val->second_dose."],['Booster',".$val->booster."],['Not Vaccinated',".$val->Not_Vaccinated."]";
        }
        return view('admin.vaccination',['data' => $data,'med_inventory' => $med_inventory,'vac' => $vac, 'notvac' => $notvac]);
    }
    public function deletevaccine($id){
        $delvac = DB::delete("DELETE FROM vaccination WHERE vac_id =$id ");
        if($delvac){
            return redirect('/vaccination')->with('success', 'Data DELETED Successfully!');
        }else{
            return redirect('/vaccination')->with('success', 'Please try again Successfully!');
        }
    }
    public function editvaccine($id, $notvac, $first, $second,$booster,$date){
        return redirect('/vaccination')->with(['id' => $id, 'notvac' =>$notvac, 'first' => $first, 'second' =>$second,'booster'=>$booster,'date'=>$date ]);
    }
    public function editvaccination(Request $request){

        $request->validate([
            'first_dose' => 'required',
            'second_dose' => 'required',
            'booster_shot' => 'required',
            'date' => 'required'
        ]);

        $id = $request->input('id');
        $novac = $request->input('Not_vaccinated');
        $fdose = $request->input('first_dose');
        $sdose = $request->input('second_dose');
        $bshot = $request->input('booster_shot');
        $date = $request->input('date');

        $vaccination = DB::update("UPDATE vaccination SET 	Not_Vaccinated = '$novac',  first_dose = '$fdose', second_dose = '$sdose', booster = '$bshot', date = '$date' WHERE vac_id = $id ");

        if($vaccination){
            return redirect('/vaccination')->with('success', 'Data Updated Successfully!');
        }else{
            return redirect('/vaccination')->with('success', 'Please try again Successfully!');
        }
    }
    public function addVaccination(Request $request){

        $request->validate([
            'first_dose' => 'required',
            'second_dose' => 'required',
            'booster_shot' => 'required',
            'date' => 'required'
        ]);

        $novac;
        $fdose = $request->input('first_dose');
        $sdose = $request->input('second_dose');
        $bshot = $request->input('booster_shot');
        $date = $request->input('date');
        $vac = DB::select("SELECT * FROM vaccination ORDER BY vac_id DESC LIMIT 1");

        foreach($vac as $item){
            $novac = $item -> Not_Vaccinated - ($fdose + $sdose + $bshot);
            $fdose += $item -> first_dose;
            $sdose += $item -> second_dose;
            $bshot += $item -> booster;
        }

        $vaccination = DB::insert("INSERT INTO vaccination VALUES(NULL,'$fdose','$sdose','$bshot','$date','$novac' )");

        if($vaccination){
            return redirect('/vaccination')->with('success', 'New Date Set Successfully!');
        }else{
            return redirect('/vaccination')->with('success', 'Please try again Successfully!');
        }
    }
    public function photos(){
        $gallery = DB::select("SELECT * FROM gallery");
        return view('admin.admin-gal',['gallery' => $gallery]);
    }
    public function savetogallery(Request $request){
        
        if($request->hasfile('image')){
            
            // $old_image = DB::select("SELECT * FROM about");
            // unlink('about_image/'.$old_image[0] -> about_image);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('gallery/',$filename);
        

            $update = DB::insert("INSERT INTO `gallery` (`id`, `name`) VALUES (NULL, '$filename');");
            if($update){
                return redirect('/photos')->with('success', 'Image Uloaded Successfully!');
            }
            else{
                return ($filename.'hahah');
            }
        }
        return redirect('/photos');
    }
    public function deletefromgallery($id){

        $gallery = DB::select("SELECT * FROM gallery WHERE id = $id");
        unlink('gallery/'.$gallery[0] -> name);
        $deletephoto = DB::delete("DELETE  FROM gallery WHERE id = $id");

        return redirect('/photos')->with('success', 'Image Deleted Successfully!');
    }
    public function admin(){
        $med_inventory = DB::select("SELECT * FROM medicine_inventory");
        $data = "";
        $data1 = "";
        $dtobeexpired = "";
        $month = date('m');
        $year = date('Y');
        $date = "0";
        $date = $year ."-". $month;

        foreach($med_inventory as $val){
                $expiring = $val -> expdate;
                if(substr($expiring,0,-3) == $date ){
                    $dtobeexpired.= "['$val->generic_name / $val->brand_name ', $val->Stock, 'gold'],";
                }
                if($val->Stock <= $val->criticallevel){
                    $data.= "['$val->generic_name / $val->brand_name', $val->Stock, 'red'],";
                }
                else{
                    $data1.= "['$val->generic_name / $val->brand_name ', $val->Stock, 'green'],";
                }
            
        }
        return view('admin.med',['med_inventory'=> $med_inventory,'data' => $data, 'data1' => $data1,'dtobeexpired'=>$dtobeexpired]);
    }
    public function viewmedicine($id,$bn,$gn,$stocks,$bno,$ln,$cl,$expdate,$des,$grams) {

        return redirect('/admin')->with(['id' => $id,'bn' => $bn,'gn' => $gn,'stocks' => $stocks,'bno' => $bno,'ln' => $ln,'cl' => $cl,'expdate' => $expdate,'des' => $des, 'grams' => $grams]);
    }
    public function viewmedicine1($id,$bn,$gn,$stocks,$bno,$ln,$cl,$expdate,$des,$grams) {
        return redirect('/admin')->with(['aid' => $id,'abn' => $bn,'agn' => $gn,'astocks' => $stocks,'abno' => $bno,'aln' => $ln,'acl' => $cl,'aexpdate' => $expdate,'ades' => $des, 'agrams' => $grams]);
    }
    public function givingmedicine(Request $request){
        $request->validate([
            'givingmed' => 'required'
        ]);

        $id = $request->input('updateid');
        $givingmed = $request->input('givingmed');
        $stocks = $request->input('stocks');

        $stocks -= $givingmed;

        if($givingmed < $stocks){
            $updatemedstocks = DB::update("UPDATE `medicine_inventory` SET `Stock` = '$stocks' WHERE `medicine_inventory`.`med_ID` = $id");
            if($updatemedstocks){
                return redirect('/admin')->with('success', 'giving Midicine is Successful');
            }
        }else{
            return redirect('/admin')->with('danger', 'insufficient Stocks of medicine');
        }

        return($stocks);

    }

    public function updatemedicine(Request $request){

        $updateid = $request->input('updateid');
        $gn = $request->input('gn');
        $bn = $request->input('bn');
        $stocks = $request->input('stocks');
        $ln = $request->input('ln');
        $bno = $request->input('bno');
        $grams = $request->input('grams');
        $expdate = $request->input('expdate');
        $cl = $request->input('cl');
        $des = $request->input('des');
        $expdate2 = $request->input('expdate2');
        
        if($expdate2 == ""){
            $updatemedicine = DB::update('UPDATE `medicine_inventory` SET `generic_name` = ?, `brand_name` = ?, `Stock` = ?, `description` = ?, `lotno` = ?, `batchno` = ?, `grams` = ?, `criticallevel` =?   WHERE `medicine_inventory`.`med_ID` = ?',
                                                    [$gn,$bn,$stocks,$des,$ln,$bno,$grams,$cl,$updateid]);
        }
        else{
            $updatemedicine = DB::update('UPDATE `medicine_inventory` SET `generic_name` = ?, `brand_name` = ?, `Stock` = ?, `description` = ?, `lotno` = ?, `batchno` = ?, `grams` = ?, `criticallevel` =? , `expdate` = ?  WHERE `medicine_inventory`.`med_ID` = ?',
                                                    [$gn,$bn,$stocks,$des,$ln,$bno,$grams,$cl,$expdate2,$updateid]);
        }
        if($updatemedicine){
            return redirect('/admin')->with('success', 'Medicine Updated Successfully!');
        }
    }

    public function addmedicine(Request $request){

        $request->validate([
            'gn' =>'required',
            'bn' =>'required',
            'stocks' =>'required',
            'ln' =>'required',
            'bno' =>'required',
            'grams' =>'required',
            'expdate' =>'required',
            'cl' =>'required',
            'des' =>'required',
        ]);

        $gn = $request->input('gn');
        $bn = $request->input('bn');
        $stocks = $request->input('stocks');
        $ln = $request->input('ln');
        $bno = $request->input('bno');
        $grams = $request->input('grams');
        $expdate = $request->input('expdate');
        $cl = $request->input('cl');
        $des = $request->input('des');

        $checking = DB::select("SELECT * FROM medicine_inventory");
        $get = 0;
        $getid;
        $currentStocks=0;
        foreach($checking as $item){
            if(( $item-> generic_name == $gn) && ( $item-> brand_name == $bn) && ( $item-> grams == $grams) && ( $item-> expdate == $expdate) && ( $item-> lotno == $ln) && ( $item-> batchno == $bno) && ( $item-> criticallevel == $cl)){
                $get = 1;
                $getid = $item -> med_ID;
                $currentStocks += $stocks;
                $currentStocks += $item-> Stock;
            }
        }
        if($get == 0){
            $insertmed = DB::insert("INSERT INTO `medicine_inventory` (`med_ID`, `generic_name`, `brand_name`, `Stock`, `expdate`, `description`, `lotno`, `batchno`, `grams`, `criticallevel`)
                                                        VALUES (NULL, '$gn', '$bn', '$stocks', '$expdate', '$des', '$ln', '$bno', '$grams', '$cl')");
        }
        else{
            $update = DB::update("UPDATE `medicine_inventory` SET `Stock` = '$currentStocks' WHERE `medicine_inventory`.`med_ID` = $getid");
        }
            return redirect('/admin')->with('success', 'New Medicine added Successfully!');
    }
    public function delmedicine($id){
        $deletemedicine = DB::delete("DELETE FROM medicine_inventory WHERE med_ID = $id");
        if($deletemedicine){
            return redirect('/admin')->with('success', 'Medicine Deleted Successfully!');
        }
    }
    public function boards(){
        $boards = DB::select("SELECT * FROM boards");
        return view('admin.boards',['boards' => $boards]);
    }
    public function updateboards(Request $request){

        $t1 = $request->input('t1');
        $t2 = $request->input('t2');
        $t3 = $request->input('t3');
        $t4 = $request->input('t4');
        $c1 = $request->input('c1');
        $c2 = $request->input('c2');
        $c3 = $request->input('c3');
        $c4 = $request->input('c4');

        $updateBoards = DB::update('UPDATE `boards` SET `t1` = ?, `t2` = ?, `t3` = ?, `t4` = ?, `c1` = ?, `c2` = ?, `c3` = ?, `c4` = ? WHERE `boards`.`ID` = 1',[$t1, $t2,$t3,$t4,$c1,$c2,$c3,$c4]);
        if($updateBoards){
            return redirect('/boards')->with('success', 'Boards Updated Successfully!');
        }
    }
}
