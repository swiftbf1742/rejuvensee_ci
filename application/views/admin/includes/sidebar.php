<?php 
$this->load->library('session');
$dt = $this->session->all_userdata();
?>
          <div id="sidebar"  class="nav-collapse " style="z-index:999">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	   <p class="centered"><a href="javascript:void(0);"><img src="<?=base_url()?>assets/images/logo.png" style="width:94%;"></p>
              	  	
                  <li class="mt">
                      <a href="<?=base_url()?>index.php/admin" class="active" id="menu_dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?=base_url()?>index.php/admin/programs">
                          <i class="fa fa-book"></i>
                          <span>Programs</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?=base_url()?>index.php/admin/testimonies">
                          <i class="fa fa-book"></i>
                          <span>Testimonies</span>
                      </a>
                  </li>
                  
              </ul>
          </div>
          <script>
            $('.sidebar-menu li a').removeClass('active');
            $('#menu_<?=strtolower($this->uri->segment(2, 0))?>').addClass('active');
          </script>