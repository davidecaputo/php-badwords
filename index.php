<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="p-5">
    <h1 class="text-center text-bg-primary rounded-5">Word Guard</h1>
    <h2 class="pb-5 text-success text-center">Hai bisogno di censurare una parola da un testo e ti secca farlo, tranquillo ci penso io. Basta che inserisci qui sotto il testo, dove è presente la parola che vuoi censurare, e la parola che vuoi nascondere e io la modificherò per te.</h2>
    <form class="w-50" action="badwords.php" method="GET">
      <div class="mb-3">
        <label for="paragraph" class="form-label">Inserisci qui il testo</label>
        <input type="text" class="form-control" name="paragraph" id="paragraph">
      </div>
      <div class="mb-3">
        <label for="censored" class="form-label">Inserisci la parola da censurare</label>
        <input type="text" class="form-control" name="censored" id="censored">
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
</body>
</html>