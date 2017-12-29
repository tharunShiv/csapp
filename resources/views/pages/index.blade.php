@extends('layouts.app')

@section('content')


	
	<div style="width:100%;margin:0;">
<div class="container-fluid">
     <div class="w3-content w3-section" style="width:100%">
  <img class="mySlides w3-animate-fade" src="image/ec1.png" style="width:100%;margin:0;">
  <img class="mySlides w3-animate-fade" src="image/4.png" style="width:100%;margin:0;">
  <img class="mySlides w3-animate-fade" src="image/3.png" style="width:100%;margin:0;">
</div>
</div>
</div>


     <section>


         


    <div class="container">
        <!-- @if(Auth::guest())
		 <div class="row">
			 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-sm-offset-2 ">
	            <a href="/register"><button class="btn middle-index-button" >Create an Account - Scholars</button></a>
             </div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4  ">
				   <a href="/login"><button class="btn middle-index-button" >Scholar Login</button></a>
		    </div>
		</div>
        @endif  -->
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 ">
				<a href="/posts"><button class="btn middle-index-button" >View All Posts</button></a>
        	</div>
		</div>				
	</div>
<br/>
					<div class="container">
             <form class="form-inline" method="POST" action="searchresults1.php" target="_blank">
							 <div class="row">
								 <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 form-group" >

                 <input type="text" name="squery" placeholder="Search yourself..." class="form-control search-index" />
                 <input type="submit" name="search" value="Search" class="btn search-button-index"/>
               </div>
						 </div>
						 </form>
         </div>
			 </div>
     </section>

<br/>
<section class="container">
	<div class="row ">
		<div class="col-12 col-sm-6 col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Most viewed Post
				</div>
				<div class="panel-body" style="text-align:center;">
					<ul style="list-style-type:none;padding:0;">
						<li><a href="#">Android</a></li>
						<hr style="width:65%;margin:2px auto;border:0.5px solid #1ec87e;">
						<li><a href="#">IOS</a></li>
						<hr style="width:65%;margin:2px auto;border:0.5px solid #1ec87e;">
						<li><a href="#">SpaceX</a></li>
                    </ul>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
                    Editors' Choice
				</div>
				<div class="panel-body" style="text-align:center">
						<ul style="list-style-type:none;padding:0;">
								<li><a href="#">Mental Health</a></li>
								<hr style="width:65%;margin:2px auto;border:0.5px solid #1ec87e;">
								<li><a href="#">IOS</a></li>
								<hr style="width:65%;margin:2px auto;border:0.5px solid #1ec87e;">
								<li><a href="#">Psychology</a></li>
						</ul>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-md-4">
				<div class="panel panel-primary" >
				<div class="panel-heading">
					Most Viewed Profile
				</div>
				<div class="panel-body" style="text-align:center">
						<ul style="list-style-type:none;padding:0;">
								<li><a href="#">Tharun</a></li>
								<hr style="width:65%;margin:2px auto;border:0.5px solid #1ec87e;">
								<li><a href="#">Umamaheswari</a></li>
								<hr style="width:65%;margin:2px auto;border:0.5px solid #1ec87e;">
								<li><a href="#">Shiv</a></li>
							</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--
    <section>
			<div class="container">

						<div class="row">
              <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="text-align:center;">
                  <a href=""><img src="image/mvp.png" class="index-bottom-image" alt="Image Loading..."/></a>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="text-align:center;">
                  <a href=""><img src="image/ec.png" class="index-bottom-image" alt="Image Loading..."/></a>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xs-offset-3 col-sm-offset-0" style="text-align:center;">
                  <a href=""><img src="image/mvpr.png" class="index-bottom-image" alt="Image Loading..."/></a>
              </div>
						</div>
          </div>

    </section>

-->



   <!--
	<section>
		<div id="login form" >
			<form method="POST" action="index.php">
				<fieldset>
				<legend>Login</legend>
				USERNAME:<input type="text" name="username" required><br/>
				PASSWORD:<input type="password" name="password" required>
				<button  type="submit" value="SUBMIT" name="login">SUBMIT</button>
				<p ><a  href="" >Create Account</a></p>

				</fieldset>
            </form>
        </div>
	</section>

	<section>
		<div id="login form" >
			<form method="POST" action="index.php">
				<fieldset>
				<legend>Login</legend>
				USERNAME:<input type="text" name="username" required><br/>
				PASSWORD:<input type="password" name="password" required>
				<button  type="submit" value="SUBMIT" name="login1">SUBMIT</button>
				<p ><a  href="" >Create Account</a></p>

				</fieldset>
            </form>
        </div>
	</section>

	<footer>
	<form >
	<p>SEARCH:<input type="text"><br/><input type="submit"></p>
	</form>
	</footer>
	-->
	<script type="application/javascript">
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

	<!--PHP part begins-->

	<!--
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from users where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;

					header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}*/
		?>



	-->


@endsection