<?php require_once  "paginacja.php" ?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>PA IAI - lista klientów</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="nofollow">
    <script src="<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div rel="nofollow">
        <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <table width="80%" class="table table-striped table-bordered table-hover">
        <thead>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Płeć</th>
        <th>Miasto</th>
        <th>Kod pocztowy</th>
        <th>Akcje</th>
        </thead>
        <tbody>
        <?php
        while($crow = mysqli_fetch_array($nquery)){
        ?>
        <tr>
        <td><?php echo $crow['name']; ?></td>
        <td><?php echo $crow['surname']; ?></td>
        <td><?php echo $crow['gender']; ?></td>
        <td><?php echo $crow['city']; ?></td>
        <td><?php echo $crow['postcode']; ?></td>
        <td><a href="formularz_edycja.php?uid=<?php echo $crow['id']; ?>">edytuj</a></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
        <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        </div>
        </body>
        </html>
