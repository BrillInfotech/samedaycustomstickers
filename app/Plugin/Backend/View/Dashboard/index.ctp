<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <!-- BEGIN PAGE TITLE & BREADCRUMB-->
      <h3 class="page-title"> Dashboard </h3>
      <?php echo $this->element('breadcrumb');?>
      <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
  </div>

<div id="dashboard">
  <!-- BEGIN DASHBOARD STATS -->
  <div class="row-fluid">
    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
      <div class="dashboard-stat blue">
	  	<a href="#">
        <div class="visual"> <i class="icon-ticket"></i> </div>
        <div class="details">
          <div class="number"> 50K </div>
          <div class="desc"> Total Sticker</div>
        </div>
		</a>
        <a class="more" href="#"> View more <i class="m-icon-swapright m-icon-white"></i> </a> </div>
    </div>
    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
      <div class="dashboard-stat green">
        <a href="#">
        <div class="visual"> <i class="icon-ticket"></i> </div>
        <div class="details">
          <div class="number"> 40K</div>
          <div class="desc">Total Skins</div>
        </div>
		</a>
        <a class="more" href="#"> View more <i class="m-icon-swapright m-icon-white"></i> </a> </div>
    </div>
    <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
      <div class="dashboard-stat purple">
	  <a class="more" href="#">
        <div class="visual"> <i class="icon-group"></i> </div>
        <div class="details">
          <div class="number"> 1.5K </div>
          <div class="desc">Customers</div>
        </div>
		</a>
        <a class="more" href="#"> View more <i class="m-icon-swapright m-icon-white"></i> </a> </div>
    </div>
    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
      <div class="dashboard-stat yellow">
        <div class="visual"> <i class="icon-user"></i> </div>
        <div class="details">
          <div class="number">25K</div>
          <div class="desc">Total Products</div>
        </div>
        <a class="more" href="#"> View more <i class="m-icon-swapright m-icon-white"></i> </a> </div>
    </div>
  </div>
  <!-- END DASHBOARD STATS -->
  <div class="clearfix"></div>
  <!--<div class="row-fluid">
    <div class="span6">
      <div class="portlet box blue">
        <div class="portlet-title">
          <div class="caption"><i class="icon-bell"></i>Recent Activities</div>
          
        </div>
        <div class="portlet-body">
		Record not found yet!
		<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible="0">
            <ul class="feeds">
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-info"> <i class="icon-check"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> You have 4 pending tasks. <span class="label label-warning label-mini"> Take action <i class="icon-share-alt"></i> </span> </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> Just now </div>
                </div>
              </li>
              <li> <a href="#">
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-success"> <i class="icon-bar-chart"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> Finance Report for year 2013 has been released. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 20 mins </div>
                </div>
                </a> </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-important"> <i class="icon-user"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 24 mins </div>
                </div>
              </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-info"> <i class="icon-shopping-cart"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> New order received with <span class="label label-success">Reference Number: DR23923</span> </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 30 mins </div>
                </div>
              </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-success"> <i class="icon-user"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 24 mins </div>
                </div>
              </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label"> <i class="icon-bell-alt"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> Web server hardware needs to be upgraded. <span class="label label-inverse label-mini">Overdue</span> </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 2 hours </div>
                </div>
              </li>
              <li> <a href="#">
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-inverse"> <i class="icon-briefcase"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> IPO Report for year 2013 has been released. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 20 mins </div>
                </div>
                </a> </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-info"> <i class="icon-check"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> You have 4 pending tasks. <span class="label label-warning label-mini"> Take action <i class="icon-share-alt"></i> </span> </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> Just now </div>
                </div>
              </li>
              <li> <a href="#">
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-important"> <i class="icon-bar-chart"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> Finance Report for year 2013 has been released. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 20 mins </div>
                </div>
                </a> </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-inverse"> <i class="icon-user"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 24 mins </div>
                </div>
              </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-info"> <i class="icon-shopping-cart"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> New order received with <span class="label label-success">Reference Number: DR23923</span> </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 30 mins </div>
                </div>
              </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-success"> <i class="icon-user"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 24 mins </div>
                </div>
              </li>
              <li>
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-warning"> <i class="icon-bell-alt"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> Web server hardware needs to be upgraded. <span class="label label-inverse label-mini">Overdue</span> </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 2 hours </div>
                </div>
              </li>
              <li> <a href="#">
                <div class="col1">
                  <div class="cont">
                    <div class="cont-col1">
                      <div class="label label-info"> <i class="icon-briefcase"></i> </div>
                    </div>
                    <div class="cont-col2">
                      <div class="desc"> IPO Report for year 2013 has been released. </div>
                    </div>
                  </div>
                </div>
                <div class="col2">
                  <div class="date"> 20 mins </div>
                </div>
                </a> </li>
            </ul>
          </div>
          <div class="scroller-footer">
            <div class="pull-right"> <a href="#">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp; </div>
          </div>-
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="portlet box blue tasks-widget">
        <div class="portlet-title">
          <div class="caption"><i class="icon-envelope-alt"></i>Recent Message</div>
        </div>
        <div class="portlet-body">
	
			<?php if(!empty($contact_data)){
				foreach($contact_data as $data){?> 
					  
					 <div class="task-title"> 
					<input type="checkbox" class="liChild" value="" style="">
                  
					 <span class="task-title-sp"><?php echo $data['Contact']['message'];?></span> <span class="label label-success"><?php echo $data['Contact']['name'];?></span> <span class="task-bell"><i class="icon-bell"></i></span> </div>
					<div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
             
											
			<?php 	}
					
				}else{?>
					<tr><td colspan="6" align="center">Record not found yet!</td></tr>
				 <?php }?>
			
			
       <?php /*?> <div class="task-content">
            <div class="scroller" style="height:305px" data-always-visible="1" data-rail-visible1="1">
              <!-- START TASK LIST -->
              <ul class="task-list unstyled">
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">Present 2013 Year IPO Statistics at Board Meeting</span> <span class="label label-success">Company</span> <span class="task-bell"><i class="icon-bell"></i></span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">Hold An Interview for Marketing Manager Position</span> <span class="label label-important">Marketing</span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">AirAsia Intranet System Project Internal Meeting</span> <span class="label label-success">AirAsia</span> <span class="task-bell"><i class="icon-bell"></i></span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">Technical Management Meeting</span> <span class="label label-warning">Company</span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">Kick-off Company CRM Mobile App Development</span> <span class="label label-info">Internal Products</span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp"> Prepare Commercial Offer For SmartVision Website Rewamp </span> <span class="label label-important">SmartVision</span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">Sign-Off The Comercial Agreement With AutoSmart</span> <span class="label label-inverse">AutoSmart</span> <span class="task-bell"><i class="icon-bell"></i></span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">Company Staff Meeting</span> <span class="label label-success">Cruise</span> <span class="task-bell"><i class="icon-bell"></i></span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="last-line">
                  <div class="task-checkbox">
                    <input type="checkbox" class="liChild" value="" style="">
                  </div>
                  <div class="task-title"> <span class="task-title-sp">KeenThemes Investment Discussion</span> <span class="label label-warning">KeenThemes</span> </div>
                  <div class="task-config">
                    <div class="task-config-btn btn-group"> <a class="btn mini blue" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                        <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- END START TASK LIST -->
            </div>
          </div>
       <?php */?>   <div class="task-footer"> <span class="pull-right"> <a href="#">See All Tasks <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp; </span> </div>
		  
		  		         
		  
		  
        </div>
      </div>
    </div>
  </div>-->
  <div class="clearfix"></div>
</div>

</div>