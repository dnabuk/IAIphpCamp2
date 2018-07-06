<?php
function createColumnsArray($end_column, $first_letters = ''){
	$columns = array();
	$length = strlen($end_column);
	$letters = range('A', 'Z');

	foreach ($letters as $letter) {
		$column = $first_letters . $letter;

		$columns[] = $column;

		if ($column == $end_column) return $columns;
	}

	foreach ($columns as $column) {
		if (!in_array($end_column, $columns) && strlen($column) < $length) {
			$new_columns = createColumnsArray($end_column, $column);
			$columns = array_merge($columns, $new_columns);
		}
	}

	return $columns;
}

