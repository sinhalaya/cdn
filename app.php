<?php

**//Gurulugomi Mobile App**

$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android= stripos($_SERVER['HTTP_USER_AGENT'],"Android");

//check if user is using ipod, iphone or ipad...
if( $iPod || $iPhone || $iPad ){
        //we send these people to Apple Store
        header('Location: https://apps.apple.com/lk/app/gurulugomi/id1462258878/'); // <-apple store link here
}else if($Android){
        //we send these people to Android Store
        header('Location: https://play.google.com/store/apps/details?id=com.treinetic.whiteshark&hl=en/'); // <-android store link here
}
**//Gurulugomi Mobile App**

?> 
