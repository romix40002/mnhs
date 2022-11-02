<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo ('Addmission Form');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/student/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                	<div class="form-group">
						<h4 class="col-sm-3 control-label" style="color: red; font-weight: 600;">Students Details <small style="color: red;">▼</small></h4>
					</div>

                	<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Unique ID</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="roll" value="<?php echo rand(1000,9999); ?>" readonly>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="" autofocus>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Birthday');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2" required>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Gender');?></label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control" required>
                              <option value=""><?php echo ('Select');?></option>
                              <option value="Male"><?php echo ('Male');?></option>
                              <option value="Female"><?php echo ('Female');?></option>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" required>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="" required>
						</div> 
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Email');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Password');?></label>
                        
						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" value="" >
						</div> 
					</div>

					<div class="form-group">
						<h4 class="col-sm-3 control-label" style="color: red; font-weight: 600;">Academic Details <small style="color: red;">▼</small></h4>
					</div>
					
					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo 'Course'?></label>
                        
						<div class="col-sm-5">
							<select name="course" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
                              <?php 
								$parents = $this->db->get('acd_session')->result_array();
								foreach($parents as $row):
									?>
                            		<option value="<?php echo $row['name'];?>">
										<?php echo $row['name'];?>
                                    </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div> -->

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo 'Year'?></label>
                        
						<div class="col-sm-5">
							<select name="class_id" id="class_id" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
                              <?php 
								$parents = $this->db->get('acd_session')->result_array();
								foreach($parents as $row):
									?>
                            		<option value="<?php echo $row['id'];?>">
										<?php echo $row['name'];?>
                                    </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo 'School Year'?></label>
                        
						<div class="col-sm-5">
							<select name="syear" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
                              <?php 
								$parents = $this->db->get('acd_session')->result_array();
								foreach($parents as $row):
									?>
                            		<option value="<?php echo $row['strt_dt'] .' | '. $row['end_dt'];?>">
										<?php echo $row['strt_dt'] .' | '. $row['end_dt'];?>
                                    </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo 'Semester'?></label>
                        
						<div class="col-sm-5">
							<select name="sem" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
                              <?php 
								$parents = $this->db->get('Semester')->result_array();
								foreach($parents as $row):
									?>
                            		<option value="<?php echo $row['title'];?>">
										<?php echo $row['title'];?>
                                    </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo 'Starting Semester Status'?></label>
							<div class="col-sm-5">
							<select name="startsem" class="form-control" data-validate="required" id="startsem" 
								data-message-required="<?php echo ('Value Required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo ('Select');?></option>
                              <?php 
								$classes = $this->db->get('semstatus')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['stats'];?>">
											<?php echo $row['stats'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo 'Ending Semester Status'?></label>
							<div class="col-sm-5">
							<select name="endsem" class="form-control" data-validate="required" id="endsem" 
								data-message-required="<?php echo ('Value Required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo ('Select');?></option>
                              <?php 
								$classes = $this->db->get('status')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['stats'];?>">
											<?php echo $row['stats'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

					<!-- <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div> -->
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo ('Add Student');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>