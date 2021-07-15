<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: #F0F0F0;
  font-family: 'Roboto', sans-serif;
}
button[class*=btn] {
    width: px;
    /* height: 30px; */
    background-color: #020202;
    /* border-radius: 6px; */
    /* border: none; */
    cursor: pointer;
}
.active {
    background-color: white;
    /* color: black; */
}

.sidebar a, .dropdown-btn {
    padding: 8px32px;
    text-decoration: none;
    font-size: 25px;
    /* width: 200px; */
    height: 50px;
    /* background: none; */
    color: white;
    display: block;
    transition: 0.3s;
}

* {
    box-sizing: border-box;
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


.shopping-cart {
  width: 1200px;
  height: 1000px;
  margin: 80px auto;
  background: #FFFFFF;
  box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
  border-radius: 6px;
 
  display: flex;
  flex-direction: column;
}

.checkout {
  width: 400px;
  height: 550px;
  margin: 80px auto;
  background: #FFFFFF;
  box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
  border-radius: 6px;
 background-color: #F0F0F0;
 margin-left:600px;
 margin-top:150px;
 color:black;
  display: flex;
  flex-direction: column;
}

.title {
  height: 60px;
  border-bottom: 1px solid #E1E8EE;
  padding: 20px 30px;
  color: #5E6977;
  font-size: 18px;
  font-weight: 400;
}
 
.item {
  padding: 20px 30px;
  height: 120px;
  display: flex;
}
 
.item:nth-child(3) {
  border-top:  1px solid #E1E8EE;
  border-bottom:  1px solid #E1E8EE;
}
.buttons {
  position: relative;
  padding-top: 30px;
  margin-right: 60px;
  
}
.delete-btn,
 {
  display: inline-block;
  Cursor: pointer;
  
}
.delete-btn {
  width:192px;;
  height: 17px;
 margin-left:-210px; 
  background: url(&amp;quot;delete-icn.svg&amp;quot;) no-repeat center;
}
 
.button2 {
  width:192px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-left:120px;
  cursor: pointer;
}

.button3 {background-color: black;}

.button4 {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-left:120px;
  width:195px;
  cursor: pointer;
}

.button5 {background-color: black;}
.button6 {
  width:85px;
  height:38px;
  border: none;
  color: black;
  padding: 14px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  margin-left:150px;
  cursor: pointer;
}

.button7 {background-color: #F0F0F0;}
.button8 {
  width:88px;
  height:38px;
  border: none;
  color: black;
  padding: 14px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  margin-left:-89px;
  margin-top:50px;
  cursor: pointer;
}

.button9 {background-color: #F0F0F0;}

.is-active {
  animation-name: animate;
  animation-duration: .8s;
  animation-iteration-count: 1;
  animation-timing-function: steps(28);
  animation-fill-mode: forwards;
}
 
@keyframes animate {
  0%   { background-position: left;  }
  50%  { background-position: right; }
  100% { background-position: right; }
}
.image {
  margin-right: 50px;
}
 


.q {
  padding-top: 20px;
  margin-right: 60px;
}
.q input {
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 32px;
  font-size: 16px;
  color: #43484D;
  font-weight: 300;
}
 

 
button:focus,
input:focus {
  outline:0;
}
.total-price {
  width: 83px;
  padding-top: 27px;
  text-align: center;
  font-size: 16px;
  color: #43484D;
  font-weight: 300;
}
@media (max-width: 800px) {
  .shopping-cart {
    width: 100%;
    height: auto;
    overflow: hidden;
  }
  .item {
    height: auto;
    flex-wrap: wrap;
    justify-content: center;
  }
  .image img {
    width: 50%;
  }
  .image,
  .quantity,
  .description {
    width: 100%;
    text-align: center;
    margin: 6px 0;
  }
  .buttons {
    margin-right: 20px;
  }
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
            color: black;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }
        u1 li a:hover {
            background-color: grey;
            color: white;
        }
        u1 li.active a {
            background-color: grey;
            color: white;
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
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.sidebar {
  height: 600px; /* 100% Full-height */
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
  padding: 8px32px;
  text-decoration: none;
  font-size: 25px;
  height:50px;

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
.btn {
      width: 100%;
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
.btn {
      width: 100%;
      background: none;
      border: 2px solid #4caf50;
      color: black;
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


<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Shopping Bag
  </div>
  <input type="hidden" id="sum" name="sum" value="{{$sum=0}}">
  @foreach($cart as $i)

  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
    
      <img src="{{$i->image}}" alt="" width=100px height=100px title="image" value=image/>
    
       
    </div>
    <div>
    <h4>{{$i->productname}}</h4>
    <h6>{{$i->description}}</h6>
    </div>
    &emsp;&emsp;
   <div> 
    <h4>Qty {{$i->quantity}}</h4>
    
      <input type="hidden" id="quantity" name="quantity" value="{{$i->quantity}}">
    
     
     
    </div>
    &emsp;&emsp;
    <div >
     <h4>Price</h4> 
    <h5> ${{$i->product_price}}</h5></div>
    <div >
    
    <input type="hidden" id="name" name="name" value="{{$i->productname}}">
    
    <a href="/delete/{{$i->productname}}"><button class="button6 button7" type="button" name="button" > Remove</button></a>
    
    </div>
    <div >
    
    
    <a href="cart"><button class="button8 button9" type="button" name="button" > Edit</button></a>
    
    </div>

 
   
  </div>
          
  <input type="hidden" id="total" name="total" value="{{$sum=$sum+$i->product_price}}">   
       
  @endforeach
  <div class="checkout">
  <br><br><br>
  <h3>&emsp;&emsp;Summary&emsp;</h3>
    <h5>&emsp;&emsp;&emsp;Subtotal&emsp;</h5>
    <h5>&emsp;&emsp;&emsp;Tax&emsp;</h5> 
    <h5>&emsp;&emsp;&emsp;Shipping&emsp;</h5>  
    <h4>&emsp;&emsp;TOTAL&emsp;${{$sum}}</h4> 
<div>
   <a href="cashondelivery"> <button class="button2 button3">Cash on delivery </button></a>
</div>
   <div>
  <a href="payment"> <button class="button4 button5">Use your Wallet</button></a>
   </div>
  
</div>
</ul>
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