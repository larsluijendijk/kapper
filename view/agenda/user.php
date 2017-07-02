<table class="table">
    <tr>
      <th>Gebruikersnaam</th>
      <th>E-mail</th>
      <th>Adres</th>
      <th>Postcode</th>
      <th>Stad</th>
      <th>Nummer</th>
      </tr>
      <tr>
<?php foreach ($customer as $klant) { ?>

<td><?= $klant['username']; ?></td>
<td><?= $klant['email']; ?></td>
<td><?= $klant['address']; ?></td>
<td><?= $klant['postalcode']; ?></td>
<td><?= $klant['city']; ?></td>
<td><?= $klant['phonenumber']; ?></td>



<?php } ?>
</tr>
</table>