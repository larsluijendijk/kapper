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
    <?php var_dump($appointment);?>
      <td><?= $appointment['date']; ?></td>
      <td><?= $appointment['start_time']; ?></td>
      <td><?= $appointment['end_time']; ?></td>
      <td><?= $appointment['user_username']; ?></td>
      <td><?= $appointment['user_username']; ?></td>
    </tr> 
</table>
<?php } ?>