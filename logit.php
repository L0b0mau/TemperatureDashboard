<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>YOURNAMEHERE Home Automation</title>


    <style>
      body  {
              background: rgba(104, 166, 241, 0.8);

        }
        
      
    </style>
    
      
  </head>
  <body>

      <p>Welcome to my home automation site. Params: type=temp, temp=30, hum=50</p>
	
      
      
    <?php 
            $filename = "logs.csv";
            $type = $_GET['type'] ?? '404';
            $temp = $_GET['temp']  ?? '404';
            date_default_timezone_set('Europe/Vienna');
            $date = date('Y/m/d h:i:s a', time());
			$hummidity = $_GET['hum']  ?? '404';
			
			echo 'I got: '.$type.'<br>'.$temp.'°C<br>At '.$hummidity.'%';
			
			echo "<br><br>";
						
			
			if ($type === '404'){
				echo "you have to enter a type -.-";
				exit();
			}
			

            $content = $date.';'.$type.";".$temp.";".$hummidity."\n";

      
            file_put_contents($filename, $content, FILE_APPEND);


        ?>     
      
<script>

      
</script>      

</body>
</html>

