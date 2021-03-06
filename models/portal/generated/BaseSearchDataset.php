<?php

/**
 * BaseSearchDataset
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $sid
 * @property string $type
 * @property string $data
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseSearchDataset extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('search_dataset');
        $this->hasColumn('sid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('type', 'string', 16, array(
             'type' => 'string',
             'length' => 16,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('data', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}