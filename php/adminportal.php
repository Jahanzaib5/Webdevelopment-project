<html>
<head>
	<title>
		Assigment
	</title>
	<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>
	<body style="transition: 0.6s ease;">
	
	<?php
  
	session_start();
	if(isset($_SESSION['user']))
	{
		echo "<script>alert('Welcome to the admin portal')</script>";
	}
	  else{
		  echo "<script>location.href='../index.hmtl'</script>";
	  }
  ?>
	
	<!--Navigation bar-->
    <div class="header" id="nav-bar" style="margin-bottom: 0%;">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="../index.html"
          ><img src="../images/site_logo.jpg" alt="Logo" width="180" height="30"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Wellcome to the admin portal <span class="sr-only">(current)</span></a
              >
          </ul>
          
          <div>
			  <a method='get' href="./logout_2.php" style="color: white;" name="logout">
				  Logout
			  </a>
			</div>
		
        </div>
      </nav>
    </div>
	
      
    <div class="container" style="text-align:center; width: 80%; padding-bottom: 4%; margin-bottom: 5%; border-bottom: 1px solid rgb(153, 146, 146); ">
        <div class="row" >
         <div class="col-sm-12" style="margin-bottom: 5%;">
         	<h1 style="margin-bottm: 5%;">Click on the below mentioned respective buttons to add Details in the Database!</h1>
         </div>
          <div class="col-sm-4">
            <button onclick="toggle_div_from('job')" type="button" class="btn btn-secondary" >
                        Post a job
                    </button>
           	
           </div>
           <div class="col-sm-4">
           <button onclick="toggle_div_from('university')" type="button" class="btn btn-secondary" >
                        Add a new University
                    </button>
           	
           </div>
            <div class="col-sm-4" style="text-align: center;">
            <button onclick="toggle_div_from('internship')" type="button" class="btn btn-secondary" >
                        Post an internship
                    </button>
           	
           </div>                
        </div>
    </div>
    <div id="university" class="container-fluid" style="width: 40%; background: #f0f5f5;  padding-bottom: 2%; padding-top: 2%; display: none;">
			<h3 style="text-align: center; padding-bottom: 2%;">Add an University</h3>
			<form action="admin_1.php" method="post">
			  <div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name"  name="name">
			  </div>
			  <div class="form-group">
				<label for="email">Website</label>
				<input type="text" class="form-control" id="email" aria-describedby="email"  name="email">
			  </div>
			  <div class="form-group">
				<label for="subject">Country</label>
				<input type="text" class="form-control" id="subject"  name="subject">
			  </div>
			  <div class="form-group">
				<p>Details</p>
				<textarea rows = "5" cols = "69" name = "comments">
					
				 </textarea>
			  </div>
			  <button style="margin-top:2%; background: maroon; width: 25%;" type="submit" class="btn btn-primary">Submit</button>
			  <br>
			</form>
		</div>
    
    <div id="internship" class="container-fluid" style="width: 40%; background: #f0f5f5;  padding-bottom: 2%; padding-top: 2%; display: none;">
			<h3 style="text-align: center; padding-bottom: 2%;">Add an Internship</h3>
			<form action="admin_2.php" method="post">
			  <div class="form-group">
				<label for="name">Company Name</label>
				<input type="text" class="form-control" id="name"  name="name">
			  </div>
			  <div class="form-group">
				<label for="email">Position</label>
				<input type="text" class="form-control" id="email" aria-describedby="email"  name="email">
			  </div>
			  <div class="form-group">
			  <div class="form-group">
				<label for="website">Website</label>
				<input type="text" class="form-control" id="website" aria-describedby="email"  name="website">
			  </div>
				<label for="subject">Country</label>
				<input type="text" class="form-control" id="subject"  name="subject">
			  </div>
			  <div class="form-group">
				<p>Details</p>
				<textarea rows = "5" cols = "69" name = "comments">
					
				 </textarea>
			  </div>
			  <button style="margin-top:2%; background: maroon; width: 25%;" type="submit" class="btn btn-primary">Submit</button>
			  <br>
			</form>
		</div>
    
    <div id="job" class="container-fluid" style="width: 40%; background: #f0f5f5;  padding-bottom: 2%; padding-top: 2%; display: none;">
			<h3 style="text-align: center; padding-bottom: 2%;">Add a Job</h3>
			<form action="admin_3.php" method="post">
			  <div class="form-group">
				<label for="name">Company Name</label>
				<input type="text" class="form-control" id="name"  name="name">
			  </div>
			  <div class="form-group">
				<label for="email">Position</label>
				<input type="text" class="form-control" id="email" aria-describedby="email"  name="email">
			  </div>
			  <div class="form-group">
				<label for="website">Website</label>
				<input type="text" class="form-control" id="website" aria-describedby="email"  name="website">
			  </div>
			  <div class="form-group">
				<label for="subject">Country</label>
				<input type="text" class="form-control" id="subject"  name="subject">
			  </div>
			  <div class="form-group">
				<p>Details</p>
				<textarea rows = "5" cols = "69" name = "comments">
					
				 </textarea>
			  </div>
			  <button style="margin-top:2%; background: maroon; width: 25%;" type="submit" class="btn btn-primary">Submit</button>
			  <br>
			</form>
		</div>

   <!---------------------------------------------footer---------------------->
      
      
       <!--last-last one-->
    <div class="container last" style="border-top: 1px solid rgb(153, 146, 146);">
        <div class="row">
            <div class="col-sm-6 left_one">
                <h3><a href="#">ABOUT</a></h3>
                <p>
                    We are committed to helping graduate students and provide them with opportunities that optimizes their true potential. Using technology as our leverage, Consuldents reach is un-paralleled and we have students from every university, making it a one big universe for graduate student opportunities provider in all over the world. At Consuldents, however, we believe our success factor is only one metric and that is customer satisfaction and we are driven by our goal to provide students best graduate student opportunities that they can avail while in their universities.
                </p>
            </div>
            <div class="col-sm-2 middle_one">
                <h3>FIND OUT MORE</h3>
                <ul>
                    <li><a href="#">How does it work?</a></li>
                    <li><a href="#">A trusted service</a></li>
                    <li><a href="#">Help centre</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-2 middle_two">
                <h3>EXLORE</h3>
                <ul>
                    <li><a href="#">Insurgence</a></li>
                    <li><a href="#">Terms of Agreement</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Professionals</a></li>
                    <li><a href="#">Mobile app(soon)</a></li>
                </ul>
            </div>
            <div class="col-sm-1 right_one">
                <h3>PARTNERS</h3>
                <ul>
                    <li><img src="images/last_last_one/01.jpg" class="img-fluid" alt="Responsive image" width="30" /></li>
                    <li><img src="images/last_last_one/02.svg" class="img-fluid" alt="Responsive image" width="30" /></li>
                </ul>


            </div>
        </div>
    </div>

    <!--footer-->
    <div class="container footer" >
        <div class="row">
            <div class="col-sm-6 left_one">
                <a href="index.html"><img src="../images/site_logo.jpg" class="img-fluid" alt="Responsive image" width='140'/></a>
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        English
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#!"><i class="far fa-snowflake"></i> Latin</a>
                        <a class="dropdown-item" href="#!"><i class="far fa-snowflake"></i> Dutch</a>
                        <a class="dropdown-item" href="#!"><i class="far fa-snowflake"></i> French</a>
                        <a class="dropdown-item" href="#!"><i class="far fa-snowflake"></i> Spanish</a>
                        <a class="dropdown-item" href="#!"><i class="far fa-snowflake"></i> Russian</a>
                    </div>
                </div>
                <p>© Consuldents 2019 - All rights reserved</p>
            </div>
            <div class="col-sm-6 right_one">
                <ul>
                    <li><a href="#"> Terms of service</a></li>
                    <li><a href="#">. privacy policy</a></li>
                    <li><a href="#">. Cookies</a></li>
                    <li><a href="#">. Press</a></li>
                    <li><a href="#">. Team</a></li>
                    <li><a href="#">. Jobs</a></li>
                </ul>
            </div>

            </div>
        </div>      
	

	<script>
		function toggle_div_from(id){
			var divelement  = document.getElementById(id);
			
			if(divelement.style.display == 'none')
				divelement.style.display = 'block';
			else
				divelement.style.display = 'none';
		}
		
	</script>
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
	
	<script>
		window.onscroll = function() {myFunction()};

		// Get the header
		var header = document.getElementById("nav-bar");

		// Get the offset position of the navbar
		var sticky = header.offsetTop;

		// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
		function myFunction() {
		  if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		  } else {
			header.classList.remove("sticky");
		  }
		}
	  </script>
	
	
	</body>
</html>