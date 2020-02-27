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
        echo file_permission($file);
        die;        
        $file_obj = fopen($file,$mode);

        fclose($file_obj);
    }
}

file_create_read('','w');