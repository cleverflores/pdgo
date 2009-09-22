<?php

/**
 * BaseGetdMedioAccesion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_medio_conservacion
 * @property string $co_nacional
 * @property string $es_estado
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetdMedioAccesion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getd_medio_accesion');
        $this->hasColumn('co_medio_conservacion', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => true,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('co_nacional', 'string', 9, array(
             'type' => 'string',
             'length' => 9,
             'fixed' => true,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('es_estado', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => true,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}