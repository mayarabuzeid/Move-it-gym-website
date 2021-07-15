<!DOCTYPE html>
<html>
<title>gym</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {background-color: black;}
.btn {
  background-color: black;
  border: none;
  color: white;
  padding: 13px 25px;
  font-size: 16px;
  margin-left:30px;
  margin-top:0px;
  cursor: pointer;
  border: 2px solid grey; 
}
.btn:hover {
  background-color: white; 
  color: black;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-left:1200px;
  top: 0;
  cursor: pointer;
}
.button1 {
  background-color: black; 
  color: white; 
  border: 2px solid grey;
}
.button:hover {
  background-color: white; 
  color: black;
}
.bt2 {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 27px;
  font-size: 16px;
  margin-left:1200px;
  top: 0;
  cursor: pointer;
  border: 2px solid grey; 
}
.bt2:hover {
  background-color: white; 
  color: black;
}
/* The sidebar menu */
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
}
.mySlides {display:none;}
header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/1.jpg);
            width: 100%;
            height: 900px;
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
</style>
<body>
<header>
<div class="main">
<u1>
                <li><a href="http://127.0.0.1:8000/">Home</a></li>
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
<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776; Menu</button>
</div>
<div class="w3-content w3-display-container">
<img class="mySlides" src="1.png" style="width:100%" width="1000" height="400">
<img class="mySlides" src="2.png" style="width:100%" width="1000" height="400">
  <img class="mySlides" src="4.png" style="width:100%" width="1000" height="400">
  <img class="mySlides" src="3.png" style="width:100%" width="1000" height="400">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
</header>
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
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
</body>
</html>