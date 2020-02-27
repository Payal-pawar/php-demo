<?php
    $data = ['id'=>1,'name'=>'sumit','age'=>11,'degree'=>'BCA'];
    $headings = array_keys($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
<h1>Single Array</h1>
<table border=1>
    <tr>
    <?php for ($i=0; $i < count($headings) ; $i++) :?>
        <th><?=strtoupper($headings[$i])?></th>
    <?php endfor;?>
    </tr>
    <tr>
        <td><?=$data['id']?></td>
        <td><?=$data['name']?></td>
        <td><?=$data['age']?></td>
        <td><?=$data['degree']?></td>
    </tr>
</table>
</div>
<?php
    $data = [array('id'=>1,'name'=>'sumit','age'=>11,'degree'=> ''),
             array('id'=>2,'name'=>'demo','age'=>12)];

    $nehal = ['id'=>3,'name'=>'nehal','age'=>13,'degree'=>'BE'];
    
    array_push($data,$nehal);
    $headings = array_keys($data[0]);
?>
<div>
<h1>Multidiamentional Array</h1>
<table border=1>
    <tr>
    <?php for ($i=0; $i < count($headings) ; $i++) :?>
        <th><?=strtoupper($headings[$i])?></th>
    <?php endfor;?>
    </tr>
    <?php for ($i=0; $i < count($data) ; $i++) :?>
    <tr>
        <td><?=$data[$i]['id']?></td>
        <td><?=$data[$i]['name']?></td>
        <td><?=$data[$i]['age']?></td>
        <td><?=$data[$i]['degree']?></td>
    </tr>
    <?php endfor;?>
</table>

<ul>
    <?php for($i=0; $i < count($data) ; $i++): ?>
    <li><?=$i+1?>
        <ul>
            <?php foreach($data[$i] as $key => $value):?>
                <li><?=$key?> => <?=$value?></li>
           <?php endforeach;?>
        </ul>
    </li>
    <?php endfor;?>
</ul>
</div>

</body>
</html>