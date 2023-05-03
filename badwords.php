<?php
    $paragraph = $_GET['paragraph'];
    $lenghtParagraph = '<span class="text-success">La parola è lunga' .' '. strlen($paragraph) .' '. 'caratteri spazi inclusi</span>';
    if($paragraph){
        $orgPar = 'Testo originale:';
        $output = "$paragraph $lenghtParagraph";
    } else {
        $output = '<span class="text-danger">Devi inserire un testo</span>';
    }
    $censoredWord = $_GET['censored'];
    $censoredParagraph = str_replace(strtolower($censoredWord), '<span class="text-danger">***</span>', strtolower($paragraph));
    if($censoredWord && $paragraph){
        $censPar = 'Testo modificato:';
        $outputCensored = "$censoredParagraph $lenghtParagraph";
    } else {
        $outputCensored = '<span class="text-danger">Devi inserire una parola da censurare</span>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="p-5">
        <h1 class="text-primary"><?php echo $orgPar ?></h1>
        <h1><?php echo $output ?></h1>
        <h1 class="text-primary"><?php echo $censPar ?></h1>
        <h1><?php echo $outputCensored ?></h1>
    </div>
</body>
</html>