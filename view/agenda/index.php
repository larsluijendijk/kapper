<table class="table">
    <tr>
      <th>Datum</th>
      <th>Begin tijd</th>
      <th>Eind tijd</th>
      <th>Kapper</th>
      <th>Bezoeker</th>
    </tr>
    <?php foreach ($appointments as $appointment) { ?>
    <tr>
    <?php /* var_dump($appointment);*/?>
      <td><?= $appointment['date']; ?></td>
      <td><?= $appointment['start_time']; ?></td>
      <td><?= $appointment['end_time']; ?></td>
      <td><?= $appointment['kapper']; ?></td>
      <td><?= $appointment['klant']; ?></td>
    </tr> 


<?php } ?>
</table>
<?php 
if (isset($_SESSION['username'])){
	if ($_SESSION['is_admin'] == 1){
 ?>
<br/>
<a href="<?= URL ?>agenda/create"><button type="button" class="btn btn-success">Nieuwe afspraak</button></a>
<?php
}
}
?>