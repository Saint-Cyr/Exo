<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Home Page</title>
 </head>
 <body>
   <a href="move.zip">download it</a>
   <div style="text-align:center; margin-top:40px;">
     <img src="./img/online.svg" width="80" height="80" />
     <p>Nice! You are currently online.</p>
   <div>
  </body>
  <script>
    // Register the service worker
    if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
        // Registration was successful
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }).catch(function(err) {
        // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script>
</html>




