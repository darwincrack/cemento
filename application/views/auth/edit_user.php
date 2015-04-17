<div class="well col-lg-5 col-md-offset-3">


   <?php echo $message;?>



<?php $attributes = array('role' => 'form', 'class'=>'form-horizontal');
echo form_open(uri_string(), $attributes);?>

    <fieldset>
        <legend>Nueva Informacion</legend>
        <div class="form-group has-error">
            <div class="col-lg-12">
                 <?php echo form_input($first_name);?>
            </div>
        </div>
        
         <div class="form-group has-error">
            <div class="col-lg-12">
               <?php echo form_input($last_name);?>
            </div>
        </div> 
              
         <div class="form-group has-error">
            <div class="col-lg-12">
                 <?php echo form_input($phone);?>
            </div>
        </div>
    
         <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="password" class="form-control floating-label" name="password" value="" id="password" placeholder="Contrasena" >
            </div>
        </div>
        
         <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="password" class="form-control floating-label" name="password_confirm" value="" id="password_confirm"  placeholder="Confirmar Contrasena" >
            </div>
        </div>

         <div class="form-group has-error">
            <div class="col-lg-12">
               <select class="form-control" id="select" name="sexo_id">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                </select>
            </div>
        </div>


         <?php if ($this->ion_auth->is_admin()): ?>

          <h4><?php echo lang('edit_user_groups_heading');?></h4>
          
		  <?php foreach ($groups as $group):?>
          <div class="togglebutton">
          <label>
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>

              
              

                  </label>
                </div>
          <?php endforeach?>
		
      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

                 <div class="form-group ">
            <div class="col-lg-1 col-md-offset-3">
                <input type="submit" class="btn btn-danger" name="submit" value="Crear Usuario">
            </div>
        </div>
        

    </fieldset>
<?php echo form_close();?>
</div>