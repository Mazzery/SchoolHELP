<!DOCTYPE html>
<html>  
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="/extcss/style1.css">
        <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="/extcss/help.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="{{route('welcome')}}">HOME</a></li>
                        <li><a href="Login.html">LOGIN</a></li>
                    </ul>
                </nav>
            </div>
            <div class="content">
                <h2>WELCOME TO </h2>
                <h1>SCHOOL HELP</h1>
                <p>a web-based school aid distribution and tutorial scheduling system <br> was designed to alleviate the negative impact of the coronavirus pandemic to schools and students. </p>
                <div><a href="{{route('register')}}">
                    <button type ="button"><span></span>REGISTER NOW</button></a>
                    <button type ="button" onclick="location.href='#Req'"><span></span>VIEW ALL REQUEST</button>
                </div>
            </div>
        </div>
        <section class="about">
		<div class="main">
			<img src="https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80">
			<div class="about-text">
				<h2>SchoolHelp</h2>
				<h5>Group Leader<span>& Designer</span></h5>
				<p>SchoolHELP is a web-based school aid distribution and tutorial scheduling system that was designed to alleviate the negative impact of the coronavirus pandemic to schools and students. Registered SchoolHELP administrators will be able to register schools and their respected School Administrators into the system. Once registered, School Administrators will be able to submit two types of requests into the system, they are: tutorial request and resource request.</p>
			</div>
		</div>
	</section>

    <div class="service">
		<div class="title">
			<h2 id="Req">Requests</h2>
		</div>

		<div class="box">
			<div class="card">
                <i class="far fa-user"></i>
				<h5> I Want Glue For Kids</h5>
				<div class="pra">
					<p>Once registered, School Administrators will be able to submit two types of requests into the system</p>
					<p style="text-align: center;">
						<a class="btton" href="#">Visit School</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>I Want Glue For Kids</h5>
				<div class="pra">
                <p>Once registered, School Administrators will be able to submit two types of requests into the system</p>

					<p style="text-align: center;">
						<a class="btton" href="#">Visit School</a>
					</p>
				</div>
			</div>

			<div class="card">
                <i class="far fa-user"></i>
				<h5>I Want Glue For Kids</h5>
				<div class="pra">
                <p>Once registered, School Administrators will be able to submit two types of requests into the system</p>

					<p style="text-align: center;">
						<a class="btton" href="#">Visit School</a>
					</p>
				</div>
			</div>
		</div>
	</div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://help.edu.my/">Help University</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
              <b>BIT216</b> Software Engineering Priciples 
            </div>
          </footer>
    </body>
</html>

