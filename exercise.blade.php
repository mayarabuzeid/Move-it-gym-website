<!DOCTYPE html>
<html>
<!-- <meta charset="utf-8"> -->
<head>
    <title>Exercise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Century Gothic;
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

        .btn_group {
            margin-top: 30px;
        }
        .btn_group li {
            display: inline;
        }
        .btn {
            border: 2px solid #3498db;
            background: none;
            color: black;
            padding: 32px 16px;
            text-align: center;
            font-size: 50px;
            cursor: pointer;
            margin: 10px;
            transition: 0.8s ease;
            border-radius: 6px;
            width: 180px;
            height: 30px;
        }
        .btn:hover {
            background-color: black;
            color: white;
            border: 2px solid white;
            border-radius: 20px;
        }
        .btn:active {
            background-color: black;
            color: white;
            border: 5px solid #3498db;
            border-radius: 20px;
        }
        .container {
            margin-top: 5%;
            display: flex;
            align-items: center;
            position: absolute;
            left: 2%;

        }

        .fav {
            background-color: white;
            border: 5px solid white;
            border-radius: 20px;
            width: 50px;
            height: auto;
            position: absolute;
            top: -18px;
            left: 625px;
        }
        :root {
            --speed: 0;
        }
        .circular {
            height: 200px;
            width: 200px;
            position: relative;
            left: 10%;
        }
        .circular .inner,
        .circular .outer,
        .circular .circle {
            position: absolute;
            z-index: 6;
            height: 100%;
            width: 100%;
            border-radius: 100%;
            box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.2);
        }
        .circular .inner {
            top: 50%;
            left: 50%;
            height: 160px;
            width: 160px;
            margin: -80px 0 0 -80px;
            background-color: white;
            border-radius: 100%;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        }
        .circular .circle {
            z-index: 1;
            box-shadow: none;
        }
        .circular .numb {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            font-size: 100px;
            font-weight: 2000;
            color: black;
        }
        .circular .bar {
            position: absolute;
            height: 100%;
            width: 100%;
            background: #4158d0;
            -webkit-border-radius: 100%;
            clip: rect(0px, 200px, 200px, 100px);
        }
        .circle .bar .progress {
            position: absolute;
            height: 100%;
            width: 100%;
            -webkit-border-radius: 100%;
            clip: rect(0px, 100px, 200px, 0px);
        }
        .circle .bar .progress,
        .dot span {
            background: #dde6f0;
        }
        .circle .left .progress {
            z-index: 1;
            animation: left calc(var(--speed) * 1s) linear both;
        }
        @keyframes left {
            100% {
                transform: rotate(180deg);
            }
        }
        .circle .right {
            transform: rotate(180deg);
        }
        .circle .right .progress {
            z-index: 3;
            animation: right calc(var(--speed) * 1s) linear both;
            animation-delay: calc(var(--speed) * 1s);
        }
        @keyframes right {
            100% {
                transform: rotate(180deg);
            }
        }
        .circle .dot {
            z-index: 2;
            position: absolute;
            left: 50%;
            top: 50%;
            width: 50%;
            height: 20px;
            margin-top: -10px;
            animation: dot calc(var(--speed) * 2s) linear both;
            transform-origin: 0% 50%;
        }
        .circle .dot span {
            position: absolute;
            right: 0;
            width: 20px;
            height: 20px;
            border-radius: 100%;
        }
        @keyframes dot {
            0% {
                transform: rotate(-90deg);
            }
            50% {
                transform: rotate(90deg);
                z-index: 4;
            }
            100% {
                transform: rotate(270deg);
                z-index: 4;
            }
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
           
        </div>
      
    </header>
    <div class="container">
        <div class="col-3">
            @if($Exercise->Exercise_Premium == "true")
            <div class="premium" id="premium" title="Premium feature " style="left: 10%; position: absolute; top: 0%;">
                <i class=" fa fa-lock"></i>
            </div>
            @endif
            <a href="{{route('fav', $Exercise->Exercise_Id)}}">
                <img src="/img/heart_empty.png" class="fav" id="empty" style="display: block;">
            </a>
            @if($User!=null)
            @foreach($Fav as $fv)
            <div class="overlay">
                <a href="{{route('fav', $Exercise->Exercise_Id)}}">
                    @if($fv->Exercise_ID==$Exercise->Exercise_Id)
                    <script>
                        document.getElementById("empty").style.display = "none";
                    </script>
                    <img src="/img/heart_fill.png" class="fav">
                    @endif
                </a>
            </div>
            @endforeach
            @endif
            @if($Exercise->Exercise_Type == "Gif")
            <img src="/dis/{{$Exercise->Exercise_Display}}" style="width:800px;height:auto;">
            @else
            <video width="700" height=auto style="padding-right: 30px;" controls>
                <source src="/dis/{{$Exercise->Exercise_Display}}">
            </video>
            @endif
        </div>
        <div class="col-3">
            <h3 style="font-size:50px"><b>{{$Exercise->Exercise_Name}}</b></h3>
            <p1 style="font-size:40px"><b> Burn:</b> {{$Exercise->Exercise_Calorie}} <br>
                <b>Difficulty:</b> {{$Exercise->Exercise_Difficulty}}<br>
                <b>Equipment: </b>{{$Exercise->Exercise_Equipment}}<br>
            </p1>
            <p1 style="font-size:40px" id="duration">
                <b>Duration: </b>{{$Exercise->Exercise_Duration}}
            </p1>
            <div class="btn_group" id="btn_group">
                <li><input type="start" class="btn" id="start" value="START"></li>
                <li><a href="{{route('done', $Exercise->Exercise_Id)}}"><input class=" btn" id="done" value="DONE"></a></li>
            </div>
        </div>
        <div class="col-3">
            <div class="circular" id="circular">
                <div class="inner">
                </div>
                <div class="outer">
                </div>
                <div class="numb">
                </div>
                <div class="circle">
                    <div class="dot">
                        <span></span>
                    </div>
                    <div class="bar left">
                        <div class="progress">
                        </div>
                    </div>
                    <div class="bar right">
                        <div class="progress">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var start = document.getElementById("start");
        const numb = document.querySelector(".numb");
        var duration = "{{$Exercise->Exercise_Duration}}";
        var type = "{{$Exercise->Exercise_Type}}";
        var count = 0;
        if (type == "Video") {
            document.getElementById("duration").style.display = "none";
            document.getElementById("circular").style.display = "none";
            document.getElementById("start").style.display = "none";
        }
        start.onclick = function() {
            start.style.backgroundColor = "black";
            start.style.color = "white";
            let counter = duration;
            if (count > 0) {
                $('input[type="start"]').attr('disabled', 'disabled');
            }
            count++;
            setInterval(() => {
                if (counter == 0) {
                    clearInterval();
                    start.style.backgroundColor = null;
                    start.style.color = null;
                    circular.style = null;
                } else {
                    counter -= 1;
                    document.documentElement.style.setProperty('--speed', counter);
                    numb.textContent = counter;
                }
            }, 1000);
            empty();
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