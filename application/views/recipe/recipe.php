<table cellpadding=0 cellspacing=10>
	<tr>
		<th>Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($recipes as $recipe):?>
		<tr>
            <td><?php echo $recipe->title ?></td>
            <td> <?php echo anchor('recipe/edit/' . $recipe->id, 'Edit' ); ?></td>
            <td><?php echo anchor('recipe/delete/' . $recipe->id, 'Delete') ;?></td>
		</tr>
	<?php endforeach;?>
</table>
<?php echo anchor('recipe/create/', 'Create article' ); ?>