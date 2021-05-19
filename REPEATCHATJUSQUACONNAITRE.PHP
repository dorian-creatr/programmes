<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8"/>
<title>mini_chat</title>
</head>
<body>
  <header>
    <form action="minichat_post.php" method="post">
    <p>
    pseudo:
    <input type="text" name="pseudo" value="<?php echo $_COOKIE['pseudo']; ?>"
    /><br/>
