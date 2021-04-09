<?php

$link = "https://1drv.ms/u/s!Al8uUhX9HLsigS-ta3tLDspUFj6e";

    

  function oneDriveLink($getUrl) {

      

     $headers = get_headers($getUrl, 1);

     $url = $headers['Location'];

     $resid0 = explode("?",$url);

     $resid1 = explode("=",($resid0[1]));

     $resid2 = explode("&",$resid1[1]);

     $resid = $resid2[0];

     $cid0 = explode("!",$resid);

     $cid1 = $cid0[0];

     $cid = strtolower($cid1);

     $id = urlencode($resid);

     $authkey0 = explode("&",$url);

     $authkey = $authkey0[1];

     

     $directLink = "https://onedrive.live.com/download?cid=$cid&resid=$id&$authkey";

     echo $directLink;

  } 

  $getLink = oneDriveLink($link);

?>

  <span><?php echo $getLink; ?></span><br>
