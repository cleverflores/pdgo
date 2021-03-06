<?php

/**
 * BaseAdStatistics
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $sid
 * @property integer $aid
 * @property integer $date
 * @property string $action
 * @property string $hostid
 * @property integer $count
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseAdStatistics extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_statistics');
        $this->hasColumn('sid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('aid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('date', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('action', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('hostid', 'string', 32, array(
             'type' => 'string',
             'length' => 32,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('count', 'integer', 4, array(
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