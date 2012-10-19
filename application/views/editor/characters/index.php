<div class="pane">
	<div class="row-fluid">
		<div class="span4">
			<ul class="nav nav-list well">
				<li class="nav-header">Manage</li>
				<li <?php if($this->uri->segment(3)==''){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters')?>">All Characters</a></li>
				<li <?php if($this->uri->segment(3)=='create'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/create')?>">Create Character</a></li>
				<li class="nav-header">Properties</li>
				<li <?php if($this->uri->segment(3)=='classes'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/classes')?>">Classes</a></li>
				<li <?php if($this->uri->segment(3)=='zodiacs'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/zodiacs')?>">Zodiacs</a></li>
			</ul>
		</div>
		<div class="span7">
			<div class="page-header">
				<h1>All Characters</h1>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>User</th>
						<th>Name</th>
						<th>Level</th>
						<th>Gold</th>
						<th>Class</th>
						<th>Gender</th>
						<th>Zodiac</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($characters as $character): ?>
					<tr>
						<td><?=$character->user_id?></td>
						<td><?=$character->name?></td>
						<td><?=$character->level?></td>
						<td><?=$character->gold?></td>
						<td><?=$character->class?></td>
						<td><?=$character->gender?></td>
						<td><?=$character->zodiac?></td>
						<td>
							<a href="<?=base_url('editor/characters/edit/'.$character->id)?>"><i class="icon-pencil"></i></a>
							<a href="<?=base_url('editor/characters/delete/'.$character->id)?>"><i class="icon-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>