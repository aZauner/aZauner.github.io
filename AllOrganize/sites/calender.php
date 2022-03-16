<?php

use function PHPSTORM_META\type;

setlocale(LC_TIME, "de_DE.utf8");
$kal_datum = time();

// $kal_datum += 2592000;

// $m = date("n", time());

// plus noch immer 1 von den buttons;


// if($m == 1 || $m == 3 || $m == 5 || $m == 7 || $m == 8 || $m == 10 || $m == 1 || $m == 12){
    // $kal_datum += 2678400;
// } else if ($m == 2){
//     $kal_datum +=;
// }

// date("n", time());    gibt das aktuelle monat aus
// per mitgegebende variablen in der url monat festlegen 
// link im nav auf variablen umschreiben und sonst per ajax anfrage über button
// button der per ajax auf neues monat verlinken

$kal_tage_gesamt = date("t", $kal_datum);


$kal_start_timestamp = mktime(0, 0, 0, date("n", $kal_datum), 1, date("Y", $kal_datum));

$kal_start_tag = date("N", $kal_start_timestamp);



$kal_ende_tag = date("N", mktime(0, 0, 0, date("n", $kal_datum), $kal_tage_gesamt, date("Y", $kal_datum)));
// $file = file_get_contents('./kalender.csv', true);
// $file = array_slice(explode("\n", $file), 1);
// for ($i = 0; $i < count($file); $i++) {
//     $file[$i] = array_slice(explode(",", $file[$i]), 0, 5);
// }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Organize | Kalender</title>
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="../css/calenderStyle.css">
    <script src="../script/calender.js" defer></script>
