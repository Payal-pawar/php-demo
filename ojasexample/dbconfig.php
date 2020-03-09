<?php
defined('HOST') OR define('HOST','localhost');
defined('USER') OR define('USER','root');
defined('PASS') OR define('PASS','mysql');
defined('DB') OR define('DB','ojas');

/**
 * Mysqli -> mysql improved
 * procedural
 * object oriented
 * PDO
 */
function connection(){
    $con = null; 
    try{
        $con = mysqli_connect(HOST,USER,PASS,DB);
        return $con;
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return $con;
}

// function disconnect(){
//     try{
//         if(!empty($con)){
//             mysqli_close($con);
//         }
//     }catch(Exception $e){

//     }
// }

/**
 * CRUD - operation 
 * c - create / insert
 * r - read / select
 * u - update
 * d - delete
 */
function insertDesignation($data){
    try {
        $con = connection();

        $sql = "INSERT INTO `Designation`(`desg_id`, `desg_name`, `status`, `modified_date`) VALUES (NULL,'".$data['desg_name']."','Active',CURRENT_TIMESTAMP);";
        return mysqli_query($con,$sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return false;
}

function selectDesignation(){
    try {
        $con = connection();

        $sql = "SELECT * FROM Designation;";
        $result = mysqli_query($con,$sql);

        /**
         * mysqli_fetch_all
         * mysqli_fetch_array
         */
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return false;
}



function insertPersonalDetail($data){
    try {
        $con = connection();
        $sql = "INSERT INTO `personal_detail`(`id`, `title`, `fname`, `lname`, `fhname`, `mname`, `gender`, `dob`, `marital_status`, `category`) VALUES (NULL,'".$data['title']."','".$data['fname']."','".$data['lname']."','".$data['fhname']."','".$data['mname']."','".$data['gender']."','".$data['dob']."','".$data['marital_status']."','".$data['category']."')";
        return mysqli_query($con,$sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    return false;
}


function selectPersonalDetail(){
    try {
        $con = connection();

        $sql = "SELECT * FROM `personal_detail`";
        $result = mysqli_query($con,$sql);

        /**
         * mysqli_fetch_all
         * mysqli_fetch_array
         */
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return false;
}


function insertAddressDetail($data){
    try {
        $con = connection();
        //$sql = "INSERT INTO `address_detail`(`cid`, `user_id`, `pre_address`, `state`, `district`, `taluka`, `pincode`, `mob`, `email`, `nationality`, `status`) VALUES (NULL,'".$data[''],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])."')";
        return mysqli_query($con,$sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    return false;
}

function selectSingleDetail($id = 0){
    try {
        $con = connection();

        $sql = "SELECT * FROM `personal_detail` where id = $id";
        $result = mysqli_query($con,$sql);

        /**
         * mysqli_fetch_all
         * mysqli_fetch_array
         */
        $data = mysqli_fetch_array($result,MYSQLI_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return false;
}


function updatePersonalDetail($data,$id){
    try{
        $con = connection();
        $sql = "UPDATE `personal_detail` SET `title` = '".$data['title']."',`fname` = '".$data['fname']."',`lname` = '".$data['lname']."',`fhname` = '".$data['fhname']."',`mname` = '".$data['mname']."',`gender` = '".$data['gender']."',`dob` = '".$data['dob']."',`marital_status` = '".$data['marital_status']."',`category` = '".$data['category']."'WHERE id = $id";
        $result = mysqli_query($con,$sql);

        return $result;
    }catch(Exception $e){

    }
    return false;
}