<!DOCTYPE html>
<html>
<!-- <meta charset="utf-8"> -->
<head>
    <title>I'm the trainer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Century Gothic;
            box-sizing: border-box;
        }
        header {
            background-color: black;
            width: 100%;
            height: 100px;
            background-size: cover;
            background-position: center;
            color: black;
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
            padding-left: 50px;
            height: auto;
            z-index: -1;
        }
        .fav {
            background-color: white;
            border: 5px solid white;
            border-radius: 20px;
            width: 100px;
            height: 100px;
            margin-top: 2%;
            margin-left: 25%;
        }
        .premium {
            position: absolute;
            width: 10px;
            margin-left: 40%;
            margin-top: 2%;
        }
        img {
            max-width: 100%;
            float: left;
        }
        .back {
            background-color: black;
            background-size: cover;
            background-position: center;
        }
        .product-top h3,
        .product-top p1 {
            margin-top: 10%;
        }
        .row {
            margin-bottom: 50px;
            margin-top: 50px;
            height: 600px;
            background-color: #f1f1f1;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
        .card {
            text-align: center;
            padding: 40px;
            color: black;
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
    </style>
</head>
<body>
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
            
                <h1 style="font-size:40px; color:white; padding:20px; margin-left:9%; "><b>Done Exercises</b></h1>
            </div>
        </div>
    </header>
    @foreach($Exercise as $row)
    <div class="row">
        <div class="column">
            <div class="card">
                <a href="{{ route('single', $row->Exercise_Id) }}" target="exercise" id="{{$row->Exercise_Id}}">
                    <img src="/img/{{$row->Exercise_Img}}" style=" width:800px;height:auto;">
                </a>
                @if($row->Exercise_Premium == "true")
                <div class="premium" id="premium" title="Premium feature">
                    <i class=" fa fa-lock"></i>
                </div>
                @endif
            </div>
            <div class="card">
                <h3 style="font-size:50px"><b>{{$row->Exercise_Name}}</b></h3>
                <p1 style="font-size:40px"><b>Calorie Burn:</b> {{$row->Exercise_Calorie}}<br>
                    <b>Difficulty:</b> {{$row->Exercise_Difficulty}}<br>
                    <b>Equipment:</b> {{$row->Exercise_Equipment}}
                </p1>
            </div>
        </div>
    </div>
    @endforeach
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
</body>
</html>