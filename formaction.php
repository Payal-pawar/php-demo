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

$data = ['user'=>"",'pass'=>'','email'=>''];

if(isset($_POST['login'])){
    foreach($_POST as $k => $v){
        if($k !== 'login'){
            $data[$k] = validation_data($v);
        }
    }
}elseif(isset($_POST['registration'])){
    foreach($_POST as $k => $v){
        if($k !== 'registration'){
            $data[$k] = validation_data($v);
        }
    }
}
?>
<?php if(!empty($data['email'])):?>
<table border="1">
    <?php foreach($data as $k => $v):?>
    <tr>
        <th><?=strtoupper($k)?></th> 
        <td><?=$v?></td>   
    </tr>
    <?php endforeach;?>
</table>

<?php elseif(empty($data['email'])):?>
    <table border="1">
    <?php foreach($data as $k => $v):?>
    <?php if(!empty($data[$k])):?>
    <tr>
        <th><?=strtoupper($k)?></th> 
        <td><?=$v?></td>   
    </tr>
    <?php endif; endforeach;?>
</table>
<?php endif; ?>