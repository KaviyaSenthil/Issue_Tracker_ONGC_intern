<html>

   <head>
      <title>HTML Frames</title>
   </head>
	
   <frameset rows = "15%,85%">
      <frame name = "top"src = "logo.php" noresize="noresize" scrolling="no"/>
      <frame name = "left" noresize="noresize" scrolling="no" src = "welcome.php" />

      <noframes>
         <body>Your browser does not support frames.</body>
      </noframes>
      
   </frameset>
   <?php
     session_start();?>
   
</html>