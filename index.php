<?php require('find-weather.php'); ?>
<!doctype html>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<?php //$country= $_POST['weather-country']; ?>
</head>
<body>
<?php if($_POST != "" && isset($_POST['weather-city']) != '' && isset($_POST['weather-state']) != '' && isset($_POST['weather-country']) != '' ) { ?>
     <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> 
				<?php echo $data->main->temp_max; ?>&deg;C
				<span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
<?php } else { ?>
   <form action="" method="post" name="myForm" class="form-signin">

 <div class="mb-4">
  <div class="form-group">
    <label for="exampleInputEmail1">City *</label>
    <input type="text" class="form-control" id="exampleInputlocation" aria-describedby="location" placeholder="Enter state" name="weather-city" required>  
  </div>      
  <div class="form-group">
    <label for="exampleInputEmail1">State *</label>
    <input type="text" class="form-control" id="exampleInputlocation" aria-describedby="location" placeholder="Enter state" name="weather-state" required>  
  </div>         
  <div class="form-group">
    <label for="exampleInputEmail1">country *</label>
    <input type="text" class="form-control" id="exampleInputlocation" aria-describedby="location" placeholder="Enter location" name="weather-country" required>  
  </div>
      
   <input type="submit" class="btn btn-primary" name="Submit">
   </div>
</form>        
<?php } ?>
</body>
</html>