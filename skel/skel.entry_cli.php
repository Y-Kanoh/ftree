<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Familytree
 *  @version    $Id: e57de7d50846a1bd6724ad3384c60d4d344aa27c $
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Familytree_Controller.php';

ini_set('max_execution_time', 0);

Familytree_Controller::main_CLI('Familytree_Controller', '{$action_name}');
