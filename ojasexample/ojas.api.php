<?php

include('dbconfig.php');
switch ($_GET['action']) {
    case 'editP':
        $_POST = json_decode(file_get_contents('php://input'));
        $data = selectSingleDetail($_POST['id']);
        echo json_encode($data);
        break;
    case 'getData':
        $data = selectPersonalDetail();
        echo json_encode($data);
        return;
    default:
        $data = ['status' => 400];
        echo json_encode($data);
        return;
}

// if(isset($_GET['get'])){
//     $data = selectPersonalDetail();
//     echo json_encode($data);
//     return;
// }else{
//     $data = ['status' => 400];
//     echo json_encode($data);
//     return;
// }