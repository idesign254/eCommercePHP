<div class="span3">
					<div class="sidebar">

						
					<ul class="widget widget-menu unstyled">
                                <li><a href="dashboard.php"><i class="menu-icon icon-tasks"></i> Dashboard</a></li>
                            </ul>

						<ul class="widget widget-menu unstyled">

                          <li><a href="todays-orders.php"><i class="menu-icon icon-cog"></i> Today's Orders
                          	<?php
 						 $f1="00:00:00";
						$from=date('Y-m-d')." ".$f1;
						$t1="23:59:59";
						$to=date('Y-m-d')." ".$t1;
						 $result = mysqli_query($con,"SELECT * FROM orders where DatePosted Between '$from' and '$to'");
						$orderstoday = mysqli_num_rows($result);
						{
						?>
											<b class="label orange pull-right"><?php echo htmlentities($orderstoday); ?></b>
											<?php } ?>
                           </a>
                       </li>

                          <li><a href="pending-orders.php"><i class="menu-icon icon-tasks"></i> Pending Orders
                          	<?php	
					$status='Pending';									 
				$ret = mysqli_query($con,"SELECT * FROM orders where orderStatus='$status' || orderStatus is null ");
				$pending = mysqli_num_rows($ret);
				{?>
					<b class="label orange pull-right"><?php echo htmlentities($pending); ?></b>
				<?php } ?>
                           </a>
                       </li>
                          <li><a href="delivered-orders.php"><i class="icon-inbox"></i>Delivered Orders 
                          	<?php	
					$status='Delivered';									 
				$rt = mysqli_query($con,"SELECT * FROM orders where orderStatus='$status'");
				$delivered = mysqli_num_rows($rt);
				{?><b class="label green pull-right"><?php echo htmlentities($delivered); ?></b>
				<?php } ?>
                          </a>
                      </li>

                          <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Create Category 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM category");
				$createcategory = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($createcategory); ?></b>
				<?php } ?>
			</a>
		</li>

					  <li><a href="createshop.php"><i class="menu-icon icon-tasks"></i> Add Shop 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM shops");
				$addshops = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($addshops); ?></b>
				<?php } ?>
			</a>
		</li>

                          <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insert Product </a></li>

                          <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Manage Products 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM products");
				$products = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($products); ?></b>
				<?php } ?>
			</a>
		</li>

                          <li><a href="manage-users.php"><i class="menu-icon icon-table"></i>Manage users 
                          	<?php														 
				$rt = mysqli_query($con,"SELECT * FROM user");
				$allusers = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($allusers); ?></b>
				<?php } ?>
                          </a>
                      </li>

                          <li><a href="messages.php"><i class="menu-icon icon-paste"></i>Messages
                          	<?php														 
				$rt = mysqli_query($con,"SELECT * FROM contact");
				$messages = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($messages); ?></b>
				<?php } ?>
                           </a>
                       </li>

                          <li><a href="orders.php"><i class="menu-icon icon-paste"></i>Orders 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM orders");
				$allorders = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($allorders); ?></b>
				<?php } ?>
			</a>
		</li>

                          <li><a href="subscribers.php"><i class="menu-icon icon-table"></i>subcribers 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM subscribers");
				$subscribers = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($subscribers); ?></b>
				<?php } ?>
			</a>
		</li>
                          <li><a href="testimonials.php"><i class="menu-icon icon-table"></i>testimonials 
                          <?php														 
				$rt = mysqli_query($con,"SELECT * FROM testimonial");
				$testimonial = mysqli_num_rows($rt);
						{?>
				<b class="label green pull-right"><?php echo htmlentities($testimonial); ?></b>
				<?php } ?>
			</a>
		</li>
                          <li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log</a></li>
                          <li><a href="admin-logs.php"><i class="menu-icon icon-tasks"></i>Admin Login Log</a></li>
                        
                            </ul>


						<!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
