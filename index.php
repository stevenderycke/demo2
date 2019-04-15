<html>
 <head>
 </head>
 <body>
  <?php echo 'App Version: 0.2'; ?></br>
  <?php echo 'Internal IP: ' . $_SERVER['SERVER_ADDR']; ?></br>
  <?php echo 'External IP: ' . file_get_contents('http://ifconfig.co/ip'); ?></br>
  <?php echo 'Hostname: ' . gethostname(); ?></br>
 </body>
</html>
