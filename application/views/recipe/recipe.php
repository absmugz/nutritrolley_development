<table class="table table-hover">
	<tr>
		<th>Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($recipes as $recipe):?>
		<tr>
            <td><?php echo $recipe->recipe ?></td>
            <td> <?php echo anchor('recipe/edit/' . $recipe->id, 'Edit' ); ?></td>
            <td><?php echo anchor('recipe/delete/' . $recipe->id, 'Delete') ;?></td>
		</tr>
	<?php endforeach;?>
</table>


<a class="btn btn-default" href="<?php echo site_url('recipe_controller') ?>" role="button">Create recipe</a>