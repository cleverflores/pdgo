<?php

/**
 * BaseAdHosts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $uid
 * @property string $hostid
 * @property string $description
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseAdHosts extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_hosts');
        $this->hasColumn('uid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => true,
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
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}