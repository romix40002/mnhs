<div class="row">
	
    
	<div class="col-md-12">
		<div class="row">

            <div class="col-md-4">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('student');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3>Total Students</h3>
                   
                </div>
                

            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('teacher');?>" 
                    		data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                    <h3>Total Teachers</h3>
                   
                </div>
                
            </div>


            <div class="col-md-4">
            
                <div class="tile-stats tile-purple">
                    <div class="icon"><i class="entypo-book"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('subject');?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3>Total Subjects</h3>
                   
                </div>
                
            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-black">
                    <div class="icon"><i class="entypo-flow-tree"></i></div>
                    <div class="num" data-start="0" data-end="<?php $user = $this->db->count_all('teacher') + $this->db->count_all('student') ; echo $user;?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3>Total Users</h3>
                   
                </div>
                
            </div>


            <div class="col-md-4">
            
                <a href="<?php echo base_url(); ?>index.php?admin/noticeboard"><div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-alert"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('noticeboard');?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo 'Announcement'?></h3>
                </div></a>
                
            </div>
            
    	</div>
    </div>
    <br><br>
    <div class="col-md-12">
    	<div class="row">
            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">    
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading">
                        <div id="tots" class="panel-title" style="font-family: cursive; font-size: 20px; color: red;">
                            <i class="fa fa-calendar"></i>
                            <?php echo "Event Schedule & Announcement";?>
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</div>



    <script>
  $(document).ready(function() {
	  
    function blink() {
                $("#tots").fadeOut(500);
                $("#tots").fadeIn(500);
            };
        
        setInterval (blink, 1000);


	  var calendar = $('#notice_calendar');
				
				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: false,
					firstDay: 1,
					height: 530,
					droppable: false,
					
					events: [
						<?php 
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
						},
						<?php 
						endforeach
						?>
						
					]
				});
	});
  </script>

  
