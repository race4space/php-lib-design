<?php
namespace phpcrud;
$obj_auth=new \phplibrary\Auth();
$obj_auth->fn_check();

class Design {
  use \phplibrary\General;
  function __construct() {

    $this->bln_debug=false;
    if($this->bln_debug){$this->fn_echo(">>>>>>>>>>>>>>>>>>>>START __construct");}

    $this->obj_request=new \phplibrary\ServerVariables();

    $this->fn_initialize_var();

    if($this->bln_debug){$this->fn_echo(">>>>>>>>>>>>>>>>>>>>END __construct");}
  }
  function fn_initialize_var(){
    //define any values of variables without issue here.
    $this->fn_echo("Hey Jude");
  }
}//END CLASS DESIGN
?>
