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
			<?php echo form_submit('submit', 'Update Member', array('class' => 'btn btn-default pull-right')); ?>
			<?php echo form_close(); ?>
			
	      </div>
	      <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Membership Information</h2>
	      	<?php echo form_open('Membership/Update/'.$query['ID'],array('class' => 'form-horizontal')); ?>
	      	
			<div class="form-group">
			<?php echo form_label('Membership Category', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Membership Category', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Membership Status', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Membership Status', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Special Membership', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Special Membership', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Membership Length', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Membership Length', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Membership Date', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Membership Date', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Renewal', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Renewal', 'class' => 'form-control')); ?>
			</div>
			</div>

			
			<?php echo form_submit('submit', 'Update Member', array('class' => 'btn btn-default pull-right')); ?>
			<?php echo form_close(); ?>	
	      </div>
	      </div>
      <div class="row">
     	  <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Financial Information</h2>
	      	
			<?php echo form_open('Membership/Update/'.$query['ID'],array('class' => 'form-horizontal')); ?>
	      	
			<div class="form-group">
			<?php echo form_label('Dues Paid', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Dues Paid', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Donation', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Donation', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Payment Method', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Payment Method', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Date Received', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Date Received', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Renew Letter 1', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Renew Letter 1', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Renew Letter 2', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Renew Letter 2', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Date Card Sent', 'id', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('id','', array('placeholder' => 'Date Card Sent', 'class' => 'form-control')); ?>
			</div>
			</div>
			
			<?php echo form_submit('submit', 'Update Member', array('class' => 'btn btn-default pull-right')); ?>
			<?php echo form_close(); ?>	
			
	      </div>
	      <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Marketing Information</h2>
	      	
			<?php echo form_open('Membership/Update/'.$query['ID'],array('class' => 'form-horizontal')); ?>
	      	
			<div class="form-group">
			<?php echo form_label('Friends of NACO Brochure', 'Mark_brochure', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Mark_brochure','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Family / Friends', 'Mark_fam', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Mark_fam','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Special Events', 'Mark_events', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Mark_events','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Table in Lobby', 'Mark_lobby', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Mark_lobby','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Media / Social Media', 'Mark_media', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Mark_media','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('NACO Subscription form', 'Mark_sub', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Mark_sub','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('NACO Concert Programme', 'Mark_concert', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Mark_concert','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			
			<?php echo form_submit('submit', 'Update Member', array('class' => 'btn btn-default pull-right')); ?>
			<?php echo form_close(); ?>			
	      </div>
      </div>
      <div class="row">
      <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Volunteer Information</h2>
	      	
			<?php echo form_open('Membership/Update/'.$query['ID'],array('class' => 'form-horizontal')); ?>
	      	
			<div class="form-group">
			<?php echo form_label('Volunteer FA', 'Vol_FA', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_FA','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Volunteer Tel', 'Vol_Tel', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_Tel','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Volunteer CD', 'Vol_CD', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_CD','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Volunteer SCBA', 'Vol_SCBA', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_SCBA','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Volunteer Mail', 'Vol_Mail', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_Mail','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Volunteer SMI', 'Vol_SMI', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_SMI','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Volunteer BODCOM', 'Vol_BODCOM', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_BODCOM','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Volunteer Other', 'Vol_Other', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_checkbox('Vol_Other','yes', array('checked' => FALSE, 'class' => 'form-control')); ?>
			</div>
			</div>
			
			<?php echo form_submit('submit', 'Update Member', array('class' => 'btn btn-default pull-right')); ?>
			<?php echo form_close(); ?>	

	      </div>
     	  <div class="col-md-6 col-sm-12 well">
	      <h2 class="text-center">Other Information</h2>
	      	
			<?php echo form_open('Membership/Update/'.$query['ID'],array('class' => 'form-horizontal')); ?>
	      	
			<div class="form-group">
			<?php echo form_label('Member Since', 'mem_since', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('mem_since','', array('placeholder' => 'Since', 'class' => 'form-control')); ?>
			</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Notes', 'notes', array('class' => 'col-md-3')); ?>
			<div class="col-md-9">
			<?php echo form_input('notes','', array('placeholder' => 'ID #', 'class' => 'form-control')); ?>
			</div>
			</div>
			
			<?php echo form_submit('submit', 'Update Member', array('class' => 'btn btn-default pull-right')); ?>
			<?php echo form_close(); ?>	

	      </div>
      </div>

    </div>