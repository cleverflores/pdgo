<?php

/**
 * BaseMdlMnetService2rpc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $serviceid
 * @property integer $rpcid
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlMnetService2rpc extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_mnet_service2rpc');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('serviceid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('rpcid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}