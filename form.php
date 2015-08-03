<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src='js/jquery.min.js'></script>
  </head>
<?php
include ('spoj.php');
if(isset($_POST['submit'])){
mysql_query("SET NAMES 'utf8'");
mysql_query ("INSERT INTO schedule (subject, module, room, building, professor, start_time, end_time, date, color, text) VALUES ('$_POST[subject]', '$_POST[module]', '$_POST[room]', '$_POST[building]', '$_POST[professor]', '$_POST[start_time]', '$_POST[end_time]', '$_POST[date]', '$_POST[color]','$_POST[text]')", $spoj);
}
?>    
   <body id="pozadina">
       <div class="row">
    <div id="panel1" class="large-8 fullWidth panel">
       <h2>Form</h2><hr/>
<?php
if(isset($_POST['submit'])){
        echo '<div data-alert class="alert-box secondary">';
        echo 'Uspješno ste dodali predmet u raspored!';
        echo '<a href="#" class="close">&times;</a>';
        echo '</div>';
}
?>                
<form data-abide action='' method="POST" enctype="multipart/form-data" accept-charset="utf-8">
<!--  --------------------------------------------------  -->
  <div class="row">
    <div class="large-6 columns">
      <label>Subject
        <input type="text" name="subject" placeholder="Insert subject" required />
      </label>
    </div>
   <div class="large-6 columns">
      <label>Module
        <select name="module" required>
          <option value="">Select module</option>
          <option value="Predavanje">Predavanje</option>
          <option value="Auditorne vježbe">Auditorne vježbe</option>
          <option value="Laboratorijske vježbe">Laboratorijske vježbe</option>
          <option value="Kolokvij">Kolokvij</option>
          <option value="Ispit">Ispit</option>
        </select>
      </label>
    </div>
  </div>
<!--  --------------------------------------------------  -->
  <div class="row">
      <div class="large-3 columns">
      <label>Room
        <input type="text" name="room" placeholder="Insert room number" required/>
      </label>
    </div>
    <div class="large-4 columns">
      <label>Building
        <select name="building" required>
          <option value="">Select building</option>
          <option value="Kampus">Kampus</option>
          <option value="Trpimirova">Trpimirova</option>
        </select>
      </label>
    </div>
      <div class="large-5 columns">
      <label>Professor
        <input type="text" name="professor" placeholder="Name of professor" />
      </label>
    </div>
  </div>
            <!--  --------------------------------------------------  -->
       <div class="row">
    <div class="large-3 columns">
      <label>Start Time
        <select name="start_time" required>
    <option value="">Select time</option>
	<option value="7:00">7:00</option>
	<option value="7:15">7:15</option>
	<option value="7:30">7:30</option>
	<option value="7:45">7:45</option>
 
	<option value="8:00">8:00</option>
	<option value="8:15">8:15</option>
	<option value="8:30">8:30</option>
	<option value="8:45">8:45</option>
 
	<option value="9:00">9:00</option>
	<option value="9:15">9:15</option>
	<option value="9:30">9:30</option>
	<option value="9:45">9:45</option>
 
	<option value="10:00">10:00</option>
	<option value="10:15">10:15</option>
	<option value="10:30">10:30</option>
	<option value="10:45">10:45</option>
 
	<option value="11:00">11:00</option>
	<option value="11:15">11:15</option>
	<option value="11:30">11:30</option>
	<option value="11:45">11:45</option>
 
	<option value="12:00">12:00</option>
	<option value="12:15">12:15</option>
	<option value="12:30">12:30</option>
	<option value="12:45">12:45</option>
 
	<option value="13:00">13:00</option>
	<option value="13:15">13:15</option>
	<option value="13:30">13:30</option>
	<option value="13:45">13:45</option>
 
	<option value="14:00">14:00</option>
	<option value="14:15">14:15</option>
	<option value="14:30">14:30</option>
	<option value="14:45">14:45</option>
 
	<option value="15:00">15:00</option>
	<option value="15:15">15:15</option>
	<option value="15:30">15:30</option>
	<option value="15:45">15:45</option>
 
	<option value="16:00">16:00</option>
	<option value="16:15">16:15</option>
	<option value="16:30">16:30</option>
	<option value="16:45">16:45</option>
 
	<option value="17:00">17:00</option>
	<option value="17:15">17:15</option>
	<option value="17:30">17:30</option>
	<option value="17:45">17:45</option>
 
	<option value="18:00">18:00</option>
	<option value="18:15">18:15</option>
	<option value="18:30">18:30</option>
	<option value="18:45">18:45</option>
 
	<option value="19:00">19:00</option>
	<option value="1919:15">19:15</option>
	<option value="19:30">19:30</option>
	<option value="19:45">19:45</option>
 
	<option value="20:00">20:00</option>
	<option value="20:15">20:15</option>
	<option value="20:30">20:30</option>
	<option value="20:45">20:45</option>
 
	<option value="21:00">21:00</option>
