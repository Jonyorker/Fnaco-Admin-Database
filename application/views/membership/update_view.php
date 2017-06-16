    <div class="container">
      <div class="starter-template">
        <h1>Update member <?php echo $query['ID'].', '.$query['display_name'] ?></h1>
      </div>
      <div class="row">
	      <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Personal Information</h2>
	      	
			 
			<?php echo form_open('Membership/Update/'.$query['ID'],array('class' => 'form-horizontal')); ?>
			<div class="form-group">
			<?php echo form_label('Display Name', 'display_name', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('display_name',$query['display_name'], array('placeholder' => 'salutations', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Address', 'address', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('address', $address, array('placholder' => 'Address', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('City', 'city', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('city',$city, array('placeholder' => 'City', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Postal', 'postal', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('postal',$postal, array('placeholder' => 'Postal', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Email', 'email', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('email',$email, array('placeholder' => 'Email', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Phone 1', 'phone_1', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('phone_1',$phone_1, array('placeholder' => 'Phone 1', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Phone 2', 'phone_2', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('phone_2',$phone_2, array('placeholder' => 'Phone 2', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Language', 'language', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('language',$language, array('placeholder' => 'Language', 'class' => 'form-control')); ?>
			</div>
			</div>
			
	      </div>
	      <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Membership Information</h2>
	      	
			<div class="form-group">
			<?php echo form_label('Member ID', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'ID #', 'class' => 'form-control')); ?>
			</div>
			</div>
			
	      </div>
	      </div>
      <div class="row">
     	  <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Financial Information</h2>
	      	
			<div class="form-group">
			<?php echo form_label('Member ID', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'ID #', 'class' => 'form-control')); ?>
			</div>
			</div>
			
	      </div>
	      <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Marketing Information</h2>
	      	
			<div class="form-group">
			<?php echo form_label('Member ID', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'ID #', 'class' => 'form-control')); ?>
			</div>
			</div>			
	      </div>
      </div>
      <div class="row">
     	  <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Other Information</h2>
	      	
			<div class="form-group">
			<?php echo form_label('Member ID', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'ID #', 'class' => 'form-control')); ?>
			</div>
			</div>	
	      </div>
	      <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Save changes</h2>
	      	
			<p class="lead">Please press the Update Member button when you wish to save the changes. These changes are non-reversible.</p>
			<div class="form-group">
			<?php echo form_submit('submit', 'Update Member', array('class' => 'btn btn-default pull-right')); ?>
			<?php echo form_close(); ?>
			</div>
			
	      </div>
      </div>

    </div>