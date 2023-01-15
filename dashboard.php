<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Glaze</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<style type="text/css">
		
		

		 *{
		
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	list-style-type: none ;
	text-decoration: none;
	font-family: 'Poppins', sans-serif;
}

       /*root{
			--main-color: #DD2F6E;
			--color-dark: #1D2231;
			--text-grey: #8390A2;
		     }*/
.sidebar{
	width: 345px;
	position: fixed;
	left: 0;
	top: 0;
	height: 100%;
	background: #3867d6;
	z-index: 100;
	transition: width 300ms;
}

.sidebar-brand{
	height: 100px;
	width: 100px;
	padding: 1rem 0rem 1rem 2rem;
	color: #fff;
}

.sidebar-brand span{
	display: inline-block;
	padding-right: 1rem;
}

.sidebar-menu {
	margin-top: 1rem ;
	/*text-transform: capitalize;*/
}
.sidebar-menu li{
	width: 100%;
	margin-bottom: 1.7rem;
	padding-left: 1rem;
	/*text-transform: capitalize;*/
}

.sidebar-menu li a span{
	text-transform: capitalize;
}

.sidebar-menu a{
	padding-left: 1rem;
	display: block;
	color: #fff;
	font-size: 1.1rem;
	
}
.sidebar-menu a.active {
	background: #fff;
	padding-top: 1rem;
	padding-bottom: 1rem;
	color: #3867d6;
	border-radius: 30px 0px 0px 30px;

}

.sidebar-menu a.inactive:hover{
	background: #fff;
	padding-top: 1rem;
	padding-bottom: 1rem;
	color: #3867d6;
	border-radius: 30px 0px 0px 30px;

}

.sidebar-menu a span:first-child{
	font-size: 1.5rem;
	padding-right: 1rem;
	text-transform: capitalize;
}

#nav-toggle:checked + .sidebar {
	width: 70px;
}

#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li  {
	padding-left: 1rem;
	text-align: center;
}

#nav-toggle:checked + .sidebar li a {
	padding-left: 0rem;
}


#nav-toggle:checked + .sidebar .sidebar-brand h2 span:lastchild,
#nav-toggle:checked + .sidebar li a span:lastchild{
	display: none;
}

#nav-toggle:checked ~ .main-content{
	margin-left: 70px;
}

#nav-toggle:checked ~ .main-content header{
	width: calc(100% - 70px);
	left: 70px;
}

.main-content{
	transition: margin-left 300ms;
	margin-left: 345px;

}

header{
	background: #fff;
	display: flex;
	justify-content: space-between;
	padding: 1rem 1.5rem;
	box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
	position: fixed;
	left: 345px;
	width: calc(100% - 345px);
	top: 0;
	z-index: 100;
	transition: left 300ms;
}

#nav-toggle{
	display: none;
}

header h2{
	color: #222;
}

header label span{
	font-size: 1.7rem;
	padding-right: 1rem;

}

.search-wrapper {
	border: 1px solid #ccc;
	border-radius: 30px;
	height: 50px;
	display: flex;
	align-items: center;
	overflow-x: hidden;
}

.search-wrapper span{
	display: inline-block;
	padding: 0rem 1rem;
	font-size: 1.5rem;

}
.search-wrapper input{
	height: 100%;
	padding: 0.5rem;
	border: none;
	outline: none;

}

.user-wrapper{
	display: flex;
	align-items: center;
}

.user-wrapper img {
	border-radius: 50%;
	margin-right: 1rem;

}


.user-wrapper small{
	display: inline-block;
	color: #8390A2;
}

main{
	margin-top: 85px;
	padding: 2rem 1.5rem;
	background: #f1f5f9;
	min-height: calc(100vh - 90px);

}

.cards {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-gap: 2rem;
	margin-top: 1rem;
}

.card-single {
	display: flex;
	justify-content: space-between;
	background: #fff;
	padding: 2rem;
	border-radius: 2px;
}

.card-single div:last-child span {
	font-size: 3rem;
	color:  #3867d6;
	
}

.card-single div:first-child span{
	color: #8390A2 ;

}

.card-single:last-child {
background: #3867d6;
}


.card-single:last-child h1,
.card-single:last-child div:last-child span,
.card-single:last-child div:first-child span {
	color:  #fff;
	
}

.recent-grid{
	margin-top: 3.5rem;
	display: grid;
	grid-gap: 2rem;
	grid-template-columns: 65% auto;
}
.card{
	background: #fff;
	border-radius: 5px;
}

.card-header
{
	padding: 1rem;
}

.card-header{
	display: flex;
	justify-content: space-between;
	align-items: center;
	border-bottom: 1px solid #f0f0f0;
}

.card-header button{
	background: #3867d6;
	border-radius: 10px;
	color: #fff;
	font-size: 0.8rem;
	padding: 0.5rem 1rem;
	border: 1px solid #3867d6;

}

table{
	border-collapse: collapse;
}

thead tr{
	border-top: 1px solid #f0f0f0;
	border-bottom: 2px solid #f0f0f0;
}

thead td{
	font-weight: 700;
}

td{
	padding: .5rem 1rem;
	font-size: .9rem;
	color: #222;
}

td .status{
	display: inline-block;
	height: 10px;
	width: 10px;
	border-radius: 50%;
	margin-right: 1rem;

}

tr td:last-child{
	display: flex;
	align-items: center;
}

.status.purple{
	background: rebeccapurple;
}

.status.pink{
	background: deeppink;
}

.status.orange{
	background: orangered;
}

.table-responsive{
	width: 100%;
	overflow-x: auto;
}

