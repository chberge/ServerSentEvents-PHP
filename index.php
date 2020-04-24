<html>
  
  <head>
    
    <title>ServerSentEvents</title>
    
  </head>
  
  <body>
    
    <div id="result"></div>
     
    <script>
      if(typeof(EventSource) !== "undefined") {
        var source = new EventSource("sync.php");
        source.onmessage = function(event) {
          document.getElementById("result").innerHTML = event.data + "<br>";
        };
        } else {
          document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
        }
    </script>
    
  </body>
  
</html>
