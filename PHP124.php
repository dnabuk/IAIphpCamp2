<html>
    <body>
        <head>
        <?php
            foreach (range(0, 20) as $number) {
                foreach (range('A', 'T') as $letter) {
                    echo '<div> <br/>';
                    echo $number;
                    echo $letter;
                    echo '<div {width: 20}>';
                    echo '</div>';
                }
            }
        ?>
        </head>
    </body>
</html>

