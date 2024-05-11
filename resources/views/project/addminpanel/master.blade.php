<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Deshbord</title>
	<!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> -->
	<link rel="stylesheet" href="style.css">
	
	@include('project.dashboard.style')
    <style>
       

:root {
	--main-color: #DD2F6E;
	--color-dark: #1D2231;
	--text-grey: #8390A2;
}

* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	list-style-type: none;
	text-decoration: none;
	font-family: 'Poppins' , sans-serif;

}

.sidebar {
	width: 250px;
	position: fixed;
	left: 0;
	top: 0;
	height:100vh;
	/* overflow:auto; */
	/* background: #8bc9a6; */
	background:  #0A1D56;
	z-index: 100;
	transition: width 300ms;
	
}
.sidebar-brand {
	height: 90px;
	padding: 1rem 0rem 1rem 2rem;
	color: #fff;
}

.sidebar-brand span{
	display: inline-block;
	padding-right: 1rem;


}

.sidebar-menu{
	margin-top: 1rem;
}

.sidebar-menu li{
	width: 100%;
	margin-bottom: 0.5rem;
	padding-left: 1rem;
}

.sidebar-menu a{
	padding:5px 0;
	padding-left: 0.1em;
	display: block;
	color: #fff;
	font-style: 1.1rem;
	text-transform:capitalize;
}
.sidebar-menu a:hover{
	background: #fff;
	/* padding-top: 0.5rem; */
	/* padding-bottom: 0.5rem; */
	color: var(--main-color);
	border-radius: 30px 0px 0px 30px; 
}
.sidebar-menu a.active {
	background: #fff;
	/* padding-top: 1rem; */
	/* padding-bottom: 1rem; */
	color: var(--main-color);
	border-radius: 30px 0px 0px 30px; 
}
.sidebar-menu a span:frist-child {
	font-size: 1rem;
	padding-right: 1rem;
}

#nav-toggle:checked + .sidebar {
	width: 70px;
}
#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li {
	padding-left: 1rem;
	text-align: center;
}
#nav-toggle:checked + .sidebar li a {
	padding-left: 0rem;
}


#nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child {

	display: none;
}

#nav-toggle:checked ~ .main-content{
	/* margin-left:  70px; */
}

#nav-toggle:checked ~ .main-content header {
	width: calc(100% - 1px);
	left: 70px;
}
.main-content {
	transition: margin-left 300ms;
	margin-left: 250px;
}
header {
	background: #fff;
	display: flex;
	justify-content: space-between;
	padding: 1rem 1.5rem;
	box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
	position: fixed;
	left: 250px;
	width: calc(100% - 250px);
	top: 0;
	z-index: 100;
	transition: left 300ms;
}

#nav-toggle {
	display: none;
}

header h2 {
	color: #222;
}
header label span {
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
	width:70%;
}

.search-wrapper span {
	display: inline-block;
	padding: 0rem 1rem;
	font-size: 1.5rem;
}
.search{
	width:80%;
	padding:40px;
}
.search-wrapper input {
  height: 100%;
  padding: .5rem;
  border: none;
  outline: none;
}
.user-wrapper {
	display: flex;
	align-items: center;
}
.user-wrapper img {
	border-radius: 50%;
	margin-right: 1rem;
}

.user-wrapper small {
	display: inline-block;
	color: var(--text-grey);

}
main {
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
  color: var(--main-color);
}
.card-single div:first-child span{
	color: var(--text-grey);
}
.card-single:last-child {
	background: var(--main-color);
}

.card-single:last-child h1,
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span {
	color: #fff;
}

.recent-grid {
	margin-top: 3.5rem;
	display: grid;
	grid-gap: 2rem;
	grid-template-columns: 65% auto;
}

.card {
	background: #fff;
	border-radius: 5px;
}
.card-header {
	padding: 1rem;
}

.card-header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	border-bottom: 1px solid #f0f0f0;
}

.card-header button {
	background: var(--main-color);
	border-radius: 10px;
	color: #fff;
	font-size: .8rem;
	padding: .5rem 1rem;
	border : 1px solid var(--main-color);
}
table {
	border-collapse: collapse;
    width:100%;
	background:white;
	padding-top:20px;
}
th{
	padding:20px 0;
	text-transform:uppercase;
	/* border: 1px solid gray;; */
}
thead tr {
	border-top: 1px solid #f0f0f0;
	border-bottom: 2px solid #f0f0f0;
}
thead td {
	font-weight: 700;
}
td {
	padding: .5rem 1rem;
	font-size: .9rem;
	color: #222;
}
tr{
	border:1px solid gray;
}

td .status {
	display: inline-block;
	height: 10px;
	width: 10px;
	border-radius: 50%;
	margin-right: 1rem;
	
}
tr td:last-child {
	display: flex;
	align-items: center;
	justify-content:center;
}
.status.purple {
	background: rebeccapurple;
}
.status.pink {
	background: deeppink;
}
.status.orange {
	background: orangered;
}
.table-responsive {
	width: 100%;
	overflow-x: auto;
	/* box-shadow:0 0 3px gray; */
	border-radius:5px;
}
.customer {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: .5rem .7rem;
}
.info {
	display: flex;
	align-items: center;
}

.info img {
	border-radius: 50%;
	margin-right: 1rem;
}
.info h4 {
	font-size: .8rem;
	font-weight: 700;
	color: #222;
}
.info small {
	font-weight: 600;
	color: var(--text-grey);
}
.contact span {
	font-size: 1rem;
	display: inline-block;
	margin-left: .5rem;
	color: var(--main-color);
}



