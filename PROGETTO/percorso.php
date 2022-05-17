<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
  integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
  crossorigin=""/>
<!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
  integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
  crossorigin=""></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script type="text/javascript" src="leaflet.js"></script>
  <title>[NOME PERCORSO]</title>

  <?php include "includes/css.html"; ?>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
        <?php
	session_start();
    include "data.php";
    require_once ('product.php');
    

	if(!isset($_SESSION['email'])){
	    header("location: login.html");
	}


    if(isset($_GET['id'])){

            $get=1;
            $id=$_GET['id']; 
            $sql = " SELECT * FROM Percorso WHERE id='{$id}'";
            
    }
    else{ 
  
        $sql = "SELECT * FROM Percorso "; 
        $get=0;
    } ?>
</head>
<style>
    .GoogleMaps {
      margin-left:3%;
      width:67%;
      height:900px;
      background-color:#009970;
      }
      .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 400%;
      margin: 4px 2px;
      cursor: pointer;
    }
    h1 {
        display: block;
        font-size: 90px;
        color:white;
    }
    h2 {
        display: block;
        font-size: 75px;
        color:white;
    }
    h3 {
        display: block;
        font-size: 60px;
        color:blue;
    }
    .InfoEQR {
      margin-left:1%;
      margin-right:1%;
      width:27%;
      height:900px;
      background-color:#dfffde;
      }
      /* width */
    ::-webkit-scrollbar {
      width: 15px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #696969; 
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #7f7f7f; 
    }
    #map { 
      height: 600px; width:1000px;
      }
</style>
<body>

    <div style="margin-top:2%">
    <div class="GoogleMaps" style="float:left;">
    <center><h1>NOME CITTA</h1></center>
        <div style ="margin-left:10%; margin-right:10%; margin-top:1%">
        <div id="map"></div>
        <script type="text/javascript" src="leaflet.js"></script> 
        </div><BR><div align ="center"><input type="button" class="button" value="Input Button"></div>
    </div>
    
    <div class="InfoEQR" style="float:left;">
      <br><center><h2>Lista attrazioni<h2></center>
      <div style="overflow-y: scroll; width:80%; height:50%; margin-left:10%">

        <?php echo $get;  if($get==1){
          echo $get;
          $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
          if(mysqli_num_rows($resultset) > 0){
            echo $get;  
              while($row = mysqli_fetch_array($resultset)){
                  genera($row['id']);
                  echo $get;
                }
              
    }
}  


     ?>     
        </div><br>
      <div align ="center"><img src="img/download.png"></div>
    </div>
    </div>

    </div>
