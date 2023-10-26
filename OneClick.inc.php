<html>
<head>
  <title> Button Example </title>
</head>
<body>
    <div class = "panel panel-default">
     <div class = "pull-left">
      <buttom id = "clickButton"> Click me </button>
    </div>
  <div class = "panel panel-default">
    <div class = "pull-right"> 
    <img src = "plugins/OneClick/images/USLA.png" title = "USA LOGO" style = "max-height: 50px">
    </div>
  </div>

        <script>
          document.getElementById("clickButton").addEventListener("click", function() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "plugins/OneClick/main.py", true);
            xhr.onreadystatechange = function() {
              if (xhr.readyState === 4 && xhr.status === 200) {
                console.log("Python script executed successfully!");
              }
            };
            xhr.send();
          });
        </script>
</body>
</html>
