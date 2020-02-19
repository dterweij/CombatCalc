<?php
// page 2 - NPC

echo '<div class="container-fluid">';
echo '<h1>NPC</h1>';
echo '<p>Here you can see how many troops you minimal need for killing a NPC.</p>';
echo '<h6>What is a NPC?</h6>';
echo '<p>A non-player character (NPC) is any character in a game which is not controlled by a player. ';
echo 'The Following NPC list is used on this page: Alien Activity, Alien Hive, Downed Dropship, Covert Testing Station, Scavenger Activity and Dark Activity</p>';

echo '<div class="border p-2" style="background: #FFF8DC;">';
echo '  <div class="container">';
echo '    <h6>Your settings</h6>';

echo '<table class="table table-striped">';
echo '    <thead>';
echo '      <tr>';
echo '        <th>Type</th>';
echo '        <th>Setting</th>';
echo '      </tr>';
echo '    </thead>';
echo '    <tbody>';
echo '      <tr>';
echo '        <td>Attack Boost<br>Buff - Buy from Alliance Credits</td>';
echo '        <td>-</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>Defence Boost<br>Buff - Buy from Alliance Credits</td>';
echo '        <td>-</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>Offensive Coordination<br>Activate in HQ > Operations</td>';
echo '        <td>-</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>Defensive Coordination<br>Activate in HQ > Operations</td>';
echo '        <td>-</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>Combat Ship bonus<br>Your Dropship level</td>';
echo '        <td>-</td>';
echo '      </tr>';

echo '    </tbody>';
echo '  </table>';


echo '  </div>';
echo '</div>';

echo '<div class="border p-2" style="background: #fff;">';
echo '  <div class="container">';
echo '    <h6>Army selections</h6>';
?>
<form action="_self">
  <div class="row">
    <div class="col">
<label for="T1">Select T1 Army</label>
</div>
  <div class="col">

<select name="T1" class="custom-select" id="T1">
    <option value="volvo">Light</option>
    <option value="fiat">Heavy</option>
    <option value="audi">Ground</option>
    <option value="audi">Air</option>
  </select>
</div>
</div>

  <div class="row">
    <div class="col">
<label for="T2">Select T2 Army</label>
</div>
  <div class="col">


  <select id="T2" name="T2" class="custom-select">
    <option value="volvo">Light</option>
    <option value="fiat">Heavy</option>
    <option value="audi">Ground</option>
    <option value="audi">Air</option>
  </select>

</div>
</div>

  <div class="row">
    <div class="col">
<label for="T3">Select T3 Army</label>
</div>
  <div class="col">
  <select id="T3" name="T3" class="custom-select">
    <option value="volvo">Light</option>
    <option value="fiat">Heavy</option>
    <option value="audi">Ground</option>
    <option value="audi">Air</option>
  </select>
  
  </div>
</div>

  <div class="row">
    <div class="col">
<label for="T4">Select T4 Army</label>
</div>
  <div class="col">
  <select id="T4" name="T4" class="custom-select">
    <option value="volvo">Light</option>
    <option value="fiat">Heavy</option>
    <option value="audi">Ground</option>
    <option value="audi">Air</option>
    <option value="audi">Mech</option>
    <option value="audi">Prototype</option>
    <option value="audi">Alien</option>
  </select>

</div>
</div>

  <div class="row">
    <div class="col">
<label for="T5">Select T5 Army</label>
</div>
  <div class="col">
  <select id="T5" name="T5" class="custom-select">
    <option value="volvo">Light</option>
    <option value="fiat">Heavy</option>
    <option value="audi">Ground</option>
    <option value="audi">Air</option>
  </select>
</div>
</div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php
echo '  </div>';
echo '</div>';


echo '<table class="table table-striped">';
echo '    <thead>';
echo '      <tr>';
echo '        <th>Type</th>';
echo '        <th>T1</th>';
echo '        <th>T2</th>';
echo '        <th>T3</th>';
echo '        <th>T4</th>';
echo '        <th>T5</th>';
echo '      </tr>';
echo '    </thead>';
echo '    <tbody>';
echo '      <tr>';
echo '        <td>AA1</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>AA2</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '        <td>-</td>';
echo '      </tr>';

echo '    </tbody>';
echo '  </table>';
  
  echo '</div>';
