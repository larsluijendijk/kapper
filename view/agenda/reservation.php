<table class="table">
<h1>Uw reservaties:</h1>
    <tr>
      <th>Datum</th>
      <th>Begin tijd</th>
      <th>Eind tijd</th>
      <th>Kapper</th>
      <th>Annuleren</th>
    </tr>
    <?php foreach ($reservations as $reservation) { ?>
    <tr>
      <td><?= $reservation['date']; ?></td>
      <td><?= $reservation['start_time']; ?></td>
      <td><?= $reservation['end_time']; ?></td>
      <td><?= $reservation['kapper']; ?></td>
      <td><a href="<?= URL ?>agenda/cancel/<?= $reservation['id']?>">Annuleren</a></td>
    </tr> 


<?php } ?>
</table>