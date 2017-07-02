<table class="table">
    <tr>
      <th>Datum</th>
      <th>Begin tijd</th>
      <th>Eind tijd</th>
      <th>Kapper</th>
      <th>Bezoeker</th>

      <?php
	if (isset($_SESSION['username'])){
	if ($_SESSION['is_admin'] == 1){
 ?>
 <th>Verwijderen</th>
<?php } } ?>
      <th>Geweest</th>
    </tr>
    <?php foreach ($appointments as $appointment) { ?>
    <tr>
    <?php /* var_dump($appointment);*/?>
      <td><?= $appointment['date']; ?></td>
      <td><?= $appointment['start_time']; ?></td>
      <td><?= $appointment['end_time']; ?></td>
      <td><?= $appointment['kapper']; ?></td>
      <td><a href="<?= URL ?>agenda/showUser/<?= $appointment['customer_id'] ?>"><?= $appointment['klant']; ?></a></td>
    <?php
	if (isset($_SESSION['username'])){
	if ($_SESSION['is_admin'] == 1){
 ?>
      <td><a href="<?= URL ?>agenda/deleteAppointment/<?= $appointment['id'] ?>"><button type="button" class="btn btn-danger">Verwijderen</button></a></td>
 <?php } } ?>

      <td><?= $appointment['been_there']; ?></td>
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