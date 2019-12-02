<!DOCTYPE html>
<html lang="en">
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
		echo "<script>alert('Welcome')</script>";
	}
  ?>
    <div id="container">
      <nav id="leftnav">
        <div id="logo">
          <span><h3>Panel</h3></span>
        </div>
        <ul id="menu">
          <li><a id="home">Home</a></li>
          <li><a id="messages">Messages</a></li>
          <li><a id="group">Groups</a></li>
          <li><a id="reports">Reports</a></li>
          <li><a id="posts">Posts</a></li>
        </ul>
        <div id="minimize">
          &lt;
        </div>
      </nav>
      <header id="topnav">
        <div id="links">
          <a href="logout.php?logout">
              Logout
          </a>
          <!--<img style="margin-top: 5%; margin-left: 20%;" src="./images/site_logo.png" alt="Logo" width="180" height="30"/>-->
        </div>
      </header>
      <main id="main">
        <div id="maximize">
          &gt;
        </div>
        <div id="action-container">
          <div id="home-action">
            <div class="title">
              Home
            </div>
          </div>
          <div id="messages-action">
            <div class="title">
              Message
            </div>
            <p>Messages will be here</p>
          </div>
          <div id="group-action">
            <div class="title">
              Group
            </div>
          </div>
          <div id="reports-action">
            <div class="title">
              Reports
            </div>
          </div>
          <div id="post-action">
            <div class="title">
              Posts
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
