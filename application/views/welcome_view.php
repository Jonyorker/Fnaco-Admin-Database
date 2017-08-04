    <div class="container">

      <div class="starter-template">
        <h1>FNACO DATABASE ADMIN PANEL</h1>
        <p class="lead">Use this admin panel to create, modify and remove members in the database. All changes made take effect immediately and are non reversable.</p>
        <p class="lead">Proceed with Caution</p>
      </div>
      <div class="row row-eq-height">
	      <div class="col-md-6 well">
	      <h2 class="text-center">Membership Management</h2>
	      <ul class="list-group">
	      	<li class="list-group-item"><?php echo anchor('Membership/create', 'Add Member'); ?></li>
	      	<li class="list-group-item"><?php echo anchor('Membership/Update', 'Update Member'); ?></li>
<!-- 	      	<li class="list-group-item"><?php echo anchor('Membership/Retrieve', 'View Member'); ?></li>
	      	<li class="list-group-item"><?php echo anchor('Membership/Destroy', 'Remove Member'); ?></li> -->
      		</ul>
	      </div>
	      <div class="col-md-6 well">
	      <h2 class="text-center">Generate Reports</h2>
	      <ul class="list-group">
	      	<li class="list-group-item">Membership Reports</li>
	      	<li class="list-group-item">Fiscal Reports</li>
	      	<li class="list-group-item">Volunteer Reports</li>
      		</ul>
	      </div>
      </div>

    </div>