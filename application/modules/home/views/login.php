<h1>User Listing</h1>
<div><?php echo anchor('tasks/create', '<p>CREATE NEW TASK</p>'); ?></div>
<div>
<?php
	foreach ($query->result() as $row) 
	{
		$edit_url = 'tasks/create/'.$row->id;
		echo '<div style="width:33%; position:relative; display:inline-block;"><h3>'.$row->first_name.'</h3></div>';
		echo '<div style="width:33%; position:relative; display:inline-block;"><h3>'.$row->last_name.'</h3></div>';
		echo '<div style="width:33%; position:relative; display:inline-block;"><h2><a href="'.$edit_url.'">EDIT</a></h2></div>';
	}

	echo "<hr>";

	$firstname = 'Zach';
	$lastname = 'Burklund';
	$this->load->module('tasks');
	$this->tasks->sayhello($firstname, $lastname);

	echo "<hr>";

	echo Modules::run('tasks/sayhello', $firstname, $lastname);
?>
</div>