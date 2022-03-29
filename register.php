<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  h4 {
    text-align: center;
    color: royalblue;
    font-size: 150%;
  }
</style>
<body>
  <h4>User Registration Form :</h4>
  <br><br>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
	  <div class="input-group">
        <label class="col-sm-4 col-form-label">Education</label>
        <div class="col-sm-8">
          <select id="education" name="education" class="form-control">
            <option selected="" disabled>...</option>
            <option value="Masters">Graduation</option>
            <option value="PG">Post Graduation</option>
          </select>
        </div>
      </div>
	<div class="input-group">
  	  <label>Languages</label>
  	  <input type="text" name="language" required>
  	</div>
	<div class="input-group">
  	  <label>Technical Skills</label>
  	  <input type="text" name="skills" required>
  	</div>
	<div class="input-group">
  	  <label>Projects</label>
  	  <textarea class="form-control" name="projects" id="projects" rows="4"></textarea>
  	</div>
	<div class="input-group">
  	  <label>Programming Languages</label>
  	  <input type="text" name="programming" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Existing User? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>