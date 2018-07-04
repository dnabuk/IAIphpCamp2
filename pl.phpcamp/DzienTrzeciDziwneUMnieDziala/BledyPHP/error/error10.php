<?php


$color = $_GET['color'];


class A {

    public function getSpan($color, $value)
    {
        $html = '';
        switch ($color) {
            case 'red':
                $html = '<span style="color:red">' . $value. '</span>';
            case 'blue':
                $html = '<span style="color:blue">' . $value. '</span>';
        }

        return $html;
    }
}

echo (new A)->getSpan($_GET['color'], 'Kolorowy tekst');