<?php
echo 'Uczestniczę w "PHP CAMP" #2';
/*echo 'Na $BANK się czegoś nauczę!'
Jak to usunąłeś C:\\moje_filmy?
Szklanka jest w 1\n pełna
Dla n = 2 szklanka jest w ½ pełna
I'm a little mama's boy*/


echo "1 + '1'" ;
/*1 + '-1.1'
1 + '-0.3e3'
1 + '30 uczestników'
1 + '#2 PHP Camp'
'1' + 1
1.1 + 1
1 + 1.1
1..1 + 1*/

//$array

/*$camp=Array(1=>'Bartłomiej','1'=>'Karasiewicz',1.99=>'Płock',bool='Gniewko',4=>'nowy','Kot ma alę',
    "Kot też ma zawsze jakieś ale", 7=array(1,2,3,4,5));
echo $camp;8?

/*$imiona = Array('Marcin', 100 => 'Daniel', 200 => 'Magda', 'Paulina');
echo $imiona;*/

// operatory tablicowe + == równe(klucz wartość) === identyczne (klucz wart. kolejność) != !==


$liczby = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19);
$litery = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t');
echo $liczby;


foreach ( $liczby as $indeks )
{
    foreach ($litery as $indeks2)
    echo "$indeks$indeks2\n";
}


?>

