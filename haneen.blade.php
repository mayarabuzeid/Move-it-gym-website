<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet'href ='css/bootstrap.css'/>
        <link rel='stylesheet'href ='css/font-awesome.min.css'/>
        <link rel='stylesheet'href ='css/style.css'/>
        <link rel='stylesheet'href='css/media.css'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box
 } 
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
            height: 760px;
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
.btn {
      width: 50%;
      background: none;
      border: 2px solid #4caf50;
      color: white;
      padding: 5px;
      font-size: 18px;
      cursor: pointer;
      margin: 12px 0;
    }
    .btn:hover {
      background-color: white;
      color: black;
    }
    .con{
    position: absolute;
    right: 706px;
    top: 106px;
    }
    <link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
}
body{
   background-color: #f3f3f3;
}
.wrapper {
    position: absolute;
    top: 260px;
    left: 680px;
    transform: translate(-50%,-50%);
    width: 1350px;
    display: flex;
}
.wrapper .left{
 ;
 background: linear-gradient(to right,#84bbbc,#257374);
    padding: 124px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    text-align: center;
    color: #fff;
    width: 49%;
    position: absolute;
    top: -161px;
    left: 16px;
}
}
.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}
.wrapper .left h4{
  margin-bottom: 10px;
}
.wrapper .left p{
  font-size: 12px;
}
.wrapper .right{
    width: 49%;
    position: absolute;
    top: -162px;
    right: 16px;
  
    padding: 157px 25px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.wrapper .right .info,
.wrapper .right .projects{
  margin-bottom: 25px;
}
.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: white;
  text-transform: uppercase;
  letter-spacing: 5px;
}
.wrapper .right .info_data,
.wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
}
.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
}
.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4{
    color: white;
    margin-bottom: 5px;
}
.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: white;
}
.wrapper .social_media ul{
  display: flex;
}
.wrapper .social_media ul li{
  width: 147px;
  height: 45px;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
}
.wrapper .social_media ul li a{
  color :#fff;
  display: block;
  font-size: 18px;
  background: linear-gradient(to right,#84bbbc,#257374);
}
</style>
</head>
<header>
<div class="main">
<u1>
                <li ><a href="http://127.0.0.1:8000/">Home</a></li>
                @if (Route::has('login'))
                @auth
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                    @endif
            @endif
                <li><a href="{{ url('/haneen') }}"> {{ Auth::user()->name }}</a></li>
                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></a></li>
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
<?php
$user = auth()->user();
  ?>
                <div class="wrapper">
    <div class="left">
        <img src="{{$user->Avatar}}" 
        alt="user" width="50%">
        <h4> {{$user->name}}</h4>
         <p>Weight Loss</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>{{$user->email}}</p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>{{$user->User_MobileNo}}</p>
              </div>
            </div>
        </div>
      <div class="projects">
            <h3>Health Statistics</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Age</h4>
                    <p>{{$user->Age}}</p>
                 </div>
                 <div class="data">
                   <h4>Weight</h4>
                    <p>{{$user->User_Weight}}</p>
              </div>
              <div class="data">
                   <h4>Height</h4>
                    <p>{{$user->User_Height}}</p>
              </div>
            </div>
        </div>
        <div class="social_media">
            <ul>
              <li><a href="{{route('read')}}">My Exercises</a></li>
              <li><a href="http://127.0.0.1:8000/cart">Cart</i></a></li>
              <li><a href="{{ url('diet') }}">Diet Plan</a></li>
          </ul>
      </div>
    </div>
</div>
</body>
</html>