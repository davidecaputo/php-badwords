<?php
    $paragraph = $_GET['paragraph'];
    $lenghtParagraph = strlen($paragraph);
    $output = "$paragraph $lenghtParagraph";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1><?php echo $output ?></h1>
</body>
</html>