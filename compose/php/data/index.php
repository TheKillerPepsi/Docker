<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<BS-Stuff>
</title>
</head>
<body>
<?php
    echo "<b>PHP-Site-Stuff<b><br>";
    $name = "Pia";
    echo "Hallo, mein Name ist $name";
    echo "<br>";
    echo "{$name}s Flasche.";
    echo "<br>";
    $erg= 4 + 5;
    echo "4 + 5 = $erg";
    echo "<br>";
   # $array = ["Hello","World"];
    #echo $array[0,1];

    echo "<b>Assoziativer Array</b><br>";
    $farben = array ("rot" => "#FF000",
                    "grün" => "#00FF00",
                 "blau" => "#000FF");
                   $farben["schawrz"] = "#0000";
                   print_r($farben);
               echo "<br /><br />";
                   foreach ($farben as $key => $value){
                      echo "Schlüssel: $key, Wert: $value<br  />\n"; }

     echo "Aufgabe<br>"; 
     echo "<br>";  
   # $_SERVER = array("Server1" => "Windows", "Server2" => "Linux");
   # foreach ($_SERVER as $key => $value){
    # echo "Server: $key, <br> Wert: $value";
     #}

     # To-Do: PHP und HTMl

     #Assoziative Arrays
#Array () -> Schlüssel-Wert-Paar -> Verknüpft mit =>

#Variableninterpolation
#Nicht, falls string mit „ „ / und Schlüssel keine  Zahl
#	Ähhhh, siehe Quellcode 

# if else elseif
#if () <- boolescher Ausdruck
#{
#    Anweisung, wenn if = "richtig"
#}
#else{Anweisung;}
#elseif{Anweisung;}

$i = 5;
$m = $i % 2;
var_dump($i);
echo "$i <br>";
if ($m == 0)
{
    echo "Zahl ist gerade";
}
else
{
    echo "Zahl ist ungerade";
}

#Operatoren:
#<= : größer UND gleich
#!0 oder <>: ungleich
#=== : SInd auch die Datentypen gleich? -> ODER
#!== : sidn die Datentyüe -> ODER
# || : verodert
# && : verundert

#Switch
#switch ($dasda) {
  #  case "Apfel":
   #     jksfhdskf
  #      break
 #   case "Karotte";
 #   fndskfhdsfh
 #   break
 #   default:
 #   echo Stuff;
 #   }

 # while -Schleife

 <?php
$m = 0;
$x = 1;

if ($x !== 0)
{
    if ($m !== 0)
    {
        echo "nur zahlen! <br>";
    }
    else
    {
        echo "nur zahlen 2! <br>";
    }
}

$i = $m + $x;

if ($i <= 10)
{
    echo "if ($1 <= 10)";
}

elseif ($i = 20)
{
    echo "elseif ($i = 20)";
}

else
{
    echo "Stuff";
}
?>
?>



</body>
</html>