@media only screen and (max-width: 1200px) {

	.sidebar {
		width: 70px;
	}
	.sidebar .sidebar-brand,
	.sidebar li {
		padding-left: 1rem;
		text-align: center;
	}
	 .sidebar li a {
		padding-left: 0rem;
	}


	.sidebar .sidebar-brand h2 span:last-child,
	.sidebar li a span:last-child {

		display: none;
	}

	.main-content{
		margin-left:  70px;
	}

	.main-content header {
		width: calc(100% - 1px);
		left: 70px;
	}

}


@media only screen and (max-width: 960px) {
	.cards {
		grid-template-columns: repeat(3, 1fr);
	}
	.recent-grid {
		grid-template-columns: 80% 40%;
	}
}


@media only screen and (max-width: 768px) {
	.cards {
		grid-template-columns: repeat(2, 1fr);
	}
	.recent-grid {
		grid-template-columns: 100%;
	}
	.seacrh-wrapper {
		display: none;
	}
	
	.sidebar {
		left: -100% !important;
	}
      
      header h2 {
      	display: flex;
      	align-items: center;
      }

	header h2 label {
		display: inline-block;
		background: var(--main-color);
		padding-right: 0rem;
		margin-right: 1rem;
		height: 40px;
		width: 40px;
		border-radius: 50%;
		color: #fff;
		display: flex;
		align-items: center;
		justify-content: center !important;
	}


	header h2 span {
		text-align: center;
		padding-right: 0rem;
	}

	header h2 {
		font-size: 1.1rem;
	}

  .main-content {
  	width: 100%;
  	margin-left: 0rem;
  }

 header {
 	width: 100% !important;
 	left: 0 !important;
 }
 #nav-toggle:checked + .sidebar {
 	left: 0 !important;
 	z-index: 100;
 	width: 345px;
 }

  #nav-toggle:checked + .sidebar .sidebar-brand,
   #nav-toggle:checked + .sidebar li{
		padding-left: 2rem;
		text-align: left;
	}
	 #nav-toggle:checked + .sidebar li a {
		padding-left: 1rem;
	}

	 #nav-toggle:checked +.sidebar  .sidebar-brand h2 span:last-child,
	 #nav-toggle:checked +.sidebar li a span:last-child {

		display: inline;
	}
   
    #nav-toggle:checked ~ .main-content {
    	margin-left: 0rem !important;
    }
}

@media only screen and (max-width: 560px) {
	.cards {
		grid-template-columns: 100%;
	}
}
    img{
        width:80px;
        height: 60px;
    }
    .form{
        display:flex;
		align:center;
    }

	.admin{
		color:white;
		font-size:0.8em;
		letter-spacing:1px;
	}
	.public{
		font-size:25px;
		letter-spacing:16px;
	}
	input[type="submit"]{
		background:none;
		border:none;
		width:80px;
		padding:5px 0;
		background-color:#492E87;
		box-shadow:0 0 3px gray;
		text-transform:uppercase;
		color:white;
		border-radius:5px;
		transition:1s;
		cursor: pointer;
	}
	.edit{
		border-radius:5px;
		color:black;
		padding:4px 0;
		display:inline-block;
		width:80px;
		background:#492E87;
		color:white;
		box-shadow:0 0 3px gray;
		text-transform:uppercase;
		transition:1s;
	}
	.edit:hover{
		background:lightblue;
		color:black;
	}
	table tr td form input[type="submit"]:hover{
		color:white;
		background:red;
	}
	#create{
		display:inline-block;
		width:150px;
		padding:5px 0;
		background:#0A1D56;
		box-shadow:0 0 3px gray;
		color:white;
		margin:10px;
		
		text-align:center;
		border-radius:3px;
		/* margin-top:10px; */
	}
	#create:hover{
		background:#0A1D90;
	}
	textarea{
		margin-bottom:10px;
	}
	textarea,select{
		border:none;
		box-shadow:0 0 3px gray;
		outline:none;
	}
	select{
		outline:none;
	}
	
	input[type="radio"]{
        margin-top:10px;
    }
    </style>
</head>
<body>
  
 <input type="checkbox" id="nav-toggle">
 @include('project.dashboard.aside')
 
 
<div class="main-content">
	<header>
		<h2>
		<label for="nav-toggle">
			<span class="las la-bars"></span>
		</label>

		Dashboard
	</h2>

   <div class="search-wrapper">
   	 <span class="las la-search"></span>
   	 <input type="search" placeholder="Search here" />
   </div>

   <div class="user-wrapper">
   	<img src="img/3.jpg" width="40px" height="40px" alt="">
   <div>
       <h4>FOYSAL</h4>
       <small>Web Designer</small>

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
 		  <h1>79</h1>
 		  <span>Projects</span>
 		</div>

 	   <div>
	 		<span class="las la-clipboard-list"></span>
	 	</div>
	  </div>
	  	<div class="card-single">
 		<div>
 		  <h1>124</h1>
 		  <span>Orders</span>
 		</div>

 	   <div>
	 		<span class="las la-shopping-bag"></span>
	 	</div>
	  </div>
	  	<div class="card-single">
 		<div>
 		  <h1>$6k</h1>
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
 				<h3>Recent Projects</h3>
 				<button>See all <span class="las la-arrow-right">
 					
 				</span></button>
 		</div>

 		<div class="card-body">
 		  <div class="table-responsive">
 		  		@yield('content')
 		  </div>
 		</div>
 	  </div>
 	</div>
 	

 	</div>
 </div>
 

 </main>

</div>
</body>
</html>


 