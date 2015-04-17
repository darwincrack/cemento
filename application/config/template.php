<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
$template['active_template'] = 'default';
 
 
//definimos una plantilla para el formulario de registro
$template['default']['template'] = 'template/template';
$template['default']['regions'] = array(
'header',
'title',
'menu',
'content',
'footer',
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;
 
/* End of file template.php */
/* Location: ./system/application/config/template.php */