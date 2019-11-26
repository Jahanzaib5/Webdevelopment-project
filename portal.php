<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <Title>Portal</Title>

    <link href="./css/portal.css" type="text/css" rel="stylesheet" />
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
  </body>
</html>
