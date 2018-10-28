<div class="content-wrapper">
    <section class="content-header">
     	<h1>
        Dashboard
	   </h1>
	   <small>Control Panel</small>
      <ol class="breadcrumb">
       	<li><a href="#"><i class="fa fa-dashboard active"></i> Home</a></li>
      </ol>
    </section>
    <section class="content">
       <div class="row">  
        	<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-purple">
					<div class="inner">
						<?php $count = $this->Admin_model->record_count('users');?>
						<h3><?php echo $count;?></h3>
						<p>Users Registration </p>
					</div>
					<div class="icon">
						<i class="fa fa-user-plus"></i>
					</div>
					<a href="<?php echo base_url('settings/users/'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
       	    </div>    
      		<div class="col-lg-3 col-xs-6">
 	        	<div class="small-box bg-aqua">
            		<div class="inner">
             			 	<h3>1</h3>
            				<p>Online Users</p>
          			</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         		</div>
   		    </div>
       		<div class="col-lg-3 col-xs-6">
          		<div class="small-box bg-black">
           			<div class="inner">
 						<h3>88</h3>
						<p>PDF</p>
          			</div>
					<div class="icon">
						<i style="color:rgb(170, 163, 152)" class="fa fa-file-pdf-o"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          		</div>
     		</div>
        	<div class="col-lg-3 col-xs-6">
        		<div class="small-box bg-red">
            		<div class="inner">
             			<?php $count = $this->Admin_model->record_count('users', 'active','0');?>
              			<h3><?php echo $count;?></h3>
						<p>Deactivated users</p>
          			</div>
					<div class="icon">
						<i class="fa fa-user-times"></i>
					</div>
					<a href="<?php echo base_url('settings/users/')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          		</div>
        	</div>        
      	</div>

    </section>
</div>
 