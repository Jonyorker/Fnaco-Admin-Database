    <div class="container">

      <div class="starter-template">
        <h1>Membership Management</h1>
      </div>
      <div class="row row-eq-height">
	      <div class="col-md-6 well">
	      <h2 class="text-center">Create Member</h2>
	      	
			 
			<?php echo form_open('Membership/store',array('class' => 'form-horizontal')); ?>
			<div class="form-group">
			<?php echo form_label('Salutations', 'salutations', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('salutations','', array('placeholder' => 'salutations', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('First Name', 'first_name', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('first_name','', array('placeholder' => 'first name', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Last Name', 'last_name', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('last_name','', array('placeholder' => 'last name', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_submit('submit', 'Create Member', array('class' => 'btn btn-default pull-right')); ?>
			</div>
			
	      </div>
	      <div class="col-md-6 well">
	      <h2 class="text-center">Update Member</h2>

	      <?php echo form_open('Membership/store',array('class' => 'form-horizontal')); ?>
			<div class="form-group">
			<?php echo form_label('Salutations', 'salutations', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('salutations','', array('placeholder' => 'salutations', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('First Name', 'first_name', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('first_name','', array('placeholder' => 'first name', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Last Name', 'last_name', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('last_name','', array('placeholder' => 'last name', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_submit('submit', 'Create Member', array('class' => 'btn btn-default pull-right')); ?>
			</div>
	      </div>
      </div>
      <div class="row row-eq-height">
	      <div class="col-md-6 well">
	      <h2 class="text-center">View Member</h2>
	      </div>
	      <div class="col-md-6 well">
	      <h2 class="text-center">Delete Member</h2>
	      </div>
      </div>

    </div>