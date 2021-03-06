<?php

/**
 * BaseAdPermissions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $oid
 * @property string $permissions
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseAdPermissions extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_permissions');
        $this->hasColumn('oid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('permissions', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}