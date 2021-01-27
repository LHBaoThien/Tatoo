<?php
$datas = $_POST;
$reponse = array(
    'message'=>'Xin chào: '.$datas['first_name']. " ".$datas['last_name']
);
echo json_encode($reponse);die;