<div style="width:25%; position:relative; display:inline-block;"></div>
<div style="text-align:center; width:50%; position:relative; display:inline-block;">
	<div>
		<h1>TASKS MANAGER</h1>
		<h3></h3>
		<div><?php echo anchor('tasks/create', '<p>CREATE NEW TASK</p>'); ?></div>
	</div>
	<div>
	<?php
		foreach ($query->result() as $row) 
		{
			$edit_url = 'tasks/create/'.$row->id;
			echo '<div style="width:33%; position:relative; display:inline-block;"><h3>'.$row->title.'</h3></div>';
			echo '<div style="width:33%; position:relative; display:inline-block;"><h3>'.$row->priority.'</h3></div>';
			echo '<div style="width:33%; position:relative; display:inline-block;"><h2><a href="'.$edit_url.'">EDIT</a></h2></div>';
		}

		echo "<hr>";

		$firstname = 'Zach';
		$lastname = 'Burklund';
		$this->load->module('nofun');
		$this->nofun->sayhello($firstname, $lastname);

		echo "<hr>";

		echo Modules::run('nofun/sayhello', $firstname, $lastname);
	?>
	</div>
</div>
<div style="width:25%; position:relative; display:inline-block;"></div>