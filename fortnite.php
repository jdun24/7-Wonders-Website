<html>


<head>
    <title>Where should i drop?</title>
<style>
    body {
        background-image: url("/web/img/fortnite_cover.jpg");
    }
</style>

</head>
    <body>

    <?php include("data.php");
    $num = rand(1,23);
    $location = $map[$num];?>

    <?php include("template/menuBar.php"); ?>


    <h1>You should drop at <?php echo $location ?></h1>

    <div>
        <img src= "<?php echo "$img[$num]" ?>" alt="picture not found">
    </div>

    </body>
</html
