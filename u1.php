<html>
<form action="u1.php" method="POST">
Name: <input type="text" name="name"/><br/>
Textarea: <input type name="text"/>
<p><input type="submit" value=" Отправить "></p>
<?php
$name = $_POST['name'];
$textarea = $_POST['text'];
echo $name;
$posts[0] = array ("title" => 'Hello', 'Hey'); 
$posts[1] = array ("message" => 'Helloo', 'Yo Hey');
var_dump($posts);


if ($_POST) {
$posts[] = array (
'title' = $_POST['text'];
?>
</html>