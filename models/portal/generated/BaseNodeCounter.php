<?php

/**
 * BaseNodeCounter
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $nid
 * @property integer $totalcount
 * @property integer $daycount
 * @property integer $timestamp
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseNodeCounter extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('node_counter');
        $this->hasColumn('nid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('totalcount', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('daycount', 'integer', 3, array(
             'type' => 'integer',
             'length' => 3,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('timestamp', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}