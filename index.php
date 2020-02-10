<?php
$json = file_get_contents("https://exercise2json.herokuapp.com/json.php");

$data = json_decode($json,true);
$list = $data['browser'];


?>

<h1>Browsers </h1>

<table border="1px">
    <tr>
        <td>Browser Name</td>
        <td>Creator</td>
        <td>Published</td>
        <td>Programming Language</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['browser'];?></td>
        <td><?php echo $value['creator'];?></td>
        <td><?php echo $value['publish'];?></td>
        <td><?php echo $value['language'];?></td>
    </tr>
<?php
}
?>
</table>
