<?php
    @session_start();
    $_SESSION['arr'] = array();
    $start = microtime(true);
    $x = $_GET["X"];
    $y = $_GET["Y"];
    $r = $_GET["hehe"];
    $check = null;
    $currentTime = date("H:i:s", strtotime('+3 hour'));


    foreach ($_GET['X'] as $fuk) {
        $x=$fuk;
}

    echo "<!DOCTYPE HTML> <html> <head> <meta charset='UTF-8'> <title>Points</title> </head>";
    echo "<style type='text/css'>
    .container{
        font-family: \"ALS Schlange sans\",serif;
        margin-bottom: 30px;
        margin-left: 30%;
        width: 40%; 
        height: 80%;
        padding: 10px;
        text-align: center;
        -webkit-text-fill-color: black;
    }
</style>
<div class='container'> <br><table class='action' width='100%' align='center'>
            <tr>  <td>X</td> <td>Y</td> <td>R</td> <td>CHECK</td> <td>TIME</td> <td>SCRIPT TIME</td>  </tr> ";

foreach ($_GET["X"] as $x) {
    if (!(is_numeric($x) && is_numeric($y) && is_numeric($r)) || 
    ($r<1 || $r>5) && ($x < -3 || $x > 5) && ($y < -3 || $y > 3)) {
    array_push ($_SESSION['arr'],"<tr> <td colspan='6'><b>ARGUMENTS ARE INCORRECT!</b></td> </tr>");
} else {   
    if (
$check = (
    ($x >= 0 && $x <= $r/2 && $y >= 0 && $y <= $r) ||
    ($x <= 0 && $y >= 0 && $y <= $x/2 + $r/2) ||
    ($x >= 0 && $y <= 0 && ($x * $x + $y * $y) <= ($r*$r))
) ? "TRUE!" : "FALSE!")

    $time = microtime(true) - $start;
    array_push ($_SESSION['arr'],"<tr> <td>$x</td> <td>$y</td> <td>$r</td>
    <td><b>$check</b></td> <td>$currentTime</td> <td>$time</td> </tr>");
    }
}


foreach ($_SESSION['arr'] as $item) {
    echo $item;
}
echo '</table> <br>
    <canvas id="canvas" width="230px" height="230px" style="border:1px solid #d3d3d3;">
                gaa goo lmao dont kill me
    </canvas>
    <script>
    var ctx = document.getElementById("canvas").getContext("2d");
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                ctx.beginPath();
                ctx.fillStyle = "#7ca1ff";
                ctx.rect(110, 110, 40, -80);
                ctx.closePath();
                ctx.fill();

                ctx.beginPath();
                ctx.moveTo(110, 110);
                ctx.arc(110, 110, 80, 0, Math.PI / 2, false);
                ctx.closePath();
                ctx.fill();

                ctx.beginPath();
                ctx.moveTo(110, 110);
                ctx.lineTo(110, 70);
                ctx.lineTo(30, 110);
                ctx.lineTo(110, 110);
                ctx.closePath();
                ctx.fill();

                // оси
                ctx.beginPath();
                ctx.moveTo(110, 0);
                ctx.lineTo(110, 230);
                ctx.moveTo(0, 110);
                ctx.lineTo(230, 110);

                // стрелки осей
                ctx.moveTo(110, 0);
                ctx.lineTo(113, 5);
                ctx.moveTo(110, 0);
                ctx.lineTo(107, 5);

                ctx.moveTo(230, 110);
                ctx.lineTo(225, 113);
                ctx.moveTo(230, 110);
                ctx.lineTo(225, 107);


                // засечки x
                ctx.fillStyle = "#121164";
                ctx.moveTo(30, 115);
                ctx.lineTo(30, 105);
                ctx.fillText(-'.$r.', 26, 125);

                ctx.moveTo(70, 115);
                ctx.lineTo(70, 105);
                ctx.fillText(-'.$r.' + "/2", 60, 125);

                ctx.moveTo(150, 115);
                ctx.lineTo(150, 105);
                ctx.fillText('.$r.' + "/2", 144, 125);

                ctx.moveTo(190, 115);
                ctx.lineTo(190, 105);
                ctx.fillText('.$r.', 186, 125);

                // засечки y
                ctx.moveTo(115, 150);
                ctx.lineTo(105, 150);
                ctx.fillText('.$r.' + "/2", 117, 153);

                ctx.moveTo(115, 190);
                ctx.lineTo(105, 190);
                ctx.fillText(-'.$r.', 117, 193);

                ctx.moveTo(115, 70);
                ctx.lineTo(105, 70);
                ctx.fillText('.$r.' + "/2", 117, 73);

                ctx.moveTo(115, 30);
                ctx.lineTo(105, 30);
                ctx.fillText('.$r.', 117, 33);

                ctx.fillText("y", 115, 6);
                ctx.fillText("x", 224, 120);
                ctx.stroke();   
                </script>';

    foreach ($_GET["X"] as $x) {
    echo '
    <script>
                var ctx = document.getElementById("canvas").getContext("2d");
                ctx.beginPath();
                ctx.rect(Math.round((108 + ('.$x.' / '.$r.') * 80)), Math.round((108 - ('.$y.' / '.$r.') * 80)), 4, 4);
                ctx.fillStyle = "#e11751";
                ctx.closePath();
                ctx.fill();
    </script>';
    }
    echo '
    <p>
     <a href="http://lab1/" class="button">Go back</a>
    </p>
   
 </center> </body> </html>';
?>



