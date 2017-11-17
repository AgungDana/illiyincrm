  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a class="glyphicon glyphicon-home" href="#">
			<span><?php echo ucfirst('dashboard') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-user" href="<?php echo base_url('C_customer/index') ?>">
			<span><?php echo ucfirst('customer') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-plane" href="<?php echo base_url('C_company/index')?>">
			<span><?php echo ucfirst('company') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-book" href="<?php echo base_url('Baru/index')?>">
			<span><?php echo ucfirst('industry') ?></span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 class="page-title">
       <?php echo ucfirst('customer') ?>
      </h3
    </section>

    <!-- Main content -->
    <div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo ucwords('tambah customer') ?></h3>
			</div>
			<div class="panel-body">
				<form action="<?php echo base_url('C_customer/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" placeholder="Name" name="name">
						</div>
					</div>	
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" class="form-control" placeholder="Email" name="email">
						</div>
					</div>	
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								<input type="text" class="form-control" placeholder="Phone Number" name="phone">
						</div>
					</div>
                    <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
								<input type="text" class="form-control" placeholder="Job Title" name="job">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
								<select name="company" class="form-control">
									<?php foreach($company as $c) {?>
										<option value="<?php echo $c['id_company']?>"><?php echo $c['name_company']?></option>
									<?php } ?>
								</select>
						</div>
					</div>
                        <input type="file" name="berkas"  >
                            <br /><br />
                    <div class="form-group">
						<input type="submit" name="submit" value="Submit" class="form-control">
					</div>
				</form>
			</div>
		</div>
		<!-- END BASIC TABLE -->
	</div>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>