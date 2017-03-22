<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aasta tegija</title>
    <link rel="stylesheet" href="../resources/login.css">
    <link rel="stylesheet" type="text/css" href="../resources/Header-Nightsky.css">
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css">
    <script src="../resources/bootstrap/js/jquery-3.1.0.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
<div class="header-nightsky">
    <nav class="navbar navbar-default">
        <div class="container">

        </div>
    </nav>
    <div class="hero">
        <h1>HTML/CSS TEADMISTE TEST</h1>
        <p style="text-align: justify">Tegemist on Tartu Kutsehariduskeskuse poolse HTML/CSS teadmiste kontrolli testiga. Test koosneb teoreetilistest ja praktilisest küsimustest. Teooria küsimusi on 10 ja praktilist on 1. Selleks, et testiga alustada tuleb sul sisestada enda eesnimi, perenimi, isikukood ja seejärel vajutada nuppu ALUSTA.</p>
        <div class="login_wrap">
            <form class="login_form" action="login.php" method="post">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="ees" required placeholder="Eesnimi">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="pere" required placeholder="Perenimi">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                    <input type="number" class="form-control" name="idnum" required placeholder="Isikukood">
                </div>
                <input class="input_button btn btn-primary" type="submit" name="button" value="Alusta">
            </form>
        </div>
    </div>
</div>
    <hr class="style13">

    <footer>
        <img class="img-responsive" src="img/logo.png"/>
        <p class="valmis">Projekt valmis Aasta Tegija 2017 võistluseks Aleksander Smirnov, Martin Ostrat poolt</p>
    </footer>

</body>

</html>
