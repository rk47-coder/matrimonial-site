<!--0 Pending
    1 Accepted
    2 Decline
    3 Blocked
-->
<?php

  if(!isset($_COOKIE['user'])){
      header("location:index.php");
  }else{
  if(!isset($_GET['id'])){
      header("location:index.php");
  }else{
      $user_id2=$_GET['id'];
      $email=$_COOKIE['user'];
      include 'connection.php';
      $sql=mysql_query("select code from matri where email='$email'");
      if($sq=mysql_fetch_array($sql)){
          $user_id1=$sq['code'];
          
          if(mysql_query("insert into friend_req values('$user_id1','$user_id2',0,'$user_id1')")>0){
              header("location:search.php");
          }
          
      }
  }
  }?>