<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBS Remake - Home</title>
    <link rel="stylesheet" href="app/view/assets/css/home.css">
    <link rel="stylesheet" href="app/view/assets/css/loading.css">


</head>

<body>

    <div id="loading-screen" class="active">
        <div class="spinner"></div>
        <p>Carregando...</p>
    </div>


    <div id="Title">
        <h1>Dragon Ball Super Remake</h1>
    </div>

    <section class="goku">


        <video id="videoPreparando" class="gif" autoplay muted loop playsinline>
            <source src="app/view/assets/img/preparando.mp4" type="video/mp4">
        </video>


        <div class="goku-content">

            <div id="SubTitle">
                <h2>Quer assistir DBS remake de graça?</h2>
                <p>Cadastre-se rápido e assista de forma simples.</p>
            </div>

            <div id="Button">
                <a href="index.php?action=login">
                    <button type="button">Cadastre-se</button>
                </a>
            </div>

        </div>


    </section>


    <script src="app/view/assets/js/home.js"></script>
    <script src="app/view/assets/js/loading.js"></script>

</body>

</html>