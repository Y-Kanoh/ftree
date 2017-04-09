<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Familytree_Controller.php';

Familytree_Controller::main('Familytree_Controller', array(
    '__ethna_unittest__',
    )
);
