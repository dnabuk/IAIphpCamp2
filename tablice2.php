<table border="1">
<?php foreach (range(0,19) as $row) { ?>
<tr>
<?php foreach (range('A','T') as $col) { ?>
<td><?php echo $row.$col; ?></td>
<?php  } ?>
</tr>
<?php } ?>
</table>