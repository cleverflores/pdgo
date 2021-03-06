<?php

/**
 * BaseMdlEnrolAuthorize
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property enum $paymentmethod
 * @property integer $refundinfo
 * @property string $ccname
 * @property integer $courseid
 * @property integer $userid
 * @property integer $transid
 * @property integer $status
 * @property integer $timecreated
 * @property integer $settletime
 * @property string $amount
 * @property string $currency
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlEnrolAuthorize extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_enrol_authorize');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('paymentmethod', 'enum', 6, array(
             'type' => 'enum',
             'length' => 6,
             'fixed' => false,
             'values' => 
             array(
              0 => 'cc',
              1 => 'echeck',
             ),
             'primary' => false,
             'default' => 'cc',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('refundinfo', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('ccname', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('courseid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('userid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('transid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('status', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('timecreated', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('settletime', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('amount', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('currency', 'string', 3, array(
             'type' => 'string',
             'length' => 3,
             'fixed' => false,
             'primary' => false,
             'default' => 'USD',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}