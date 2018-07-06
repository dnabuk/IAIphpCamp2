$(document).ready(function() {
    setInterval(pobierzDane, 100);
	var move = '';
    var dist = 1;
    var fire = '';
    var fireDir = 0;
    var firebutton = 0;




    $("#MoveUP").click(function(){

        if(firebutton == 1) {
            fireDir = 'n';
        }else{
            move = 'n';
        }
         $( "div.dothis" ).append("<button type='button' class='btn btn-success marg animated  fadeIn'>do gory</button>");

    });
    $("#MoveRIGHT").click(function(){

        if(firebutton == 1) {
            fireDir = 'e';
        }else{
            move = 'e';
        }
        $( "div.dothis" ).append("<button type='button' class='btn btn-success marg animated  fadeIn'>w prawo</button>");

    });
    $("#MoveLEFT").click(function(){

        if(firebutton == 1) {
            fireDir = 'w';
        }else{
            move = 'w';
        }
        $( "div.dothis" ).append("<button type='button' class='btn btn-success marg animated  fadeIn'>w lewo</button>");

    });
    $("#MoveDOWN").click(function(){

        if(firebutton == 1) {
            fireDir = 's';
        }else{
            move = 's';
        }
        $( "div.dothis" ).append("<button type='button' class='btn btn-success marg animated  fadeIn'>w dół</button>");

    });
    $("#onedist").click(function(){
         dist = 1;
        $( "div.dothis" ).append("<button type='button' class='btn btn-success marg animated  fadeIn'>1x</button>");
    });
    $("#twodist").click(function(){
         dist = 2;
        $( "div.dothis" ).append("<button type='button' class='btn btn-primary marg animated  fadeIn'>2x</button>");

    });
    $("#fire").click(function(){
        fire = 1;
        $( "div.dothis" ).append("<button type='button' class='btn btn-danger marg animated  fadeIn'>fire</button>");

    });
    $("#firebutton").click(function(){
        firebutton = 1;
        $( "div.dothis" ).append("<button type='button' class='btn btn-warning marg animated  fadeIn'>zaĹadowany</button>");
    });

    $("#makemove").click(function(){

        $( "div.dothis" ).append("<button type='button' class='btn btn-danger marg  animated  bounceIn'>GOOO!</button>");

        $.ajax({
            url: "http://localhost/tank/graj.php?move="+move+"&dist="+dist+"&fire="+fire+"&firedir="+fireDir+"", success: function(result){
                $("#plansza").html(result);
                  move = '';
  dist = 1;
     fire = 0;
  fireDir = 0;
   firebutton = 0;
            }
        });


        setTimeout(function() {
            $( "div.dothis" ).html("<button type='button' class='btn btn-default marg  animated  bounceIn'>Wykonaj ruch!</button>");
        }, 2000);
        setTimeout(function() {
            $( "div.dothis" ).html("");
        }, 2600);
    });

    $("#buttonPanic").click(function(){

        $( "div.dothis" ).append("<button type='button' class='btn btn-danger marg  animated  bounceIn'>Panic!</button>");

        $.ajax({
            url: "http://localhost/tank/panic.php?move="+move+"", success: function(result){
                $("#plansza").html(result);
            }
        });



    });




});
function pobierzDane(){
			$.ajax({
                url: "http://localhost/wyswietl.php?nazwa=grupa_3&map", success: function(result){
                    $("#map").html(result);
                }
            });
			$.ajax({
                url: "http://localhost/wyswietl.php?nazwa=grupa_3&stats", success: function(result){
                    $("#stats").html(result);
                }
            });
		}