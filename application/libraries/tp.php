<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('smarty/smarty.class.php');
class Tp extends Smarty{
 function __construct(){
  parent::__construct();
  $this->template_dir = APPPATH.'views';
  $this->compile_dir = APPPATH.'templates_c/';
  $this->left_delimiter = '{%';
  $this->right_delimiter = '%}';
 }
}
