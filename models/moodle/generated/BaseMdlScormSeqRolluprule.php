<?php

/**
 * BaseMdlScormSeqRolluprule
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $scoid
 * @property string $childactivityset
 * @property integer $minimumcount
 * @property float $minimumpercent
 * @property string $conditioncombination
 * @property string $action
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlScormSeqRolluprule extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_scorm_seq_rolluprule');
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
        $this->hasColumn('childactivityset', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('minimumcount', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('minimumpercent', 'float', 11, array(
             'type' => 'float',
             'length' => 11,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0.0000',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('conditioncombination', 'string', 3, array(
             'type' => 'string',
             'length' => 3,
             'fixed' => false,
             'primary' => false,
             'default' => 'all',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('action', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}