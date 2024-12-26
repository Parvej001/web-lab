<!DOCTYPE html>
<head>
    <title>Vistor Counter</title>
</head>
<style>
    body{
        background-color: crimson;
    }
    .container{
        background-color:white  ;
        text-align:"center";
        padding:20px;
        
    }
</style>
<body>
    <div class="container">
    <h1>Visitor Counter</h1>
    <?php
    $file="counter.txt";
    $count=file_exists($file)?file_get_contents($file):0;
    $count++;
    file_put_contents($file,$count);
    echo"<p>You are visitor number:<strong>$count</strong>";
    ?>
    </div>
</body>
