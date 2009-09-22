<?php

/**
 * BaseController
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $module
 * @property string $controller
 * @property string $description
 * @property integer $active
 * @property timestamp $date_update
 * @property Module $Module
 * @property Doctrine_Collection $ControllerAction
 * @property Doctrine_Collection $RoleController
 * @property Doctrine_Collection $UserController
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseController extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('controller');
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
        $this->hasColumn('description', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('active', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('date_update', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        $this->hasOne('Module', array(
             'local' => 'module',
             'foreign' => 'module'));

        $this->hasMany('ControllerAction', array(
             'local' => 'module',
             'foreign' => 'module'));

        $this->hasMany('RoleController', array(
             'local' => 'module',
             'foreign' => 'module'));

        $this->hasMany('UserController', array(
             'local' => 'module',
             'foreign' => 'module'));
    }
}