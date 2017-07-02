<?php foreach ($signups as $signup) { ?>

<form class="form-horizontal" action="<?= URL ?>agenda/signupAction" method="POST" style="margin-left:auto; margin-right:auto; width:200px;">
  <fieldset>
    <div class="control-group">
    <h1>U wilt zich inschrijven voor:</h1>
      <!-- Username -->
      <label class="control-label"  for="username">Datum:</label>
      <div class="controls">
        <input type="text" id="date" name="date" placeholder="" class="input-xlarge" value="<?= $signup['date'] ?>" readonly="readonly">
      </div>
    </div>
    <div class="control-group">

      <!-- Password-->
      <label class="control-label" for="password">Start tijd:</label>
      <div class="controls">
        <input type="text" id="start_time" name="start_time" placeholder="" class="input-xlarge" value="<?= $signup['start_time'] ?>" readonly="readonly">
      </div>
    </div>
 
      <label class="control-label"  for="Email">Eind tijd:</label>
      <div class="controls">
        <input type="text" id="end_time" name="end_time" placeholder="" class="input-xlarge" value="<?= $signup['end_time'] ?>" readonly="readonly">
      </div>

      <input type="hidden" id="agenda_id" name="agenda_id"  value="<?= $signup['id'] ?>">
      <input type="hidden" id="customer_id" name="customer_id"  value="<?= $_SESSION['id'] ?>">
    <div class="control-group">
      <!-- Button -->
      <br/>
      <div class="controls">
        <button class="btn btn-success">Inschrijven</button>
      </div>
    </div>
  </fieldset>
</form>

<?php
}
?>
