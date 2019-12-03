<!DOCTYPE html>
<html lang="en" style="overflow-y: scroll;">
  <head>
    <meta charset="UTF-8" />
    <Title>Portal</Title>

    <link href="./css/portal.css" type="text/css" rel="stylesheet" />
    <link href="./css/main.css" type="text/css" rel="stylesheet" />	
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
  <?php
  
	session_start();
	if(isset($_SESSION['user']))
	{
		//echo "<script>alert('Welcome')</script>";
	}
  ?>
    <div id="container">
      <nav id="leftnav" style="position: fixed;">
        <div id="logo">
          <span><h3>Panel</h3></span>
        </div>
        <ul id="menu">
          <li><a id="home">Home</a></li>
          <li><a id="messages">Universities</a></li>
          <li><a id="group">Internships</a></li>
          <li><a id="reports">Scholarships</a></li>
          <li><a id="posts">Jobs</a></li>
        </ul>
        <div id="minimize">
          &lt;
        </div>
      </nav>
      <header id="topnav" style="position: fixed;  z-index: 1; ">
        <div id="links" style="">
          <a href="logout.php?logout" name="logout">
              Logout
          </a>
          <!--<img style="margin-top: 5%; margin-left: 20%;" src="./images/site_logo.png" alt="Logo" width="180" height="30"/>-->
        </div>
      </header>
      <main id="main" style="background: white;">
        <div id="maximize" style="position: fixed;">
          &gt;
        </div>
        <div id="action-container" style=" height: 100%; background: white;">
          <div id="home-action">
            <div class="title">
              Home
            </div>
          </div>
          <div id="messages-action">
            <div class="title">
              Univsersities
            </div>
            <div class="container">
            
               <?php
			  
			 //require './database/uniData.php';
				
			  
			  $conn=mysqli_connect('localhost','root','','university_db');
				$query = "SELECT * FROM university";
			  $query_run = mysqli_query($conn, $query);
			  $check_university = mysqli_num_rows($query_run) > 0;
			  
			  if($check_university)
			  {
				  while($row = mysqli_fetch_assoc($query_run))
				  {
				?>
					  	<div id="smallcard" class="card text-center" style="margin-bottom: 3%; border: 1px solid black;">
						  <div class="card-header">
						  <h2>
							<?php
					  print_r($row['Name']);
								?>
							  </h2>
						  </div>
						  <div class="card-body">
							<a href="<?php
					  print_r($row['Email']);?>"><?php
					  print_r($row['Email']);
								?></a>
							<h5><?php
					  print_r($row['Comment']);
							  ?></h5>
						  </div>
						  <div class="card-footer text-muted">
							<?php
					  print_r($row['Subject']);
								?>
						  </div>
						 </div>
						 <?php
					  
				  }
			  }
				else
				{
					echo("no faculty found!");
				}
			  
			  
			  ?>        
            
            
            
			
			</div>
          </div>
          <div id="group-action">
            <div class="title">
              Internships
            </div>
            
            
            <div class="container">
            
               <?php
			  
			 //require './database/uniData.php';
				
			  
			  $conn=mysqli_connect('localhost','root','','internship_db');
				$query = "SELECT * FROM internship";
			  $query_run = mysqli_query($conn, $query);
			  $check_university = mysqli_num_rows($query_run) > 0;
			  
			  if($check_university)
			  {
				  while($row = mysqli_fetch_assoc($query_run))
				  {
				?>
					  	<div id="smallcard" class="card text-center" style="margin-bottom: 3%; border: 1px solid black;">
						  <div class="card-header">
						  <h2>
							<?php
					  print_r($row['Name']);
								?>
							  </h2>
						  </div>
						  <div class="card-body">
							<a><?php
					  print_r($row['Email']);
								?></a>
							<h5><?php
					  print_r($row['Comment']);
							  ?></h5>
						  </div>
						  <div class="card-footer text-muted">
							<?php
					  print_r($row['Subject']);
								?>
						  </div>
						 </div>
						 <?php
					  
				  }
			  }
				else
				{
					echo("no faculty found!");
				}
			  
			  
			  ?>        
            
            
            
			
			</div>
            
            
            
          </div>
          <div id="reports-action">
            <div class="title">
              Scholarships
            </div>
            
            
          </div>
          <div id="post-action">
            <div class="title">
              Jobs
            </div>
            
            
            <div class="container">
            
               <?php
			  
			 //require './database/uniData.php';
				
			  
			  $conn=mysqli_connect('localhost','root','','job_db');
				$query = "SELECT * FROM job";
			  $query_run = mysqli_query($conn, $query);
			  $check_university = mysqli_num_rows($query_run) > 0;
			  
			  if($check_university)
			  {
				  while($row = mysqli_fetch_assoc($query_run))
				  {
				?>
					  	<div id="smallcard" class="card text-center" style="margin-bottom: 3%; border: 1px solid black;">
						  <div class="card-header">
						  <h2>
							<?php
					  print_r($row['Name']);
								?>
							  </h2>
						  </div>
						  <div class="card-body">
							<a><?php
					  print_r($row['Email']);
								?></a>
							<h5><?php
					  print_r($row['Comment']);
							  ?></h5>
						  </div>
						  <div class="card-footer text-muted">
							<?php
					  print_r($row['Subject']);
								?>
						  </div>
						 </div>
						 <?php
					  
				  }
			  }
				else
				{
					echo("no faculty found!");
				}
			  
			  
			  ?>        
            
            
            
			
			</div>
            
            
            
          </div>
        </div>
      </main>
    </div>
    <script src="./js/portal.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    >
	</script>
  </body>
</html>
