<?php

/**
 * BaseCachePage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cid
 * @property blob $data
 * @property integer $expire
 * @property integer $created
 * @property string $headers
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseCachePage extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('cache_page');
        $this->hasColumn('cid', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('data', 'blob', null, array(
             'type' => 'blob',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('expire', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('created', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('headers', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}