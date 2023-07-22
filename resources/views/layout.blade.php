<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Shalom Royal Quarters</title>
<meta name="Generator" content="Alleycode HTML Editor">
<meta name="Description" content="Your description here...">
<meta name="Keywords" content="Your keywords here...">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
#wrapper{

              width:1024px;
              Height:768px;
              background-color:#639C7B;
              margin:auto;
}
#banner{
      width:1024px;
      height:220px;
      background-color:#639c7b;
	  background-image:'/images/house.jpg';
}

#menutop{
      width:1024px;
      height:25px;
      background-color:white;
}
#columnleft{
      width:220px;
      height:438px;
      background-color:khaki;
      float:left;
	  border-width: 5px;
      border-style: solid;
      border-color: #00A4BD;
}
#columnright{
      width:220px;
      height:438px;
      background-color:khaki;
      float:right;
	   border-width: 5px;
      border-style: solid;
      border-color: #00A4BD;
}
}
#updates{
	width:220px;
      height:25px;
	background-color:magenta;
}
#content{
      width:584px;
      height:438px;
      background-color:white;
      margin-left:220px;
	   border-width: 5px;
      border-style: solid;
      border-color: #00A4BD;
}
#footer{
	
	text-align:center;
	text-color:white;
}

nav{
	text-color:black;
}

</style>
</head>

<body>

<div id="wrapper">
   <div id="banner" align=center>
        <img src="/images/house.jpg" width=100% height=100%		</img>
   </div>
   <div id="menutop">
<nav font-color=white>

<a href="/">Home</a> |
<a href="services">Services</a> |
<a href="gallary">Gallery</a> |
<a href="contacts">Contacts</a>
</nav>
   </div>
   <div id="columnleft">
   <br>
	<ul>
           	<li><a href="?id=1">Terms and Conditions</a></li><br>
					<li><a href="?id=2">Agreement Form</a></li><br>
					<li><a href="?id=3">Frequently Ask Questions</a></li>
						
		</ul>
   </div>
   <div id="columnright">
          <div id="updates">
		      <h3 align=center>Notice Board</h3>
			  <img src="/images/photo4.jpg" width=100% height=80%>
		  </div>
   </div>
   <div id="content">
     @yield('title')
     @yield('content')
   </div>
   <div id="footer" >
               <footer>
			   <br>
		<p>Copyright: Shalom Royal Quarters 2022</p>
		
		</footer
   </div>
</div>

</body>
</html>
