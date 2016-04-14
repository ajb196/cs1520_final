<?php 

    if (isset($_POST["name"])) {
        $db = new mysqli("localhost","root","test","webpage_db");
        $contact = $db->query("INSERT INTO contact (name, email, message) VALUES ('" . $_POST['name'] . "','" .$_POST['email'] . "','" .$_POST['message'] . "')");
    }

 ?>