.customer{
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: .5rem .7rem;

}

.info{
	display: flex;
	align-items: center;
}

.info img{
	border-radius: 50%;
	margin-right: 1rem;
}

.info h4{
	font-size: .8rem;
	font-weight: 700;
	color: #222;

}

.info small{
	font-weight: 600;
	color: #8390A2;
}

.contact span{
	font-size: 1.2rem;
	display: inline-block;
	margin-left: .5rem;
	color: #3867d6;
}

@media only screen and (max-width: 1200px){

}







	</style>









</head>
<body>

    <input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2> <span>Glaze</span></h2>
			<!-- <img src="glazel.png "> -->

		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="" class="active"><span class="las la-igloo"></span> <span>Dasboard</span></a>
				</li>

				<li>
					<a href="add/display_details.php" class="inactive"><span class="las la-users"></span> <span>Customers</span></a>
				</li>
				<li>
					<a href="" class="inactive"><span class="las la-clipboard-list"></span> <span>Package</span></a>
				</li>
				
				
				<li>
					<a href="" class="inactive" ><span class="las la-user-circle"></span> <span>Venues</span></a>
				</li>
				
			</ul>
		</div>
	</div>
	<div class="main-content">
		<header>
			<h1>
				<label for="nav-toggle">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h1>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />
			</div>
			<div class="user-wrapper">
				<img src="img/2.jpg" width="40px" height="30px" >
				<div>
					<h4>Hazel Doe</h4>
					<small>Super Admin</small>
				</div>
			</div>

		</header>

<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>54</h1>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1>60</h1>
						<span>Projects</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1>124</h1>
						<span>Visits</span>
					</div>
					<div>
						<span class="las la-eye"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1>$60k</h1>
						<span>Income</span>
					</div>
					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>
			</div>
			<div class="recent-grid">
				<div class="projects">
					<div class="card">
						<div class="card-header">
							<h2>Recent Projects</h2>

							<button>See All <span class="las la-arrow-right"></span> </button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table width="100%">
								<thead>
									<tr>
										<td>Project id</td>
										<td>Name</td>
										<td>Status</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>036</td>
										<td>Sophia christman</td>
										<td>
											<span class="status purple">
											</span>
											review
										</td>
									</tr>
									<tr>
										<td>025</td>
										<td>Amelia Evans</td>
										<td>
											<span class="status pink"></span>
											in progress
										</td>
									
										</tr>
								    <tr>
											<td>033</td>
											<td>Selena Gomez</td>
										<td>
											<span class="status orange"></span>
											pending
										</td>
									</tr>
									<td>038</td>
										<td>Anna peterson</td>
										<td>
											<span class="status purple">
											</span>
											review
										</td>
									</tr>
									<tr>
										<td>027</td>
										<td>Lilly collins</td>
										<td>
											<span class="status pink"></span>
											in progress
										</td>
									
										</tr>
								    <tr>
											<td>030</td>
											<td>katelyn cox</td>
										<td>
											<span class="status orange"></span>
											pending
										</td>
									</tr>



								</tbody>

								
							</table>
								
							</div>
						</div>
					</div>

				</div>
				<div class="customers">
					<div class="card">
						<div class="card-header">
							<h3>New Customer</h3>

							<button>See All <span class="las la-arrow-right"></span> </button>
						</div>
						<div class="card-body">
							<div class="customer">
								
								<div class="info">
									<img src="img/4.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Lewis Cunningham</h4>
										<small>CEO Excert</small>
									</div>
									
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<!-- <span class="las la-comment"></span> -->
									<span class="las la-phone"></span>
									
								</div>
								
							</div>
							<div class="customer">
								
								<div class="info">
									<img src="img/4.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Lewis Cunningham</h4>
										<small>CEO Excert</small>
									</div>
									
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<!-- <span class="las la-comment"></span> -->
									<span class="las la-phone"></span>
									
								</div>
								
							</div>
							<div class="customer">
								
								<div class="info">
									<img src="img/4.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Lewis Cunningham</h4>
										<small>CEO Excert</small>
									</div>
									
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<!-- <span class="las la-comment"></span> -->
									<span class="las la-phone"></span>
									
								</div>
								
							</div>
							<div class="customer">
								
								<div class="info">
									<img src="img/4.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Lewis Cunningham</h4>
										<small>CEO Excert</small>
									</div>
									
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<!-- <span class="las la-comment"></span> -->
									<span class="las la-phone"></span>
									
								</div>
								
							</div>
							<div class="customer">
								
								<div class="info">
									<img src="img/4.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Lewis Cunningham</h4>
										<small>CEO Excert</small>
									</div>
									
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<!-- <span class="las la-comment"></span> -->
									<span class="las la-phone"></span>
									
								</div>
								
							</div>
							<div class="customer">
								
								<div class="info">
									<img src="img/4.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Lewis Cunningham</h4>
										<small>CEO Excert</small>
									</div>
									
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<!-- <span class="las la-comment"></span> -->
									<span class="las la-phone"></span>
									
								</div>
								
							</div>
							<div class="customer">
								
								<div class="info">
									<img src="img/4.jpg" width="40px" height="40px" alt="">
									<div>
										<h4>Lewis Cunningham</h4>
										<small>CEO Excert</small>
									</div>
									
								</div>
								<div class="contact">
									<span class="las la-user-circle"></span>
									<!-- <span class="las la-comment"></span> -->
									<span class="las la-phone"></span>
									
								</div>
								
							</div>

						</div>
						
					
				</div>
			</div>

</main>
</div>

</body>
</html>