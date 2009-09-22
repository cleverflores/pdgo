<?php

/**
 * BaseTinymceRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $rid
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseTinymceRole extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('tinymce_role');
        $this->hasColumn('name', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('rid', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => false,
             ));
    }

}