</head>
<body>
    <div id="indexWrapper">
        <nav>
            <div id="homeLink">
                <a href="index.html">AllOrganize</a>
            </div>
            <div>
                <div>
                    <a id="active" href="calender.php">Kalender</a>
                </div>
                <div>
                    <a href="projects.php">Projekte</a>
                </div>
                
                <div>
                    <a href="index.html">Account</a>
                </div>
            </div>
        </nav>
        <main>
        <?php
        $month = date("n", $kal_datum);
        switch ($month) {
            case '1':
                $month = "Januar";
                break;
            
            case '2':
                $month = "Februar";
                break;
        
            case '3':
                $month = "März";
                break;

            case '4':
                $month = "April";
                break;   

            case '5':
                $month = "Mai";
                break;

            case '6':
                $month = "Juni";
                break;

            case '7':
                $month = "Juli";
                break;

            case '8':
                $month = "August";
                break;

            case '9':
                $month = "September";
                break;

            case '10':
                $month = "Oktober";
                break;
            
            case '11':
                $month = "November";
                break;

            case '12':
                $month = "Dezember";
                break;
                                            
        }
        echo "<h1 id='monthHeadline'>".$month." ".date("Y")."</h1>";

        ?>
        <div id="tableDiv">
        <table class="kalender">
        <thead>
            <tr>
                <th>MO</th>
                <th>DI</th>
                <th>MI</th>
                <th>DO</th>
                <th>FR</th>
                <th>SA</th>
                <th>SO</th>
            </tr>
        </thead>
        <?php
        for ($i = 1; $i <= $kal_tage_gesamt + ($kal_start_tag - 1) + (7 - $kal_ende_tag); $i++) {
            $kal_anzeige_akt_tag = $i - $kal_start_tag;
            $kal_anzeige_heute_timestamp = strtotime($kal_anzeige_akt_tag . " day", $kal_start_timestamp);
            $kal_anzeige_heute_tag = date("j", $kal_anzeige_heute_timestamp);

            // $inserts = [];
            // for ($j = 0; $j < count($file); $j++) {
            //     $val = intval(substr($file[$j][1], 4, 2));
            //     if ($val == $kal_anzeige_heute_tag) {
            //         array_push($inserts, $file[$j]);
            //     }
            // }

            // if(count($inserts) > 1){
            //     $count = 0;
            //     $lastcount = 1;
            //     while($lastcount != 0){
            //         for($j = 1; $j < count($inserts);$j++){
            //             $y = intval(substr($inserts[$j][2],1,2));
            //             $x = intval(substr($inserts[$j-1][2],1,2));
            //             if($x > $y){
            //                 $temp = $inserts[$j-1];
            //                 $inserts[$j-1] = $inserts[$j];
            //                 $inserts[$j] = $temp;
            //                 $count++;
            //             }
            //         }
            //         $lastcount = $count;
            //         $count = 0;
            //     }
            // }


            if (date("N", $kal_anzeige_heute_timestamp) == 1)
                echo "<tr>\n";
            if (date("dmY", $kal_datum) == date("dmY", $kal_anzeige_heute_timestamp) && date("n", $kal_datum) == date("n", time())) {
                echo "      <td class=\"kal_aktueller_tag\"><a class='calenderDayLink' href='calenderDay.php?id=".$kal_anzeige_heute_tag."&month=".date('m',$kal_anzeige_heute_timestamp)."&dayWritten=".date('l',$kal_anzeige_heute_timestamp)."'><div class='calenderDayDiv'><h1 class=\"kal_aktueller_tagh1\">", $kal_anzeige_heute_tag, "</h1></div></a>";
                // if (count($inserts) != 0) {
                //     for($k = 0; $k < count($inserts); $k++){
                //         echo "<div><p>",
                //         substr($inserts[$k][0],1,strlen($inserts[$k][0])-2), " | ", substr($inserts[$k][2],1,strlen($inserts[$k][2])-2) , " - ",substr($inserts[$k][4],1,strlen($inserts[$k][4])-2) ,"</p></div>";
                //     }
                // }
                echo "</td>\n";
            } else if ($kal_anzeige_akt_tag >= 0 and $kal_anzeige_akt_tag < $kal_tage_gesamt) {
                echo "      <td class=\"kal_standard_tag\"><a class='calenderDayLink' href='calenderDay.php?id=".$kal_anzeige_heute_tag."&month=".date('m',$kal_anzeige_heute_timestamp)."&dayWritten=".date('l',$kal_anzeige_heute_timestamp)."'><div class='calenderDayDiv'><h1 class=\"kal_standard_tagh1\">", $kal_anzeige_heute_tag, "</h1></div></a>";
                // if (count($inserts) != 0) {
                //     for($k = 0; $k < count($inserts); $k++){
                //         echo "<div><p>",
                //         substr($inserts[$k][0],1,strlen($inserts[$k][0])-2), " | ", substr($inserts[$k][2],1,strlen($inserts[$k][2])-2) , " - ", substr($inserts[$k][4],1,strlen($inserts[$k][4])-2) ,"</p></div>";
                //     }
                // }
                echo "</td>\n";
            } else {
                echo "      <td class=\"kal_vormonat_tag\"><a class='calenderDayLink' href='calenderDay.php?id=".$kal_anzeige_heute_tag."&month=".date('m',$kal_anzeige_heute_timestamp)."&dayWritten=".date('l',$kal_anzeige_heute_timestamp)."'><div class='calenderDayDiv'><h1 class=\"kal_vormonat_tagh1\">", $kal_anzeige_heute_tag, "</h1></div></a>";
                // if (count($inserts) != 0) {
                //     for($k = 0; $k < count($inserts); $k++){
                //         echo "<div><p>",
                //         substr($inserts[$k][0],1,strlen($inserts[$k][0])-2), " | ",substr($inserts[$k][2],1,strlen($inserts[$k][2])-2) , " - ", substr($inserts[$k][4],1,strlen($inserts[$k][4])-2) ,"</p></div>";
                //     }
                // }
                echo "</td>\n";
            }
            if (date("N", $kal_anzeige_heute_timestamp) == 7) {
                echo "    </tr>\n";
            }
        }
        ?>
    </table>
    </div>
    <div id="addBtnDiv">
        <button class="addBtn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></svg>
        </button>
    </div>
    </main>
    </div>
</body>
</html>