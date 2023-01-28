<?php
require 'vendor/autoload.php'; // include Composer's autoloader
require 'connection.php';
require 'crud.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  margin: 10% 10% 0;
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    margin: 0 10%;
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Studenti')" id="defaultOpen">Studenti</button>
  <button class="tablinks" onclick="openCity(event, 'Ocene')">Ocene</button>
  <button class="tablinks" onclick="openCity(event, 'Predmeti')">Predmeti</button>
</div>

<div id="Studenti" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Studenti</h3>
  <p>Evidencija studenata</p>
  <table id="tab-studenti" border="1">
    <thead>
      <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Indeks</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $svi_studenti = $coll_students->find();
      $counter = 0;
      foreach($svi_studenti as $std):
        $counter+=1;
        $id = "stud".$counter;
      ?>
      <tr id="<?php echo $id;?>">
        <td><?php echo $std['ime'];?></td>
        <td><?php echo $std['prezime'];?></td>
        <td><?php echo $std['id'];?></td>
        <td>Ocene</td>

      </tr>
      <?php endforeach?>
    </tbody>
  </table>
  <!-- <button id="prikazDodajStd">Dodaj Studenta</button>
  <button id="prikazObrisiStd">Obrisi Studenta</button> -->
  <br>
  <form method="post" name="dodajStudenta">
    <input type="text" name="ime" id="std_ime" placeholder="ime">
    <input type="text" name="prezime" id="std_prezime" placeholder="prezime">
    <input type="text" name="indeks" id="std_indeks" placeholder="indeks">
    <input type="submit" value="Dodaj" name="dodaj" id="btnDodaj">
  </form>
</div>

<div id="Ocene" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Ocene</h3>
  <p>Evidencija ocena</p> 
</div>

<div id="Predmeti" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Predmeti</h3>
  <p>Evidencija predmeta</p>
  <table id="tab-predmeti" border="1">
    <thead>
      <tr>
        <th>Naziv</th>
        <th>Sifra</th>
        <th>Ocene</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $svi_predmeti = $coll_courses->find();
        $counter = 0;
        foreach($svi_predmeti as $crs):
        $counter+=1;
        $id= "pred".$counter;

      ?>
      <tr id="<?php echo $id;?>">
        <td><?php echo $crs['naziv'];?></td>
        <td><?php echo $crs['_id'];?></td>
        <td>Ocene</td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
