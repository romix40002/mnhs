<hr />
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/student_add/');" 
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo ('Add New Student');?>
    </a> 
<br>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#home" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-users"></i></span>

                    <span class="hidden-xs">
                        <?php  $class_id;
                                     if ($class_id == 1){
                                        echo "1st Year  |";
                                     }else if($class_id == 2){
                                        echo "2nd Year  |";
                                     }else if ($class_id == 3){
                                        echo "3rd Year  |";
                                     }else{
                                        echo "4th Year  |";
                                     }
                        ?> <?php echo ('All Students');?></span>
                </a>
            </li>

        <?php 
            $query = $this->db->get_where('section' , array('class_id' => $class_id));
            if ($query->num_rows() > 0):
                $sections = $query->result_array();
                foreach ($sections as $row):
        ?>
            <li>
                <a href="#<?php echo $row['section_id'];?>" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-user"></i></span>
                </a>
            </li>
        <?php endforeach;?>
        <?php endif;?>
        </ul>
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                <!-- ILISAN ANG ID OG table_export if need og print btn -->
                <table class="table table-bordered datatable table-hover table-striped" id="table_export">
                    <thead>
                        <tr>
                            <th style="color: #000; background-color: #0a3d62; color: white;" width="80"><div><?php echo "Year"?></div></th>
                            <th style="color: #000; background-color: #0a3d62; color: white;"><div><?php echo ('Name');?></div></th>
                            <th style="color: #000; background-color: #0a3d62; color: white;" class="span3"><div><?php echo 'Semester/S.Y'?></div></th>
                            <th style="background-color: #0a3d62; color: white;"><div><?php echo 'Course'?></div></th>
                            <th style="color: #000; background-color: #eb2f06; color: white;"><?php echo 'Beg. of Sem. Status' ?></th>
                            <th style="color: #000; background-color: #eb2f06; color: white;"><?php echo 'End of Sem. Status' ?></th>
                            <th style="color: #000; background-color: #0a3d62; color: white;"><div><?php echo ('Options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $students   =   $this->db->get_where('student' , array('class_id'=>$class_id))->result_array();
                                foreach($students as $row):?>
                        <tr style="font-family: cursive; font-size: 1.5rem;">
                            <td style="background-color: #7ed6df; color: black; text-align: center;">
                                <?php 
                                     $class_id;
                                     if ($class_id == 1){
                                        echo "1st Year";
                                     }else if($class_id == 2){
                                        echo "2nd Year";
                                     }else if ($class_id == 3){
                                        echo "3rd Year";
                                     }else{
                                        echo "4th Year";
                                     }
                                ?>
                            </td>

                            <td style="color: black;">

                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_student_profile/<?php echo $row['student_id'];?>');">
                                        <?php echo $row['name'];?>
                                </a>

                            </td>

                            <td style="color: black; text-align: center;"><?php echo $row['sem'] ?><br><i style="font-size: 13px; color: red;"><?php echo $row['schoolYear'];?></i></td>
                            <td style="color: black; text-align: center;">Sample</td>

                            <!-- TABLE DATA PARA SA STARTING SEMESTER RESULT -->
                            <td style="background-color: #fff; color: black; text-align: center;">
                                
                                <?php 
                                    $start = $row['startsemRes'];

                                    if ($start == "New") {
                                        echo '<i style="background-color: #079992; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">New</i>';
                                    }else if ($start == "Regular"){
                                        echo '<i style="background-color: #FC427B; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Regular</i>';
                                    }else if ($start == "Returnee"){
                                        echo '<i style="background-color: #F97F51; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Returnee</i>';
                                    }else if ($start == "Transferee"){
                                        echo '<i style="background-color: #ffa801; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Transferee</i>';
                                    }
                                ?>
                                
                            </td>

                            <!-- TABLE DATA PARA SA ENDING SEMESTER RESULT -->
                            <td style="background-color: #fff; color: black; text-align: center;">
                                
                                <?php 
                                    $end = $row['endsemRes'];

                                    if ($end == "Completed") {
                                        echo '<i style="background-color: #0be881; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Completed</i>';
                                    }else if ($end == "Pending"){
                                        echo '<i style="background-color: #fff200; color: black; padding: 0 10px 3px 10px; border-radius: 20px;">Pending</i>';
                                    }else if ($end == "Dropout"){
                                        echo '<i style="background-color: #353b48; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Dropout</i>';
                                    }else if ($end == "Failed"){
                                        echo '<i style="background-color: #eb2f06; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Failed</i>';
                                    }else if ($end == "Transferred Out"){
                                        echo '<i style="background-color: #079992; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Transferred Out</i>';
                                    }else if ($end == "Graduated"){
                                        echo '<i style="background-color: #4cd137; color: white; padding: 0 10px 3px 10px; border-radius: 20px;">Graduated</i>';
                                    }
                                ?>

                            </td>

                            <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                        
                                        
                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_student_edit/<?php echo $row['student_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo ('Edit');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT DELETION LINK -->
                                        <li>
                                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/delete/<?php echo $row['student_id'];?>');">
                                                <i class="entypo-trash"></i>
                                                    <?php echo ('Delete');?>
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                    
            </div>


        <?php 
            $query = $this->db->get_where('section' , array('class_id' => $class_id));
            if ($query->num_rows() > 0):
                $sections = $query->result_array();
                foreach ($sections as $row):
        ?>
            <div class="tab-pane" id="<?php echo $row['section_id'];?>">
                
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo ('Roll');?></div></th>
                            <th width="80"><div><?php echo ('Photo');?></div></th>
                            <th><div><?php echo ('Name');?></div></th>
                            <th class="span3"><div><?php echo ('Address');?></div></th>
                            <th><div><?php echo ('Email');?></div></th>
                            <th><div><?php echo ('Options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $students   =   $this->db->get_where('student' , array(
                                    'class_id'=>$class_id , 'section_id' => $row['section_id']
                                ))->result_array();
                                foreach($students as $row):?>
                        <tr>
                            <td><?php echo $row['roll'];?></td>
                            <td><img src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" class="img-circle" width="30" /></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                        
                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_student_profile/<?php echo $row['student_id'];?>');">
                                                <i class="entypo-user"></i>
                                                    <?php echo ('Profile');?>
                                                </a>
                                        </li>
                                        
                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_student_edit/<?php echo $row['student_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo ('Edit');?>
                                                </a>
                                        </li>
                                        <li class="divider"></li>
                                        
                                        <!-- STUDENT DELETION LINK -->
                                        <li>
                                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/delete/<?php echo $row['student_id'];?>');">
                                                <i class="entypo-trash"></i>
                                                    <?php echo ('Delete');?>
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                    
            </div>
        <?php endforeach;?>
        <?php endif;?>

        </div>
        
        
    </div>
</div>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(5, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									  datatable.fnSetColumnVis(5, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>