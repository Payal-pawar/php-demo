<?php
function file_permission($file = ''){
    if(empty($file)){
        return false;
    }
    /**
     * win -> linux
     */
    return substr(sprintf("%o",fileperms($file)),-4);
}

function file_create_read($file = '',$mode = '',$data = ''){
    if($mode == 'r' || $mode == 'r+'){
        if(!file_exists($file)){
            return false;
        }
        $file_obj = fopen($file,$mode);
        $filedata = fread($file_obj,filesize($file)); 
        fclose($file_obj);
        return $filedata;
    }elseif($mode == 'w' || $mode == 'w+'){      
        $file_obj = fopen($file,$mode);
        fwrite($file_obj,$data);
        fclose($file_obj);
        return true;
    }
}


function scanFolder($folder = ""){
    if(is_dir($folder)){
        $folderlist = scandir($folder);
        echo "<ul>";
        foreach($folderlist as $fol){
            if($fol == '..' || $fol == '.'){

            }else if(strpos($fol,'.')==0){
                echo "<li>".$fol . scanFolder($folder."/".$fol); "</li>";
            }else{
                echo "<li>".$fol . "</li>";
            }            
        }
        echo "</ul>";
    }
}


scanFolder('..');