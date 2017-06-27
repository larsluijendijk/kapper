<form class="form-horizontal" action="<?= URL ?>register/createUser" method="POST" style="margin-left:auto; margin-right:auto; width:200px;">
  <fieldset>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Gebruikersnaam:</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
      </div>
    </div>
    <div class="control-group">

      <!-- Password-->
      <label class="control-label" for="password">Wachtwoord:</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
      </div>
    </div>
 
      <label class="control-label"  for="Email">Email:</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
      </div>

      <label class="control-label"  for="Adres">Adres:</label>
      <div class="controls">
        <input type="text" id="address" name="address" placeholder="" class="input-xlarge">
      </div>

      <label class="control-label"  for="Postcode">Postcode:</label>
      <div class="controls">
        <input type="text" id="postalcode" name="postalcode" placeholder="" class="input-xlarge">
      </div>

      <label class="control-label"  for="Stad">Stad:</label>
      <div class="controls">
        <input type="text" id="city" name="city" placeholder="" class="input-xlarge">
      </div>

      <label class="control-label"  for="Nummer">Telefoonnummer:</label>
      <div class="controls">
        <input type="text" id="phonenumber" name="phonenumber" placeholder="" class="input-xlarge">
        <input type="hidden" name="is_admin" value=0>
      </div>

    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>