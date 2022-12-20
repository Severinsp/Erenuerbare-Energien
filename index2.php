<!doctype html>

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- pie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <!-- Balken -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Erneuerbare Energie</title>
    <link rel="shortcut icon" type="image/ico" href="/images/Thurgau.ico">

    <!-- Material light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>



<body>
    <div class="cookie-container">
        <h4>Wir verwenden Cookies</h4>
        <p>
            Wir verwenden Cookies, um die Benutzerfreundlichkeit für Sie zu optimieren und um die Nutzung der Website zu analysieren. Mit der Nutzung dieser Website stimmen Sie der Verwendung von Cookies zu. Sie können Ihre Einstellung jederzeit ändern. Die Einstellungen werden so lange beibehalten, bis Sie in Ihrem Browser die Cookies (Browser-Daten) löschen.
        </p>
        <br>
        <button id="cookie-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Ablehnen
        </button>
        <button id="cookie-btn2" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Einstellen
        </button>
        <button id="cookie-btn3" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Alle Akzeptieren
        </button>
    </div>

    <div class="cookie-container2">
        <h4>COOKIE-EINSTELLUNGEN</h4>
        <p>
            Wir verwenden Cookies, um die Benutzerfreundlichkeit für Sie zu optimieren und um die Nutzung der Website zu analysieren. Mit der Nutzung dieser Website stimmen Sie der Verwendung von Cookies zu. Sie können Ihre Einstellung jederzeit ändern. Die Einstellungen werden so lange beibehalten, bis Sie in Ihrem Browser die Cookies (Browser-Daten) löschen.
        </p>
        <h4>Notwendige Cookies</h4>
        <p>
            Diese funktionalen Cookies werden benötigt, um die Grundfunktionalitäten der Website zu gewährleisten. Aus diesem Grund können diese nicht deaktiviert werden. In den funktionalen Cookies werden beispielsweise Browsereinstellungen und Sprachauswahl gespeichert. Ohne diese Cookies wäre unter anderem der Zugriff auf geschützte Bereiche nicht möglich. Die gesammelten Daten werden in anonymisierter Form gespeichert, wir können keine Rückschlüsse auf die Identität der Nutzer ziehen.
        </p>
        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
            <input type="checkbox" id="switch-1" class="mdl-switch__input" checked disabled>
            <span class="mdl-switch__label"></span>
        </label>
        <h4>Analytics-Cookies</h4>
        <p>
            Diese Cookies helfen uns zu verstehen, wie unsere Besucher mit der Website interagieren. Aufgrund dieser Informationen können wir die Website sowie die Inhalte ständig verbessern, optimieren und benutzerfreundlicher machen. Die gesammelten Daten werden in anonymisierter Form gespeichert, wir können keine Rückschlüsse auf die Identität der Nutzer ziehen.
        </p>
        <h5>Google-Analytics</h5>
        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
            <input type="checkbox" id="switch-2" class="mdl-switch__input">
            <span class="mdl-switch__label"></span>
        </label>
        <h5>Twitter</h5>
        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
            <input type="checkbox" id="switch-3" class="mdl-switch__input">
            <span class="mdl-switch__label"></span>
        </label>
        <br>
        <button id="cookie-btn4" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Ablehnen
        </button>
        <button id="cookie-btn5" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Einstellungen anwenden
        </button>
        <button id="cookie-btn6" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Alle Akzeptieren
        </button>
    </div>

    <main>
        <h1>Erneuerbare Elektrititätsproduktion</h1>

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#start">Start</a>
            <a href="#statistik">Statistik Gemeinde</a>
            <a href="#vergleichen">Vergleichen</a>
            <a href="#rang">Rang</a>
        </div>
        <br><br><br>
        <div id="start">
            <h2>Start</h2>
        </div>
        <br>
        <p>Diese Seite basiert auf <a href="https://opendata.swiss/de/dataset/erneuerbare-elektrizitatsproduktion-nach-energietragern-und-gemeinden">[opendata.swiss]</a>. Der Datensatz beinhaltet die erneuerbare Elektrizitätsproduktion nach Energieträgern und nach Gemeinden ab
            dem Jahr 2015 bis 2019. </p>
        <br>
        <img src=img/Energie.png>
        <!--  + Bild -->
        <br><br><br><br><br><br>
        <div id="statistik">
            <h2>Statistik Gemeinde</h2>
        </div>
        <br><br>
        <form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>#statistik">
            <div class="form-group">
                <label for="exampleInputEmail1">Gemeinde eingeben:</label>
                <input type="text" id="Geneindenahme" name="Geneindenahme" placeholder="Gemeindenahme">
                <small class="form-text text-muted">Enter drücken</small>
                <!-- button nicht nötig vieleicht gut desin -->
                <br>
                <?php
                $twoDarray = array();
                if (($handle = fopen("Energie.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                        $twoDarray[] = $data;
                    }
                    fclose($handle);
                    if (!empty($_POST['Geneindenahme'])) {
                        $Gesucht = $_POST['Geneindenahme'];
                    } else {
                        $Gesucht = "Weinfelden";
                    }

                    $zeilegesucht = 1;
                    for ($row = 0; $row < 80; $row++) {

                        for ($col = 0; $col < 3; $col++) {
                            if ($twoDarray[$row][$col] == $Gesucht) {
                                $zeilegesucht = $row;
                            }
                        }
                    }
                    $wert1 = $twoDarray[$zeilegesucht][4];
                    $wert2 = $twoDarray[$zeilegesucht][5];
                    $wert3 = $twoDarray[$zeilegesucht][6];
                    $wert4 = $twoDarray[$zeilegesucht][7];
                    $wert5 = $twoDarray[$zeilegesucht][8];
                    $wert6 = $twoDarray[$zeilegesucht][9];
                    $wert7 = $twoDarray[$zeilegesucht][10];

                    $titel = $twoDarray[$zeilegesucht][2];

                    echo "Gemeinde: " . $twoDarray[$zeilegesucht][2] . "<br>";
                    echo "Einwohner: " . $twoDarray[$zeilegesucht][3] . "<br>";
                    echo "Total Erneuerbare Energie: " . $twoDarray[$zeilegesucht][11] . "<br>" . "<br>";
                }

                ?>
                <div class="Diagramm">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>

                <script>
                    var wert1 = <?php echo json_encode($wert1); ?>;
                    var wert2 = <?php echo json_encode($wert2); ?>;
                    var wert3 = <?php echo json_encode($wert3); ?>;
                    var wert4 = <?php echo json_encode($wert4); ?>;
                    var wert5 = <?php echo json_encode($wert5); ?>;
                    var wert6 = <?php echo json_encode($wert6); ?>;
                    var wert7 = <?php echo json_encode($wert7); ?>;
                    var titel = <?php echo json_encode($titel); ?>;
                    var titel2 = "Erneuerbare Energie " + titel;
                    var xValues = ["Wasserkraft", "biomasse_holz", "biogasanlagen_landwirtschaft", "kehricht", "biogasanlagen_industrie", "biogasanlagen_abwasser", "photovoltaik"];
                    var yValues = [wert1, wert2, wert3, wert4, wert5, wert6, wert7];
                    var barColors = [
                        "#008000",
                        "#7FFFD4",
                        "#000080",
                        "#00FF00",
                        "#00FFFF",
                        "#1E90FF",
                        "#8FBC8F"
                    ];

                    new Chart("myChart", {
                        type: "pie",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: titel2
                            }
                        }
                    });
                </script>
            </div>
        </form>
        <!-- Kreisdiargamm + randinfo + javascript -->
        <br><br><br><br><br><br>
        <div id="vergleichen">
            <h2 id="anker">Vergleichen von zwei Gemeinden</h2>
        </div>
        <br><br>
        <form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>#vergleichen">
            <div class="form-group">
                <label for="exampleInputEmail1">Gemeinde eingeben:</label>
                <input type="text" id="Geneindenahme1" name="Geneindenahme1" placeholder="Gemeindenahme 1">
                <input type="text" id="Geneindenahme2" name="Geneindenahme2" placeholder="Gemeindenahme 2">
                <small class="form-text text-muted"></small>
                <input type="submit" value="submit" name="submit" class="button button1" />
                <!-- button nicht nötig vieleicht gut desin -->
                <br><br>
                <?php
                $twoDarray = array();
                if (($handle = fopen("Energie.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                        $twoDarray[] = $data;
                    }
                    fclose($handle);

                    if (!empty($_POST['Geneindenahme1'])) {
                        $Gesucht1 = $_POST['Geneindenahme1'];
                    } else {
                        $Gesucht1 = "Weinfelden";
                    }
                    if (!empty($_POST['Geneindenahme2'])) {
                        $Gesucht2 = $_POST['Geneindenahme2'];
                    } else {
                        $Gesucht2 = "Bürglen (TG)";
                    }

                    $zeilegesucht1 = 1;
                    $zeilegesucht2 = 1;
                    for ($row = 0; $row < 80; $row++) {

                        for ($col = 0; $col < 3; $col++) {
                            if ($twoDarray[$row][$col] == $Gesucht1) {
                                $zeilegesucht1 = $row;
                            }
                            if ($twoDarray[$row][$col] == $Gesucht2) {
                                $zeilegesucht2 = $row;
                            }
                        }
                    }
                    $wert1 = $twoDarray[$zeilegesucht1][11];
                    $wert2 = $twoDarray[$zeilegesucht1][3];

                    $wert3 = $twoDarray[$zeilegesucht2][11];
                    $wert4 = $twoDarray[$zeilegesucht2][3];

                    $titel1 = $twoDarray[$zeilegesucht1][2];
                    $titel2 = $twoDarray[$zeilegesucht2][2];
                }

                ?>

                <div class="Diagramm">
                    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                    <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                </div>

                <script>
                    var wert1 = <?php echo json_encode($wert1); ?>;
                    var wert2 = <?php echo json_encode($wert2); ?>;
                    var wert3 = <?php echo json_encode($wert3); ?>;
                    var wert4 = <?php echo json_encode($wert4); ?>;
                    var titel1 = <?php echo json_encode($titel1); ?>;
                    var titel2 = <?php echo json_encode($titel2); ?>;
                    var titel = titel1 + " vs. " + titel2;

                    var xValues = [titel1, titel2, ];
                    var yValues = [wert1, wert3];
                    var barColors = ["green", "blue"];

                    new Chart("myChart2", {
                        type: "horizontalBar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Total Erneuerbare Energie"
                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        min: 0,
                                        max: 100
                                    }
                                }]
                            }
                        }
                    });

                    var xValues = [titel1, titel2, ];
                    var yValues = [wert2, wert4];
                    var barColors = ["green", "blue"];

                    new Chart("myChart3", {
                        type: "horizontalBar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Einwohner"
                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        min: 100,
                                        max: 25000
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </form>
        <!-- Balkendiagramm + randinfo + javascript -->
        <br><br><br><br><br><br>
        <div id="rang">
            <h2>Rangsortierung der Gemeinden</h2>
        </div>
        <br><br>
        <style>
            .csvTable {
                font-size: 10pt;
                border-top: 1px solid #ccc;
                border-left: 1px solid #ccc;
                border-right: 1px solid #ccc;
                color: #777;
                width: 80%;
            }

            .csvTable th {
                text-align: center;
                border-bottom: 1px solid #ccc;
                padding: 10px;
            }

            .csvTable td {
                border-bottom: 1px solid #ccc;
                padding: 10px;
            }

            .csvTable tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
        <div class="Diagramm">
            <?php

            $hasTitle = true;

            echo '<table border="0" cellspacing="0" cellpadding="5" width="500" class="csvTable">';


            $handle = fopen("Energie.csv", "r");
            $start = 0;

            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

                echo '<tr>' . "\n";

                for ($x = 0; $x < count($data); $x++) {
                    if ($start == 0 && $hasTitle == true)
                        echo '<th>' . $data[$x] . '</th>' . "\n";
                    else
                        echo '<td>' . $data[$x] . '</td>' . "\n";
                }

                $start++;

                echo '</tr>' . "\n";
            }

            fclose($handle);

            echo '</table>';

            ?>
        </div>
    </main>


    <script src="js/JavaScript.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <footer>
        <a href="index.php">Datenschutzerklärung</a>
        <a href="impressum.php">Impressum</a>
    </footer>
</body>

</html>