<form action="http://tank.iai.ninja/api/make-move.php" method="post"   >
<br><t>_ N <br>
<input type="hidden" name="key" value = "b1930c195a465185e4de86b7c57c8b88" />
W _ E <br><t> _ S
<br><br>
direction (string): kierunek (N/E/S/W) strzału:
<input type="text" name="direction" /><br><br>

distance (int): ilość pól o które chcemy się poruszyć (w przypadku ruchu czołgiem a nie
strzału)
<input type="number" name="distance" /><br><br>

fire (bool): czy chcemy wystrzelić (1) czy się ruszyć czołgiem (0)
<input type="text" name="fire" value = "1" /><br><br>
 
<input type="submit" />
</form>