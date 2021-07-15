<!DOCTYPE html>
<html>
<!-- <meta charset="utf-8"> -->
<head>
    <title>I'm the trainer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Century Gothic;
        }
        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/1.jpg);
            width: 100%;
            height: 1000px;
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
            padding-left: 50px;
            height: auto;
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
        .btn_group {
            margin-top: 30px;
            margin-left: 70px;
        }
        .btn {
            border: 2px solid #3498db;
            background: none;
            color: white;
            padding: 32px 16px;
            text-align: center;
            font-size: 50px;
            cursor: pointer;
            margin: 10px;
            transition: 0.8s ease;
            border-radius: 6px;
            width: 230px;
            height: 30px;
        }
        .btn {
            border: 2px solid #3498db;
            background: none;
            color: white;
            padding: 32px 16px;
            text-align: center;
            font-size: 50px;
            cursor: pointer;
            margin: 10px;
            transition: 0.8s ease;
            border-radius: 6px;
            width: 450px;
            height: 30px;
            margin-top: 30px;
            margin-left: 70px;
        }
        .subscribed {
            border: 2px solid #3498db;
            background: none;
            color: black;
            padding: 32px 16px;
            text-align: center;
            font-size: 50px;
            margin: 10px;
            border-radius: 6px;
            width: 300px;
            height: 30px;
            margin-top: 30px;
            margin-left: 70px;
            background-color: white;
        }
        .premium {
            display: block;
            position: absolute;
            margin-left: 80%;
            top: 10%;
            width: 10px;
        }
        .container {
            width: 100%;
            margin-top: 5%;
        }
        .row {
            margin-top: 30px;
            margin-bottom: 60px;
            /* display: inline-block; */
        }
        .col-md-3 {
            transition: transform 0.5s;
        }
        .col-md-3:hover {
            transform: translateY(-10px);
        }
        .col-md-3 img {
            width: 100%;
            height: 100%
        }
        .product-top h3,
        .product-top h6 {
            text-align: center;
        }
        .overlay {
            display: block;
            /* opacity: 0; */
            position: absolute;
            top: 10%;
            margin-left: 0;
            width: 15px;
        }
        .product-top:hover .overlay {
            opacity: 1;
            margin-left: 5%;
            transition: 0;
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
           
            <div class="header">
                @foreach (array_slice($Exercise, 0, 1) as $row)
                <h1>DO <br>YOUR <br>{{$row->Exercise_Type}}s</h1>
                @endforeach
                @if($User==null)
                <a href="{{route('subscribe')}}">
                    <input id="subscribe" class="btn" value="SUBSCRIBE-50L.E">
                </a>
                @elseif($User->User_Premium == "true")
                <input id="subscribed" class="subscribed" value="PREMIUM">
                @else
                <a href="{{route('subscribe')}}">
                    <input id="subscribe" class="btn" value="SUBSCRIBE-50L.E">
                </a>
                @endif
            </div>
        </div>
       
    </header>
    <div class="container" id="contanier">
        <div class="row">
            @foreach($Exercise as $row)
            <div class="col-md-3">
                <div class="product-top">
                    @if($User!=null)
                    <a @if($row->Exercise_Premium=="true" and $User->User_Premium=="false") href="/subscribtion" @else href="{{route('single', $row->Exercise_Id)}}" @endif target="exercise" id="{{$row->Exercise_Id}}">
                        <img src="img/{{$row->Exercise_Img}}">
                    </a>
                    @else
                    <a @if($row->Exercise_Premium=="false") href="{{ route('single', $row->Exercise_Id) }}" @else href="/subscribtion"
                        @endif target="exercise" id="{{$row->Exercise_Id}}">
                        <img src="img/{{$row->Exercise_Img}}">
                    </a>
                    @endif
                    <div class="overlay">
                        <a href="{{route('fav', $row->Exercise_Id)}}">
                            <img src="img/heart_empty.png">
                        </a>
                    </div>
                    @if($User!=null)
                    @foreach($Fav as $fv)
                    <div class="overlay">
                        <a href="{{route('fav', $row->Exercise_Id)}}">
                            @if($fv->Exercise_ID!=$row->Exercise_Id)
                            <img src="img/heart_empty.png">
                            @else
                            <img src="img/heart_fill.png">
                            @endif
                        </a>
                    </div>
                    @endforeach
                    @endif
                    @if($row->Exercise_Premium == "true")
                    <div class="premium" id="premium" title="Premium feature">
                        <i class=" fa fa-lock"></i>
                    </div>
                    @endif
                    <h3>{{$row->Exercise_Name}}</h3>
                    <h6>Calorie Burn: {{$row->Exercise_Calorie}}
                        Difficulty: {{$row->Exercise_Difficulty}}
                        Equipment: {{$row->Exercise_Equipment}}
                    </h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
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