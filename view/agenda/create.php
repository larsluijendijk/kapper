<form class="form-horizontal" action="<?= URL ?>agenda/createAppointment" method="POST" style="margin-left:auto; margin-right:auto; width:200px;">
  <fieldset>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="dates">Datum:</label>
      <div class="controls">
        <input type="date" id="dates" name="dates" placeholder="" class="input-xlarge" required>
      </div>

      <label class="control-label"  for="start_time">Begin tijd:</label>
      <div class="controls">
        <input type="text" id="start_time" name="start_time" placeholder="" class="input-xlarge" required>
      </div>

	  <label class="control-label"  for="end_time">Eind tijd:</label>
      <div class="controls">
        <input type="text" id="end_time" name="end_time" placeholder="" class="input-xlarge" required>
      </div>

	  <label class="control-label"  for="kapper">Kapper:</label>
      <div class="controls">
		<select name="kapper">
<?php foreach ($kappers as $kapper) { ?>
    <option value="<?= $kapper['id']; ?>"><?= $kapper['username']; ?></option>
<?php } ?>
 		</select>
      </div>
      <br/>
	<input type="hidden" id="customer_id" name="customer_id"  value="0">
	  <div class="controls">
        <button class="btn btn-success">Nieuwe afspraak</button>
      </div>
    </div>