<!DOCTYPE html>
<html>
<title>Subscribtion failed</title>

<head>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body class="w3-container w3-auto">

    <h2 style="color:white;">FAILED!!!</h2>
    <div class="w3-panel w3-pale-red w3-border">
        <h3>Failed!</h3>
        <p>You should subscribe to premium!</p>
    </div>
    </div>
    <button onclick="goBack()">Go Back-></button>
    </div>
    </div>
    <a href="{{route('subscribe')}}">
        <button>Subcribe</button>
    </a>

    </div>
</body>
<script>
    function goBack() {
        location.href = document.referrer;
    }
</script>

</html>