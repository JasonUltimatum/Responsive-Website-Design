<?php
header('Access-Control-Allow-Origin: *');
if(isset($_GET['symbol'])&&($_GET['symbol']=="AAPL")){
    $Legislator = "http://congress.api.sunlightfoundation.com/legislators?apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    // $Bills = "http://congress.api.sunlightfoundation.com/bills?apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=50";
    // $Committees = "http://congress.api.sunlightfoundation.com/committees?apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    $contents =  file_get_contents($Legislator);

    echo $contents;

}else if(isset($_GET['symbol'])&&($_GET['symbol']=="state")){
    $stateUrl="";
    if($_GET['content']!=""){
        $state = $_GET['content'];
        $stateUrl = "http://congress.api.sunlightfoundation.com/legislators?state=".$state."&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    }else{
        $stateUrl = "http://congress.api.sunlightfoundation.com/legislators?state=&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";

    }

    echo file_get_contents($stateUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="house")){
    $houseUrl = "http://congress.api.sunlightfoundation.com/legislators?chamber=house&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    echo file_get_contents($houseUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="senate")){
    $senateUrl = "http://congress.api.sunlightfoundation.com/legislators?chamber=senate&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    echo file_get_contents($senateUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="s")){
    $bioguide_id = $_GET['content'];
    $detailUrl = "http://congress.api.sunlightfoundation.com/legislators?bioguide_id=".$bioguide_id."&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="activeBill")){
    $billsUrl = "http://congress.api.sunlightfoundation.com/bills/search?history.active=true&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
    echo file_get_contents($billsUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="newBill")){
    $billsNewUrl = "http://congress.api.sunlightfoundation.com/bills/search?history.active=false&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
    echo file_get_contents($billsNewUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="houseC")){
    $commitUrl = "http://congress.api.sunlightfoundation.com/committees?chamber=house&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
    echo file_get_contents($commitUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="senateC")){
    $commitUrl = "http://congress.api.sunlightfoundation.com/committees?chamber=senate&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
    echo file_get_contents($commitUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="jointC")){
    $commitUrl= "http://congress.api.sunlightfoundation.com/committees?chamber=joint&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
    echo file_get_contents($commitUrl);
}




?>