</select>
      </label>
    </div>
      <div class="large-3 columns">
      <label>End Time
        <select name="end_time" required>
    <option value="">Select time</option>
	<option value="7:00">7:00</option>
	<option value="7:15">7:15</option>
	<option value="7:30">7:30</option>
	<option value="7:45">7:45</option>
 
	<option value="8:00">8:00</option>
	<option value="8:15">8:15</option>
	<option value="8:30">8:30</option>
	<option value="8:45">8:45</option>
 
	<option value="9:00">9:00</option>
	<option value="9:15">9:15</option>
	<option value="9:30">9:30</option>
	<option value="9:45">9:45</option>
 
	<option value="10:00">10:00</option>
	<option value="10:15">10:15</option>
	<option value="10:30">10:30</option>
	<option value="10:45">10:45</option>
 
	<option value="11:00">11:00</option>
	<option value="11:15">11:15</option>
	<option value="11:30">11:30</option>
	<option value="11:45">11:45</option>
 
	<option value="12:00">12:00</option>
	<option value="12:15">12:15</option>
	<option value="12:30">12:30</option>
	<option value="12:45">12:45</option>
 
	<option value="13:00">13:00</option>
	<option value="13:15">13:15</option>
	<option value="13:30">13:30</option>
	<option value="13:45">13:45</option>
 
	<option value="14:00">14:00</option>
	<option value="14:15">14:15</option>
	<option value="14:30">14:30</option>
	<option value="14:45">14:45</option>
 
	<option value="15:00">15:00</option>
	<option value="15:15">15:15</option>
	<option value="15:30">15:30</option>
	<option value="15:45">15:45</option>
 
	<option value="16:00">16:00</option>
	<option value="16:15">16:15</option>
	<option value="16:30">16:30</option>
	<option value="16:45">16:45</option>
 
	<option value="17:00">17:00</option>
	<option value="17:15">17:15</option>
	<option value="17:30">17:30</option>
	<option value="17:45">17:45</option>
 
	<option value="18:00">18:00</option>
	<option value="18:15">18:15</option>
	<option value="18:30">18:30</option>
	<option value="18:45">18:45</option>
 
	<option value="19:00">19:00</option>
	<option value="1919:15">19:15</option>
	<option value="19:30">19:30</option>
	<option value="19:45">19:45</option>
 
	<option value="20:00">20:00</option>
	<option value="20:15">20:15</option>
	<option value="20:30">20:30</option>
	<option value="20:45">20:45</option>
 
	<option value="21:00">21:00</option>
</select>
      </label>
    </div>
    <div class="large-4 columns">
        <label>Date
        <input type="date" name="date" required>
        </label>
    </div>
      <div class="large-2 columns">
      <label>Color
        <select name="color" required>
          <option value="">Select color..</option>
          <option value="red">Red</option>
          <option value="blue">Blue</option>
          <option value="yellow">Yellow</option>
          <option value="white">White</option>
        </select>
      </label>
    </div>
  </div>      
<!--  --------------------------------------------------  -->
  <div class="row">
    <div class="large-12 columns">
      <label>Remark
        <textarea name="text" placeholder="In case you need to remeber something for lecture"></textarea>
      </label>
    </div>
      <button id="submit" type="submit" name="submit">Submit</button>
  </div>
</form>
       </div>
       </div>
       <div class="row">
       <a href="calendar.php" class="button expand">Pogledaj raspored</a>
        </div>
       <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>

    <script>
      $(document).foundation();
    </script>

  </body>
</html>