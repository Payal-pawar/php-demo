<?php

function validation_data($data){
    if(!empty($data)){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    return false;
}

$data = ['user'=>"",'password'=>'','email'=>''];

if(isset($_POST['login'])){
    foreach($_POST as $k => $v){
        if($k !== 'login'){
            $data[$k] = validation_data($v);
        }
    }
}
?>
    <?php if(empty($data['email'])):?>
    <table border="1">
    <tr>
    <?php foreach($data as $k => $v):?>
    <?php if(!empty($data[$k])):?>
       <th><?=strtoupper($k)?></th>
    <?php endif; endforeach;?>
    </tr>
    <tr>
    <?php foreach($data as $k => $v):?>
    <?php if(!empty($data[$k])):?>
        <td><?=strtoupper($v)?></td>
    <?php endif; endforeach;?>
    </tr>

</table>
        <?php endif;?>