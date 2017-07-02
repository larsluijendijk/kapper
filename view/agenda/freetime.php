<table class="table">
<h1>Beschikbare tijden:</h1>
    <tr>
      <th>Datum</th>
      <th>Begin tijd</th>
      <th>Eind tijd</th>
      <th>Kapper</th>
      <th>Inschrijven</th>
    </tr>
    <?php foreach ($freetimes as $freetime) { ?>
    <tr>
      <td><?= $freetime['date']; ?></td>
      <td><?= $freetime['start_time']; ?></td>
      <td><?= $freetime['end_time']; ?></td>
      <td><?= $freetime['kapper']; ?></td>
      <td><a href="<?= URL ?>agenda/signup/<?= $freetime['id']?>">Inschrijven</a></td>
    </tr> 


<?php } ?>
</table>