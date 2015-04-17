
 



<div class="col-md-6 col-md-offset-3">
  <?php $attributes = array('role' => 'form');
echo form_open("auth/deactivate/".$user->id, $attributes);?>
 <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Elige</h3>
    </div>
    <div class="panel-body">
    
    <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?>?</p>
             <div class="form-group ">
                <div class="radio radio-primary">
                    <label>
                        <input type="radio" name="confirm" value="yes" checked="checked">
                        Si
                    </label>
                    
                </div>
    <div class="radio radio-primary">
                    <label>
                        <input type="radio"  name="confirm" value="no">
                        No
                    </label>
                </div>
        </div>
                
                
                
                  <div class="form-group ">
 
                <input type="submit" name="submit" value="Enviar" class="btn btn-lg btn-danger btn-block">
        </div>
                
                
                
    

    
    
        
    </div>
</div>



<?php echo form_close();?>
</div>