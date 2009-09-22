<?php

/**
 * BaseUserController
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $username
 * @property string $module
 * @property string $controller
 * @property User $User
 * @property Controller $Controller
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseUserController extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('user_controller');
        $this->hasColumn('username', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('module', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('controller', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        $this->hasOne('User', array(
             'local' => 'username',
             'foreign' => 'username'));

        $this->hasOne('Controller', array(
             'local' => 'module',
             'foreign' => 'module'));
    }
}