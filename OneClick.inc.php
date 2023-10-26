<html>
<head>
  <title> Clickable Button </title>
</head>
<body>
    <div class = "panel panel-default">
    <div class = "pull-right"> 
    <img src = "plugins/OneClick/images/USLA.png" title = "USA LOGO" style = "max-height: 80px">
    </div>
  </div>
  
    <button id = "myButton"> Click Me </button>

        <script>
              var button = document.getElementById("myButton");

              button.addEventListener("click", function() {
                alert("Button Clicked");
              });
        </script>
</body>
</html>
