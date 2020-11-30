<?php
require_once 'Dao.php';

function renderLeagueTable () {
  $dao = new Dao();
?>
  <table>
    <thead>
      <th>Name</th><th>Owner</th><th>Division</th><th>Points Leader</th>
    </thead>
   <?php
    $leagues = $dao->getLeagues();
    foreach ($leagues as $league) {
      echo "<tr><td>{$league['name']}</td><td>{$league['owner']}</td><td>{$league['division']}</td><td>{$league['pts_leader']}</td>";
    }
   ?>
  </table>
<?php
}

function renderDriverTable () {
  $dao = new Dao();
?>
  <table>
    <thead>
      <th>Username</th><th>Name</th><th>Number</th><th>Team</th><th>Championships</th><th>Wins</th>
    </thead>
   <?php
    $drivers = $dao->getDrivers();
    foreach ($drivers as $driver) {
      echo "<tr><td>{$driver['username']}</td><td>{$driver['name']}</td><td>{$driver['number']}</td><td>{$driver['team']}</td><td>{$driver['champ']}</td><td>{$driver['wins']}</td>";
    }
   ?>
  </table>
<?php
}

function renderTrackTable () {
  $dao = new Dao();
?>
  <table>
    <thead>
      <th>Name</th><th>Nickname</th><th>State</th><th>Length (miles)</th><th>Category</th>
    </thead>
   <?php
    $tracks = $dao->getTracks();
    foreach ($tracks as $track) {
      echo "<tr><td>{$track['name']}</td><td>{$track['nickname']}</td><td>{$track['state']}</td><td>{$track['length']}</td><td>{$track['cat']}</td>";
    }
   ?>
  </table>
<?php
}
?>