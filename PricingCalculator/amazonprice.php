<?php

$_POST['data'] = json_decode(file_get_contents('php://input'));

$data = ['refer'=>0,'closing'=>0,'shipping'=>0,'rcs'=>0,'gst'=>0,'charges'=>10,'amount'=>0];
$data['refer'] = $_POST['data']->price*0.02;
$data['closing'] =  $_POST['data']->price*0.03;
$data['shipping'] = $_POST['data']->price*0.1;
$data['gst'] = 18;
$data['rcs'] = $data['refer'] + $data['closing'] + $data['shipping'];
$data['charge'] = $data['rcs'] + $data['rcs']*18/100;
$data['amount'] = $_POST['data']->price - ($data['rcs'] + $data['charges']);

echo json_encode($data);
