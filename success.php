<?php
include "conn.php";

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
</head>
<body>
    <div class="d">

        <p class="p font-effect-emboss">Request sent succesfully!!!!</p>
        <button><a href="feed.php">continue</a></button>
    </div>
    
</body>
<style>
    body{
        font-family: "Sofia", montserrat;
        font-size: 60px;
        background-color: lightsteelblue;
    }
    .d{
        display: flex;
        flex-direction: column;
        justify-content:center;
        align-items: center;
        
        height: 70vh;
        
    }
</style>
</html>