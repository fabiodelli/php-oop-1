<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film list</title>
    <link rel="stylesheet" href="./assets/css/style.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="body ">

    <div class="list_container">
        <div class="film_list">
            <h1 class="title">Film list</h1>
            <?php require_once 'db.php'; ?>
            <ul class="ul" >
                <?php foreach ($movies as $movie): ?>
                    <li class="li">
                        <strong>Titolo:</strong>
                        <?php echo $movie->getTitle(); ?><br>

                        <strong>Genere:</strong>
                        <?php echo implode(", ", $movie->getGenere()); ?><br>
                        
                        <strong>Durata:</strong>
                        <?php echo $movie->getDuration(); ?> <span> minuti</span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>

implode(array $array): string