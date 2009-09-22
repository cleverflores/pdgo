<?php

/**
 * BaseMdlTimezone
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $year
 * @property string $tzrule
 * @property integer $gmtoff
 * @property integer $dstoff
 * @property integer $dst_month
 * @property integer $dst_startday
 * @property integer $dst_weekday
 * @property integer $dst_skipweeks
 * @property string $dst_time
 * @property integer $std_month
 * @property integer $std_startday
 * @property integer $std_weekday
 * @property integer $std_skipweeks
 * @property string $std_time
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlTimezone extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_timezone');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('year', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('tzrule', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('gmtoff', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('dstoff', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('dst_month', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('dst_startday', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('dst_weekday', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('dst_skipweeks', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('dst_time', 'string', 6, array(
             'type' => 'string',
             'length' => 6,
             'fixed' => false,
             'primary' => false,
             'default' => '00:00',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('std_month', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('std_startday', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('std_weekday', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('std_skipweeks', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'unsigned' => 0,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('std_time', 'string', 6, array(
             'type' => 'string',
             'length' => 6,
             'fixed' => false,
             'primary' => false,
             'default' => '00:00',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}