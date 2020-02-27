<?php


var_dump($_FILES['filedata']);


function uploadfile($file = ""){
    $target_dir = "img/";
    $target_file = $target_dir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $filesize = $file['size'];
    return move_uploaded_file($file['tmp_name'],$target_file);
}


function uploadinfolder($file = ""){
    $fileType = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
    $image = ['jpg','png','jpeg','gif','bitmap'];
    $doc = ['doc','docx','pdf','xls','xlsx','ppt','pptx'];
    if(in_array($fileType,$image)){
        return "img/";
    }else if(in_array($fileType,$doc)){
        return "docs/";
    }else{
        return false;
    }
}


function uploadbysize($file = ""){

    /****
     * 000-KB
     * 000000-MB
     * 000000000-GB
     */
    $size1 = 10000;
    $size2 = 15000;

    if($size2 >= $file['size'] && $file['size'] >= $size1){
        return true;
    }else{
        return false;
    }
}

function uploadfile2($file = ""){
    $target_dir = uploadinfolder($file);

    if($target_dir && uploadbysize($file)){
        $imageFileType = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        $target_file = $target_dir . basename("image.".$imageFileType);
        $filesize = $file['size'];
        return move_uploaded_file($file['tmp_name'],$target_file);
    }else{
        echo "($target_dir)Target Directory Fail to upload with size (".$file['size'].").";
    }

}
var_dump(uploadfile2($_FILES['filedata']));
// function fileupload($target_dir, $basename, $temp_name)
// {
//     $target_file = $target_dir . basename($basename);
//     if (move_uploaded_file($temp_name, $target_file)) {
//         return 1;
//     } else {
//         return 0;
//     }
// }

?>


<a href="img/image.png">
    <img src="img/image.png" alt="">
</a>