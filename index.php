<?php
$json = file_get_contents("https://exercise2json.herokuapp.com/json.php");

$data = json_decode($json,true);
$list = $data['movie'];


?>

<h1> Best Movies in 2019 </h1>

<table border="1px">
    <tr>
        <td>Title</td>
        <td>Director</td>
        <td>Writer</td>
        <td>Artist</td>
        <td>Genre</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['title'];?></td>
        <td><?php echo $value['director'];?></td>
        <td><?php echo $value['writer'];?></td>
        <td><?php echo $value['artist'];?></td>
        <td><?php echo $value['genre'];?></td>
    </tr>
<?php
}
?>
</table>
