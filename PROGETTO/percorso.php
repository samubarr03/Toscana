<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>[NOME PERCORSO]</title>

  <?php include "includes/css.html"; ?>

</head>
<style>
.GoogleMaps {
  margin-left:3%;
  width:67%;
  height:900px;
  background-color:#f04;
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
  background-color:#FFD1DC;
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
</style>
<body>
    <!--<?php include "includes/header.php";?>-->
    <div style="margin-top:2%">
    <div class="GoogleMaps" style="float:left;">
    <center><h1>NOME CITTA</h1></center>
        <div style ="margin-left:10%; margin-right:10%; margin-top:1%">
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=13HneMkDTtdzquIdWYzWOFP7nxyMa_JOh&ehbc=2E312F" width="100%" height="600px"></iframe>
          <!--<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1sEiqPOo2GQZRr4srHdv06ThktycSTbDp&ehbc=2E312F" width="33%" height="480"></iframe>
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZgeD_6OPHjjM1RoZvbX4P0jzdWYP97Hf&ehbc=2E312F" width="33%" height="480"></iframe>
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=138tbwwPhOGGrHdAY9WmRLnN6wZqIq4G3&ehbc=2E312F" width="33%" height="480"></iframe>
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1npEowYbBYnIFi9bDHR8mBtrd9cfHOges&ehbc=2E312F" width="33%" height="480"></iframe>!-->
        </div><BR><div align ="center"><input type="button" class="button" value="Input Button"></div>
    </div>
    <div class="InfoEQR" style="float:left;">
      <br><center><h2>Lista attrazioni<h2></center>
      <div style="overflow-y: scroll; width:80%; height:50%; margin-left:10%">
          <H3>Campanile Giotto</h3>
          <H3>Napoli</h3>
          <H3>Torre ciao ciao</h3>
          <H3>testo</h3>
          <H3>testo</h3>
          <H3>testo</h3>
          <H3>testo</h3>
          <H3>testo</h3>
          <H3>testo</h3>
          <H3>testoquery</h3>
          <H3>testoquery</h3>
          <H3>poporcodiaz</h3>
          
        </div><br>
      <div align ="center"><img src="img/download.png"></div>
    </div>
    </div>

    </div>
