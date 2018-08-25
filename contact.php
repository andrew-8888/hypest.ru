<?php
    
    $to = "info@hypest.ru";
    $subject = "Sending from contact form";
    
    if(isset($_POST["submit"]))  
    {
        if(!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]
        +(?:.?[a-z0-9]+)?.[a-z]{2,5})$/i",trim($_POST["email"])))
        {
            $message = "<div id="message" class="error">
            The specified email does not match the format!</div>";
        }
        else
        {
            $message = "<div id="message" class="success">
            Form successfully sent!</div>";
        }
    }

?>