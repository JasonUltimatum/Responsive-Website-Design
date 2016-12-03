<?php
header('Access-Control-Allow-Origin: *');
if(isset($_GET['symbol'])&&($_GET['symbol']=="AAPL")){
    $Legislator = "http://104.198.0.197:8080/legislators?apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    // $Bills = "http://104.198.0.197:8080/bills?apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=50";
    // $Committees = "http://104.198.0.197:8080/committees?apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    $contents =  file_get_contents($Legislator);

    echo $contents;

}else if(isset($_GET['symbol'])&&($_GET['symbol']=="state")){
    $stateUrl="";
    if($_GET['content']!=""){
    $state = $_GET['content'];
    $stateUrl = "http://104.198.0.197:8080/legislators?state=".$state."&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    }else{
         $stateUrl = "http://104.198.0.197:8080/legislators?state=&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";

    }

    echo file_get_contents($stateUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="house")){
    $houseUrl = "http://104.198.0.197:8080/legislators?chamber=house&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    echo file_get_contents($houseUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="senate")){
    $senateUrl = "http://104.198.0.197:8080/legislators?chamber=senate&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    echo file_get_contents($senateUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="activeBill")){
    $billsUrl = "http://104.198.0.197:8080/bills?history.active=true&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=50";
    echo file_get_contents($billsUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="newBill")){
    $billsNewUrl = "http://104.198.0.197:8080/bills?history.active=false&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=50";
    echo file_get_contents($billsNewUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="houseC")){
    $commitUrl = "http://104.198.0.197:8080/committees?chamber=house&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    echo file_get_contents($commitUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="senateC")){
    $commitUrl = "http://104.198.0.197:8080/committees?chamber=senate&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    echo file_get_contents($commitUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="jointC")){
    $commitUrl= "http://104.198.0.197:8080/committees?chamber=joint&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=all";
    echo file_get_contents($commitUrl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="bDetail")){
    $bid = $_GET['content'];
    $bdurl="http://104.198.0.197:8080/bills?bill_id=".$bid."&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
    echo file_get_contents($bdurl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="lDetail")){
    $bid = $_GET['content'];
    $ldurl="http://104.198.0.197:8080/legislators?bioguide_id=".$bid."&apikey=74b463c521c84ca5b7dd3d30ac0417f5";
    echo file_get_contents($ldurl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="5commit")){
    $bid = $_GET['content'];
    $ldurl="http://104.198.0.197:8080/committees?member_ids=".$bid."&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=5";
    echo file_get_contents($ldurl);
}else if(isset($_GET['symbol'])&&($_GET['symbol']=="5bill")){
    $bid = $_GET['content'];
    $ldurl="http://104.198.0.197:8080/bills?sponsor_id=".$bid."&apikey=74b463c521c84ca5b7dd3d30ac0417f5&per_page=5";
    echo file_get_contents($ldurl);
}
?>
