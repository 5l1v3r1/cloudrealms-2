<ul class="nav nav-list well">
	<li class="nav-header">Manage</li>
	<li <?php if($this->uri->segment(3)==''){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters')?>">Characters</a></li>
	<li <?php if($this->uri->segment(3)=='classes'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/classes')?>">Classes</a></li>
	<li <?php if($this->uri->segment(3)=='zodiacs'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/zodiacs')?>">Zodiacs</a></li>
</ul>