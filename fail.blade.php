<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: #F0F0F0;
  font-family: 'Roboto', sans-serif;
}
.shopping-cart {
  width: 1000px;
  height: 450px;
  margin: 80px auto;
  background: #FFFFFF;
  box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
  border-radius: 6px;
   margin-top:40px;
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
  width:150px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-left:180px;
  margin-top:50px;
  cursor: pointer;
}
.button3 {background-color: black;}
.button3:hover {
  background-color: #F0F0F0; 
  color: black;
}
.button4 {
  width:160px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-left:100px;
  margin-top:50px;
  cursor: pointer;
}
.button5 {background-color: black;}
.button5:hover {
  background-color: #F0F0F0; 
  color: black;
}

image {
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
button[class*=btn] {
  width: 30px;
  height: 30px;
  background-color: #E1E8EE;
  border-radius: 6px;
  border: none;
  cursor: pointer;
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
</style>
</head>
<body>

<div>
<ul>
<a href="/"><img class="cartimage" src="home.png" width=50px height=50px title="image" value=image></a>
<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Checkout
  </div>

  
  <div  >

    
 <h4> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Your Transaction Failed</h4>
 <a href="cart"><button class="button2 button3" type="button" name="button" >Back To Shopping</button></a>
 <a href="/deleteall/"><button class="button4 button5" type="button" name="button" >Remove <br>Order</button></a> 
    </div>

 

 


  

 

</div>
</ul>
</div>


</body>
</html>