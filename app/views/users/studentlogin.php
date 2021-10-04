<?php require APPROOT . '/views/inc/header.php'; ?>


</div>
<div class="stretchForm">
<!-- <div class="mainForm" style="width:100%"> -->
      
		<form action="<?php echo URLROOT; ?>/users/studentlogin" method="post">
            <h2>Set Up Your Account</h2>
			<div class="columnEqual">

			

			<!-- <div class="mainForm" style="width:100%"> -->

				<div class="input-box">
				<span class = "details">Name with Initials </span>
					<input type="name" name="myname"  required= "">
				</div>
			
			
				<div class="input-box">
					<span class = "details"> Registration No </span>
					<input type="RegNo" name="RegNo"  required= "">
				</div>
			
			
				<div class="input-box">
					<span class = "details"> Password</span>
					<input type="password" name="pass"  required= "">
				</div>
      
			
				<div class="input-box">
					<span class = "details">Re-enter password</span>
					<input type="repassword" name="repass"  required= "">
				</div>

			</div>
			<div class="column-2 box">
		
				<div class="input-box">
					<span class = "details"> Back Up Email</span>
					<input type="backmail" name="backmail"  required= "">
				</div>
			
				<div class="input-box">	
				<span class="details">Choose your province</span>

					<select name="province" id="province">
					<option value=""></option>
					<option value="Western">Western</option>
					<option value="South">South</option>
					<option value="Northern">Northern</option>
					<option value="Eastern">Eastern</option>
					<option value="Central">Central</option>
					<option value="North Central">North Central</option>
					<option value="North Western">North Western</option>
					<option value="Uva">Uva</option>
					<option value="Sabaragamuwa">Sabaragamuwa</option>
				</select>
				</div>
		
				<div class="input-box">
					<span class="birthday">Birthday:</span>
					<input type="date" id="birthday" name="birthday"  required= "">
				</div>
		
				<div class="input-box">
						<span class = "details"> Contact Number</span>
						<input type="text" name="conum"  required= "">
				</div>

				<br>
				<input type="submit" value="Update" class="mainbtn makeCenter">
			</div>
		
		</form>
       
 </div>
</div>
<?php require APPROOT . './views/inc/footer.php';?>














