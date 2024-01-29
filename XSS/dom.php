<?php
require_once('../_helpers/strip.php');
?>
<html>
  <!-- From https://portswigger.net/web-security/dom-based/dom-clobbering -->
  <head>
"82nr05Lm7QBBZHeSoC6jccRsbcHausuIBfn0OKu+BoJdhN4tr23NkCFQqDEA9orep0JgwFxij31v+AStlIxDbQ=="

  </head>
  <body>
    <p>
      Hi, <?= $_GET['name']; ?>
    </p>
    <script>
      window.onload = function(){
        let someObject = window.someObject || {};
        let script = document.createElement('script');
        script.src = someObject.url;
        document.body.appendChild(script);
     };
    </script>
  </body>
</html>
