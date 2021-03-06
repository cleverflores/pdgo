<?php

/**
 * BaseRoleController
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $role
 * @property string $module
 * @property string $controller
 * @property Role $Role
 * @property Controller $Controller
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseRoleController extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('role_controller');
        $this->hasColumn('role', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
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
        $this->hasOne('Role', array(
             'local' => 'role',
             'foreign' => 'role'));

        $this->hasOne('Controller', array(
             'local' => 'module',
             'foreign' => 'module'));
    }
}