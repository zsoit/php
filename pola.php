<?php

function prostokat(){

        if(isset($_POST['pa']) && isset($_POST['pb']) )
        {
            $pa = $_POST['pa'];
            $pb = $_POST['pb'];
            settype($pa, 'double');
            settype($pb, 'double');
            $ppole = $pa * $pb;
            $pobwod = 2*$pa + 2*$pb;

            echo "
            <tr>
                <td>
                    <h2>Prostokąt</h2>
                </td>
            </tr>
            <tr>
                <td>Pierwszy bok prostokąta</td>
                <td><input type='text' name='pa' value='$pa'></td>
            </tr>
            <tr>
                <td>Drugi bok prostokąta</td>
                <td><input type='text' name='pb' value='$pb'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='Oblicz'></td>
            </tr>
            <tr>
                <td><h2>Wynik</h2></td>
            </tr>
            <tr>
                <td>Pole prostokąta</td>
                <td><input type='text' value='$ppole' disabled></td>
            </tr>
            <tr>
                <td>Obwód prostokąta</td>
                <td><input type='text'  value='$pobwod' disabled></td>
            </tr>

            ";
        }
        else
        {
            echo "
            <tr>
                <td>
                    <h2>Prostokąt</h2>
                </td>
            </tr>
            <tr>
                <td>Pierwszy bok prostokąta</td>
                <td><input type='text' name='pa'></td>
            </tr>
            <tr>
                <td>Drugi bok prostokąta</td>
                <td><input type='text' name='pb'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='Oblicz'></td>
            </tr>
            <tr>
                <td><h2>Wynik</h2></td>
            </tr>
            <tr>
                <td>Pole prostokąta</td>
                <td><input type='text' placeholder='Pole trójkatą' disabled></td>
            </tr>
            <tr>
                <td>Obwód prostokąta</td>
                <td><input type='text'  placeholder='Obwód trójkąta' disabled></td>
            </tr>
            ";
        }
}

function trojkat(){
    if(isset($_POST['ta']) && isset($_POST['tb']) && isset($_POST['th'] ) )
    {
        $ta = $_POST['ta'];
        $tb = $_POST['tb'];
        $tc = $_POST['tc'];
        $th = $_POST['th'];


        settype($ta, 'double');
        settype($tb, 'double');
        settype($tc, 'double');
        settype($th, 'double');

        $tpole = $ta*$th*0.5;
        $tobwod = $ta+$tb+$tc;

        echo "
        <tr>
            <td>
                <h2>Trójkąt</h2>
            </td>
        </tr>
        <tr>
            <td>Pierwszy bok trójkąta</td>
            <td><input type='text' name='ta' value='$ta'></td>
        </tr>
        <tr>
            <td>Drugi bok trójkąta</td>
            <td><input type='text' name='tb' value='$tb'></td>
        </tr>
        <tr>
            <td>Trzeci bok trójkąta</td>
            <td><input type='text' name='tc' value='$tc'></td>
        </tr>
        <tr>
            <td>Wysokość trójkąta</td>
            <td><input type='text' name='th' value='$th'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Oblicz'></td>
        </tr>
        <tr>
            <td><h2>Wynik</h2></td>
        </tr>
        <tr>
            <td>Pole trójkąta</td>
            <td><input type='text' value='$tpole' disabled></td>
        </tr>
        <tr>
            <td>Obwód trójkąta</td>
            <td><input type='text'  value='$tobwod' disabled></td>
        </tr>

        ";
    }
    else
    {

        echo "
        <tr>
            <td>
                <h2>Trójkąt</h2>
            </td>
        </tr>
        <tr>
            <td>Pierwszy bok trójkąta</td>
            <td><input type='text' name='ta'></td>
        </tr>
        <tr>
            <td>Drugi bok trójkąta</td>
            <td><input type='text' name='tb'></td>
        </tr>
        <tr>
            <td>Trzeci bok trójkąta</td>
            <td><input type='text' name='tc'></td>
        </tr>
        <tr>
            <td>Wysokość trójkąta</td>
            <td><input type='text' name='th'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Oblicz'></td>
        </tr>
        <tr>
            <td><h2>Wynik</h2></td>
        </tr>
        <tr>
            <td>Pole trójkąta</td>
            <td><input type='text' placeholder='Pole trójkąta' disabled></td>
        </tr>
        <tr>
            <td>Obwód trójkąta</td>
            <td><input type='text'  placeholder='Obwód trójkąta' disabled></td>
        </tr>

        ";

    }

}

function kalkulator(){
    echo "
    <div class='kalkulator'>
    <ul>
        <li><a href='pola.php?akcja=wylogowanie'>
        Wylogowanie
        </a></li>
    </ul>
    <form action='pola.php' method='POST'>
        <table>
    ";
    prostokat();
     echo    "
        </table>
    </form>

    <form action='pola.php' method='POST'>
        <table>" ;

        trojkat();

        echo "
        </table>
    </form>
    </div>
    ";

}

function formularz_logowania(){
    print
    '<form action="pola.php" method="POST" class="formularz_logowania">
        <table bgcolor="lightgray" align="center">
            <tr>
                <td></td>
                <td><center><h4 style="margin-top: 10px;">LOGOWANIE DO FORMULARZA</h4></center></td>
                <td></td>
            </tr>
            <tr>
                <td>Nazwa użytkownika:</td>
                <td></td>
                <td><input type="text" name="uzytkownik"></td>
            </tr>
            <tr>
                <td><p style="margin-top: 20px;">Hasło użytkownika:</p></td>
                <td></td>
                <td><input type="password" name="haslo" style="margin-top: 20px;"></td>
            </tr>
            <tr>
                <td><input type="reset" value="WYCZYŚĆ" align="left" style="background-color: #4CAF50; margin-top: 30px;"></td>
                <td></td>
                <td><input type="submit" name="wyslij" value="WYŚLIJ" style="background-color: #4CAF50; margin-left: 110px; margin-top: 30px;"></td>
            </tr>
        </table>
    </form>';
}

function logowanie($hasla)
{
        if(isset($_POST['uzytkownik']) && isset($_POST['haslo'])){
            if(
                array_key_exists($_POST['uzytkownik'],$hasla) &&
            ($hasla[$_POST['uzytkownik']] == $_POST['haslo'])
            ){
                setcookie('zalogowano', 'tak', time()+3600);
                kalkulator();
                exit();

            }
            else{
            echo "<center><h1>Złe dane!</h1></center>";
              formularz_logowania();
              exit();
            }
        }
        if(isset($_GET['akcja']) && $_GET['akcja'] == "wylogowanie"){
            setcookie('zalogowano', 'nie', time()+3600);
            echo "<script>document.querySelector('.kalkulator').style.display='none'</script>";
            formularz_logowania();
        }
        else{
            if(isset($_COOKIE['zalogowano']) && $_COOKIE['zalogowano'] == "tak"){
                kalkulator();
                exit();
            }
            else{
                formularz_logowania();
            }

        }
}

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pola</title>
</head>
<body>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $hasla=array('admin'=>'pracownia1', 'admin1'=>'pracownia2', 'admin3'=>'pracownia3', 'admin4'=>'pracownia4');
    logowanie($hasla);

    ?>

</body>
</html>
