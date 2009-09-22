<?php

/**
 * BaseMdlScormSeqRolluprulecond
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $scoid
 * @property integer $rollupruleid
 * @property string $operator
 * @property string $cond
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlScormSeqRolluprulecond extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_scorm_seq_rolluprulecond');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('scoid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('rollupruleid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('operator', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             'fixed' => false,
             'primary' => false,
             'default' => 'noOp',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('cond', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}