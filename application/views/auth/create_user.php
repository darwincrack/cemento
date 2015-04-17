<div class="well col-lg-5 col-md-offset-3">


   <?php echo $message;?>



<?php $attributes = array('role' => 'form', 'class'=>'form-horizontal');
echo form_open('auth/create_user', $attributes);?>

    <fieldset>
        <legend>Datos Personales</legend>
        <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="text" class="form-control  floating-label" name="first_name" value="<?php echo set_value('first_name'); ?>" id="first_name" placeholder="Nombre" required>
            </div>
        </div>
        
         <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="text" class="form-control floating-label" name="last_name" value="<?php echo set_value('last_name'); ?>" id="last_name" placeholder="Apellido" required>
            </div>
        </div> 
        
         <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="email" class="form-control floating-label" name="email" value="<?php echo set_value('email'); ?>" id="email" placeholder="Email" required>
            </div>
        </div>
        
         <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="number" class="form-control floating-label" min="1" max="99999999999" name="phone" value="<?php echo set_value('phone'); ?>" id="phone" placeholder="Telefono">
            </div>
        </div>
    
         <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="password" class="form-control floating-label" name="password" value="" id="password" placeholder="Contrasena" required>
            </div>
        </div>
        
         <div class="form-group has-error">
            <div class="col-lg-12">
                <input type="password" class="form-control floating-label" name="password_confirm" value="" id="password_confirm"  placeholder="Confirmar Contrasena" required>
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

         <div class="form-group ">
            <div class="col-lg-1 col-md-offset-3">
                <input type="submit" class="btn btn-danger" name="submit" value="Crear Usuario">
            </div>
        </div>
        
        
        

    </fieldset>
<?php echo form_close();?>
</div>