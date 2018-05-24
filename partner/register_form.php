
<form id="register_form" role="form" class="reg-input">
					      		<ul>
					      			<li><label>Full Name:</label>
					      			<input type="text" name="fullname"></li>
					      			<li><label>Date of Birth:</label>
					      			<input type="date" name="dob" max="<?php echo date('Y-m-d',strtotime('last year')); ?>"></li>
					      			<li><label>Country</label>
					      			<select name="country" onchange="getStates(this.value)">
									<?php
									$o = mysqli_query($con,"SELECT * FROM countries");
									while($c = mysqli_fetch_assoc($o)) {
									echo '<option value="'.$c['name'].'">'.$c['name'].'</option>';	
									}
									?>
									</select></li>
					      			<li><label>State:</label>
					      			<input type="text" class="state_now" disabled><span style="display:none;" class="state_show"></span></li>
					      			<li><label>Address:</label>
					      			<input type="text" name="address"></li>
					      			<li><label>Email Address:</label>
					      			<input type="Email" name="email" required></li>
					      			<li><label>Phone Number:</label>
					      			<input type="number" name="phonenumber"></li>
					      			<li><label>Whatsapp Number:</label>
					      			<input type="number" name="whatsappnumber"></li>
					      			<li><label>Username:</label>
					      			<input type="text" name="username" required></li>
					      			<li><label>Password:</label>
					      			<input type="password" name="password" id="password" required></li>
					      			<li><label>Confirm Password:</label>
					      			<input type="password" name="confirmpassword" id="confirm_pass" onblur="confirm_pw(this.value)" required></li>
<input type="hidden" name="referrer" value="<?php echo isset($ref) ? $ref : ''; ?>" >									
									<div style="display:none" class="alert alert-danger pw_error_show"></div>
									
								<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
					      			<li><label></label><button id="btnRegister">Register</button></li>
					      		</ul>
								
					      	</form> 