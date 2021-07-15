

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.container {
  
  font-size: 18px;
  color:black;
  background-color:white ;
  padding: 350px;
  padding-top:100px;
  
}
.imageclass{
 margin-left:-100px;

}
.cartimage{

  margin-left:1200px;
  margin-top:-720px;
  position: absolute;

}
.backgroundimage{

margin-right:20px;


}

input {
  background-color: white;
  color: black;
  width: 100px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}
.bottom-right {
  position: absolute;
  bottom: 400px;
  right: 960px;
  font-size: 60px;
color:#505050;
}
.special{
  background-color:white;
  height:200px;
  width:200px;
  margin-left:150px;
}
.special1{
  background-color:white;
  height:150px;
  width:180px;
  margin-left:50px;
}
header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/tools.jpg);
            width: 1350px;;
            height: 800px;
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
                <li><a href="contact">Contact</a></li>
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
</header>
<div>
<ul>


<div><a href="cart2"><img class="cartimage" src="cart.png" width=70px height=70px title="image" value=image></a></div>


<div class="container">
<table class="table table-condensed table-bordered neutralize"CELLPADDING="2" CELLSPACING="2" WIDTH="200px">     
        <tbody>

        <td>
      
@foreach($product as $i)

<tr>

  <form action="cart2" method="POST">
  @csrf
  <td><div class="special2">
  <h2>&emsp;&emsp;&emsp;&emsp;{{$i->Product_Name}}</h2> 
   <input type="hidden" id="name" name="name" value="{{$i->Product_Name}}">
 <img class="mySlides" src="{{$i->image}}" width=250px height=200px title="image" value=image>
 @if($i->Product_Quantity==0)

<img class="imageclass" src="soldout.png" width=250px height=200px title="image" value=image>
@endif
  </div></td>
<td>
<div class=special1>
<input type="hidden" id="image" name="image" value="{{$i->image}}">
<h4>{{$i->Product_Description}}<h4>
<input type="hidden" id="description" name="description" value="{{$i->Product_Description}}">

<input type="hidden" id="id" name="id" value="{{$i->Product_Id}}">
<h4> PRICE &emsp;${{$i->Product_Price}}</h4>
 </div></td>
 
<input  type="hidden" id="price" name="price" value="{{$i->Product_Price}}">
<td > <div class="special"> <label for="quantity"><h4>Quantity </h4></label>

  <input type="number" id="quantity" name="quantity" min="1" max="10">
  
    <input class="Submiting" type="submit" value="AddToCart" name="add_to_cart">
   </div></td>

  </form>
 
 
</tr>

@endforeach

</td>
</tr>    
 </tbody>
  </table>
  </div>
</ul>


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