<?php
$json = file_get_contents("https://kheihjson.herokuapp.com/json.php");
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
        <td><?php echo $value['mov_title'];?></td>
        <td><?php echo $value['mov_director'];?></td>
        <td><?php echo $value['mov_writer'];?></td>
        <td><?php echo $value['mov_artist'];?></td>
        <td><?php echo $value['mov_genre'];?></td>
    </tr>
<?php
}
?>
</table>
