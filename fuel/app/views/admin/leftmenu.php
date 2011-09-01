<?php if(Auth::check()):?>
<ul>
                	<li><h3><a href="#" class="house">Dashboard</a></h3>
                        <ul>
                        <!--	<li><a href="#" class="report">Sales Report</a></li>
                    		<li><a href="#" class="report_seo">SEO Report</a></li>
                            <li><a href="#" class="search">Search</a></li> -->
                            <?php echo Html::anchor('login/logout',"logout");?>
                        </ul>
                    </li>
                       
                    <li><h3><?php echo Html::anchor('login/index',"Manage Pages");?></h3></li>
         
         <ul>
             <li><?php echo Html::anchor('cms/admin/add',"Add");?></li>
              <li><?php echo Html::anchor('cms/admin/index',"List");?></li>
         </ul>
     </li>
  

                    <li><h3><a href="#" class="folder_table">Navigation</a></h3>
          				<ul>
                        	<li><a href="<?php echo \Uri::base();?>navigation/admin" class="addorder">List</a></li>
                          <li><a href="<?php echo \Uri::base();?>navigation/admin/add" class="shipping">Add</a></li>
                            <li><a href="#" class="invoices">Comments</a></li>
                        </ul>
                    </li>
                   
                  <li><h3><a href="#" class="user">Users</a></h3>
          				<ul>
                            <li><a href="<?php echo \Uri::base();?>login/create_user" class="useradd">Add user</a></li>
                                   <li><a href="<?php echo \Uri::base();?>login/index" class="useradd">List user</a></li>
                            <!--<li><a href="#" class="group">User groups</a></li>
            				<li><a href="#" class="search">Find user</a></li>
                            <li><a href="#" class="online">Users online</a></li> -->
                        </ul>
                    </li>
				</ul>
<?php endif;?>