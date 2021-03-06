<?php

/**
 * BaseGetcRelieve
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $co_relieve
 * @property string $de_calidad_geo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetcRelieve extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getc_relieve');
        $this->hasColumn('co_relieve', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('de_calidad_geo', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}