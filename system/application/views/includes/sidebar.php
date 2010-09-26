<div class="sidebar"> <!-- *** sidebar layout *** -->
		<div class="logo clear">
			<a href="<?php echo base_url(); ?>site/index" title="View dashboard">
				<img src="<?php echo base_url(); ?>images/logo_earth.png" alt="" class="picture" />
				<span class="title">ICWET</span>
				<span class="text">2011</span>
			</a>
		</div>

		<div class="menu">
			<ul>

            <li><a href="<?php echo base_url(); ?>site/index">Dashboard</a></li>

            <?php if($this->auth_model->is_admin() || $this->auth_model->is_chairperson() || $this->auth_model->is_entry()){ ?>
            <li><a href="<?php echo base_url(); ?>site/authors">Authors</a></li>
            <?php }if($this->auth_model->is_admin() || $this->auth_model->is_chairperson() || $this->auth_model->is_entry() || $this->auth_model->is_author()){ ?>
            <li><a href="<?php echo base_url(); ?>site/index">Papers</a></li>
            <?php }if($this->auth_model->is_admin() || $this->auth_model->is_manager()){?>
            <li><a href="<?php echo base_url(); ?>site/index">Tracks</a></li>
            <?php }if($this->auth_model->is_admin()){?>
            <li><a href="<?php echo base_url(); ?>site/index">Users</a></li>
            <?php }if($this->auth_model->is_admin()){?>
            <li><a href="<?php echo base_url(); ?>site/index">Logs</a></li>
            <?php }if($this->auth_model->is_admin()||$this->auth_model->is_author()||$this->auth_model->is_chairperson()||$this->auth_model->is_entry()||$this->auth_model->is_manager()){ ?>
            <li><a href="<?php echo base_url(); ?>site/index">Settings</a></li>
            <?php }if($this->auth_model->is_admin()||$this->auth_model->is_entry()){ ?>
            <li><a href="<?php echo base_url(); ?>site/wizard">Wizard</a></li>
            <?php } ?>
            </ul>
		</div>
	</div>