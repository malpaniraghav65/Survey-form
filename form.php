
<html lang="en">
<head>                                                                                          
	<title>
		Survey Form 
	</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Form</h1>

	<!-- Create Form -->
	<form id="form" action="check.php" method="post">

		<!-- Details -->
		<div class="form-control">
			<label for="name" id="label-name">
				Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="name"
                name="t_name"
				placeholder="Enter your name" />
		</div>

		<div class="form-control">
			<label for="email" id="label-email">
				Email
			</label>

			<!-- Input Type Email-->
			<input type="email"
				id="email"
                name="t_email"
				placeholder="Enter your email" />
		</div>

		<div class="form-control">
			<label for="role" id="label-role">
				Which project are you working on?
			</label>
			
			<!-- Dropdown options -->
			<select name="t_role" id="role">
                <option selected>---Select---</option>
				<option value="AWS Linux instance">AWS Linux instance</option>
				<option value="AWS Windows instance">AWS Windows instance</option>
			</select>
		</div>

		<!-- Multi-line Text Input Control -->
        <div>
            <button type="submit" value="submit" name="btn">Submit</button>
		</div>
	</form>
</body>

</html>
