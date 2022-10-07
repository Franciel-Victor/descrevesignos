<?php
    if(isset($_POST['data'])):
        $data = $_POST['data'];
        $data = strtotime($data);
        echo date("d/m", $data)."<br>";
        echo var_dump($data);
    endif;
?>