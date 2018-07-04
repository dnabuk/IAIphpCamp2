<?php

class A {

    public function getSpan($color, $value)
    {
        $html = '';
        switch ($color) {
            case 'red':
                $html = '<span style="color:red">' . $value. '</span>'; break;
            case 'blue':
                $html = '<span style="color:blue">' . $value. '</span>'; break;
			default: $html = '<span>' . $value. '</span>';
        }

        return $html;
    }
}
if (isset($_GET['color'])) {
	$color = $_GET['color'];

	echo (new A)->getSpan($color, 'Kolorowy tekst');
}