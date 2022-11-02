<?php
$student_info	=	$this->crud_model->get_student_info($param2);
foreach($student_info as $row):?>

<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-3">
			
			<a href="#" class="profile-picture">
				<img src="<?php echo $this->crud_model->get_image_url('student' , $row['student_id']);?>" 
                	class="img-responsive img-circle" />
			</a>
			
		</div>
		
		<div class="col-sm-9">
			
			<ul class="profile-info-sections">
				<li style="padding:0px; margin:0px;">
					<div class="profile-name">
							<h3><?php echo $row['name'];?></h3>
					</div>
				</li>
			</ul>
			
		</div>
		
		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="">
            		<br>
                <table class="table table-bordered table-hover table-striped">
                
                    <?php if($row['roll'] != ''):?>
                    <tr>
                        <td>Database ID</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $row['roll'];?></td>
                    </tr>
                    <?php endif;?>
 
                    <?php if($row['class_id'] != ''):?>
                    <tr>
                        <td>Classroom</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $this->crud_model->get_class_name($row['class_id']);?></td>
                    </tr>
                    <?php endif;?>

                    <?php if($row['section_id'] != '' && $row['section_id'] != 0):?>
                    <tr>
                        <td>Section</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $this->db->get_where('section' , array('section_id' => $row['section_id']))->row()->name;?></td>
                    </tr>
                    <?php endif;?>
                
                
                    <?php if($row['birthday'] != ''):?>
                    <tr>
                        <td>Birthday</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $row['birthday'];?></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['sex'] != ''):?>
                    <tr>
                        <td>Gender</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $row['sex'];?></td>
                    </tr>
                    <?php endif;?>
                
                
                    <?php if($row['phone'] != ''):?>
                    <tr>
                        <td>Phone</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $row['phone'];?></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['email'] != ''):?>
                    <tr>
                        <td>Email</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $row['email'];?></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['address'] != ''):?>
                    <tr>
                        <td>Address</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><?php echo $row['address'];?>
                        </td>
                    </tr>
                    <?php endif;?>
                    <?php if($row['parent_id'] != ''):?>
                    <tr>
                        <td>Parent</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><b><?php echo $this->db->get_where('parent' , array('parent_id' => $row['parent_id']))->row()->name;?></b></td>
                    </tr>
                    <tr>
                        <td>Parent Phone</td>
                        <td style="font-family: cursive; background-color: #12CBC4; color: white; border-radius: 15px;"><b><?php echo $this->db->get_where('parent' , array('parent_id' => $row['parent_id']))->row()->phone;?></b></td>
                    </tr>
                    <?php endif;?>
                    
                </table>
			</div>
		</div>		
	</section>
	
	
	
</div>


<?php endforeach;?>