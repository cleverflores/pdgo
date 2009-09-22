<?php

/**
 * BaseViewArgument
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $vid
 * @property string $type
 * @property string $argdefault
 * @property string $title
 * @property string $options
 * @property integer $position
 * @property string $wildcard
 * @property string $wildcard_substitution
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseViewArgument extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('view_argument');
        $this->hasColumn('vid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('argdefault', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('options', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('position', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('wildcard', 'string', 32, array(
             'type' => 'string',
             'length' => 32,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('wildcard_substitution', 'string', 32, array(
             'type' => 'string',
             'length' => 32,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}