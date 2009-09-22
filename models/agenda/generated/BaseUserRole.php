<?php

/**
 * BaseUserRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $username
 * @property string $role
 * @property Role $Role
 * @property User $User
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseUserRole extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('user_role');
        $this->hasColumn('username', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('role', 'string', 50, array(
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

        $this->hasOne('User', array(
             'local' => 'username',
             'foreign' => 'username'));
    }
}