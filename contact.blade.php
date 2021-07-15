<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet'href ='css/bootstrap.css'/>
        <link rel='stylesheet'href ='css/font-awesome.min.css'/>
        <link rel='stylesheet'href ='css/style.css'/>
        <link rel='stylesheet'href='css/media.css'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
/* Add padding to containers */
.container {
  padding: 16px;
  text-align: center;
  margin-left: 300px;
  margin-right: 300px;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    margin-left: 300px;
  margin-right: 300px;
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/5.png);
            width: 100%;
            height: 1300px;
            background-size: cover;
            background-position: center;
            color: white;
            text-align: left;
            font-size: 30px;
        }
        u1 {
            float: right;
            list-style-type: none;
            margin-top: 25px;
        }
        u1 li {
            display: inline-block;
        }
        u1 li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }
        u1 li a:hover {
            background-color: white;
            color: black;
        }
        u1 li.active a {
            background-color: white;
            color: black;
        }
        .logo img {
            float: left;
            width: 150px;
            padding-left: 0px;
            height: auto;
            top: 0;
            z-index: -1;
        }
        .header {
            position: absolute;
        }
        .header h1 {
            padding-top: 150px;
            padding-left: 50px;
            font-size: 150px;
        }
        .header li {
            display: inline-block;
        }
        .sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}
/* The sidebar links */
.sidebar a , .dropdown-btn {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  width: 100%;
  background: none;
  color: white;
  display: block;
  transition: 0.3s;
}
/* When you mouse over the navigation links, change their color */
.sidebar a:hover, .dropdown-btn:hover {
  background-color: white; 
  color: black;
}
/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: white;
}
/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: black;
  color: white;
  padding: 10px 15px;
  border: none;
}
.openbtn:hover {
  background-color: white; 
  color: black;
}
/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.active {
  background-color: white; 
  color:black;
}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: black;
  padding-left: 8px;
}
/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
  color: white;
}
/* Set a style for the submit button */
    .con{
    position: absolute;
    right: 706px;
    top: 106px;
    color:white;
    }
</style>
</head>
<header>
<div class="main">
<u1>
                <li ><a href="http://127.0.0.1:8000/">Home</a></li>
                @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/haneen') }}">Profile</a></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                    @endif
            @endif
                <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
            </u1>

            <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://127.0.0.1:8000/trainer">I'm The Trainer</a>
  <a href="http://127.0.0.1:8000/cart">Shop Now</a>
  <a href="http://127.0.0.1:8000/contact">Contact Us</a>
  <a href="{{route('read')}}">Done</a>
  <a href="{{route('readfav')}}">Fav</a>
  <button class="dropdown-btn">Private Trainer
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="http://127.0.0.1:8000/home2/classes/zumba">ZUMBA</a>
    <a href="http://127.0.0.1:8000/home2/classes/yoga">YOGA</a>
    <a href="http://127.0.0.1:8000/home2/classes/aerobics">AEROBICS</a>
    <a href="http://127.0.0.1:8000/home2/classes/machines">MACHINES</a>
  </div>
  <button class="dropdown-btn">SPA Treamtments
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="http://127.0.0.1:8000/Massage">Massage</a>
    <a href="http://127.0.0.1:8000/Sauna">Sauna</a>
    <a href="http://127.0.0.1:8000/Facial">Facial</a>
    <a href="http://127.0.0.1:8000/Jacuzzi">Jacuzzi</a>
  </div>
</div>
</div>
<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776; Menu</button>
</div>
    <body>        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            </div>
        </div>
    </div>
</div>
</header>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<div class="con">
<p>
<h1>Contact Us</h1>
<h2>Phone Number</h2>
03-5425637  - 03-5425638  - 01001003394  - 01200120057
<h2>Work Hours</h2>
10AM-7PM
<h2>Socials</h2>
 <a class="btn btn-social-icon btn-instagram">
  <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=11&cad=rja&uact=8&ved=2ahUKEwiH0daK-7DlAhWRsnEKHZfdApsQFjAKegQIBBAB&url=https%3A%2F%2Fwww.instagram.com%2Fdalia.derma%2F&usg=AOvVaw0sef9HTM1xdqQP6jeGwnzy">  <span class="fa fa-instagram"></a> </span>
  </a>
 <a class="btn btn-social-icon btn-facebook">
  <a href="https://www.facebook.com/daliadermaclinic">  <img src="facebook.png" height=50px width=50px/></a> 
  </a>
 <h2>Location</h2>
<h2>Address</h2>                                                                  
<p>314, El-Horrya st, cleopatra, Alexandria, Egypt.</p>
<p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6824.503672295551!2d29.937135875684483!3d31.213751575888256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c5956a29d735%3A0xaed23428e8cb59a7!2sDalia%20Derma%20Clinic!5e0!3m2!1sen!2seg!4v1571779112731!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>																		  
</p></div>
</p>
</p>
</div>
</div>
						     <div class="piccon">
</body>
</html>