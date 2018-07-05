<?php
include_once "config.php";
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="jquery.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<script>
    $(document).ready(function(){

// Delete
        $('.delete').click(function(){
            var el = this;
            var id = this.id;
            var splitid = id.split("_");

// Delete id
            var deleteid = splitid[1];

// AJAX Request
            $.ajax({
                url: 'remove.php',
                type: 'POST',
                data: { id:deleteid },
                success: function(response){

// Removing row from HTML Table
                    $(el).closest('tr').css('background','tomato');
                    $(el).closest('tr').fadeOut(800, function(){
                        $(this).remove();
                    });

                }
            });

        });

    });
</script>

<script>

    function saveEdit(id)
    {
        var nazwa = $("#name_"+id).val();
        var cena = $("#price_"+id).val();



        jQuery.ajax({

            type: "POST",

            url: "edit.php",

            data: {'id':id, 'nazwa':nazwa, 'cena':cena},


            cache: false,

            success: function(response)

            {

                alert("Record successfully updated");

            }

        });

    }

</script>

<?php
$query="SELECT * FROM products";
$result = mysqli_query($connection,$query);
?>

<div class='container'>
    <table border='1' >
        <tr style='background: whitesmoke;'>
            <th>Id</th>
            <th>Nazwa</th>
            <th>Cena</th>
            <th>Operacje</th>
        </tr>

        <?php

        $count = 1;
        while($row = mysqli_fetch_array($result) ){
            $id = $row['id'];
            $nazwa = $row['nazwa'];
            $cena = $row['cena'];


            ?>
            <tr>
                <td align='center'><?php echo $id; ?></td>
                <td><input type="text" name="name" id="name_<?=$id?>" value="<?php echo $nazwa; ?>"/></td>
                <td><input type="text" name="price" id="price_<?=$id?>" value="<?php echo $cena; ?>"</td>
                <td align='center'>
                    <span class='delete' id='del_<?php echo $id; ?>'><button type="submit" class="btn btn-default">Usuń</button></span>
                    <span class='edit' id='edit_<?php echo $id; ?>'><button class="btn btn-default";" onClick="saveEdit(<?=$id?>);">Zapisz zmiany</span></span>
                </td>
            </tr>
            <?php
            $count++;
        }
        ?>
    </table>
</div>
</form>
</body>
</head>
</html>