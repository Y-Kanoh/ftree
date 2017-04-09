<?php

require_once dirname(__FILE__) . '/../app/Familytree_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Familytree_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Familytree_Controller::main('Familytree_Controller', 'index');

