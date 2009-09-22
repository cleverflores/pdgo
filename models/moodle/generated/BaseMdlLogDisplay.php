<?php

/**
 * BaseMdlLogDisplay
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $module
 * @property string $action
 * @property string $mtable
 * @property string $field
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlLogDisplay extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_log_display');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('module', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('action', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('mtable', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('field', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}