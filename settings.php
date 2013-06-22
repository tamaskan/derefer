<?php
OCP\User::checkLoggedIn();

OCP\Util::addScript( "derefer", "admin" );

$tmpl = new OCP\Template( 'derefer', 'settings');

return $tmpl->fetchPage();