<table cellpadding=0 cellspacing=10>
	<tr>
		<th>Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($article as $articleIn):?>
		<tr>
            <td><?php echo $articleIn->title ?></td>
            <td> <?php echo anchor('article/edit/' . $articleIn->id, 'Edit' ); ?></td>
            <td><?php echo anchor('article/delete/' . $articleIn->id, 'Delete') ;?></td>
		</tr>
	<?php endforeach;?>
</table>
<?php echo anchor('article/create/', 'Create article' ); ?>

 
 

