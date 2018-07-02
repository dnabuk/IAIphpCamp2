<?php
if(isset($_GET['hint'])){
    if($_GET['hint'] == 1 ){
        ?>
        echo <<<'TAG'
        Uczestniczę w "PHP CAMP" #2
        TAG
        .'<br>';
        echo 'Na $BANK się czegoś nauczę!';<br>
        echo 'Jak to usunąłeś C:\\\moje_filmy?'.'<br>';
        echo 'Szklanka jest w 1\n pełna'.'<br>';
        echo 'Dla n = 2 szklanka jest w ½ pełna'.'<br>';
        echo 'I\'m a little mama\'s boy'.'<br>';
        echo '<br>';
        echo "Uczestniczę w \"PHP CAMP\" #2"."<br>";
        echo "Na \$BANK się czegoś nauczę!"."<br>";
        echo "Jak to usunąłeś C:\\\moje_filmy?"."<br>";
        echo "Szklanka jest w 1\\n pełna"."<br>";
        echo "Dla n = 2 szklanka jest w \u{00bd} pełna"."<br>";
        echo "I'm a little mama's boy"."<br>";
        <?php
    }
}


echo <<<'TAG'
Uczestniczę w "PHP CAMP" #2
TAG
.'<br>';
echo 'Na $BANK się czegoś nauczę!'.'<br>';
echo 'Jak to usunąłeś C:\\\moje_filmy?'.'<br>';
echo 'Szklanka jest w 1\n pełna'.'<br>';
echo 'Dla n = 2 szklanka jest w ½ pełna'.'<br>';
echo 'I\'m a little mama\'s boy'.'<br>';
echo '<br>';
echo "Uczestniczę w \"PHP CAMP\" #2"."<br>";
echo "Na \$BANK się czegoś nauczę!"."<br>";
echo "Jak to usunąłeś C:\\\moje_filmy?"."<br>";
echo "Szklanka jest w 1\\n pełna"."<br>";
echo "Dla n = 2 szklanka jest w \u{00bd} pełna"."<br>";
echo "I'm a little mama's boy"."<br>";


