<?php
require_once 'Dao.php';

function renderTable () {
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
?>