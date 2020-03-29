<?php
//例外処理
try{
    $db=new PDO('mysql:dbname=heroku_270dbc98709757e;host=us-cdbr-iron-east-01.cleardb.net;charset=utf8','bf10aea5839f98','28179772');
}catch(PDOException $e){
    print('DB接続エラー:'.$e->getMessage());
}