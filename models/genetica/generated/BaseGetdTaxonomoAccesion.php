<?php

/**
 * BaseGetdTaxonomoAccesion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_nacional
 * @property string $co_organizacion
 * @property string $co_externo
 * @property timestamp $fe_id_taxonomo
 * @property string $es_estado
 * @property string $id_creacion
 * @property timestamp $fe_creacion
 * @property string $id_modificacion
 * @property timestamp $fe_modificacion
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetdTaxonomoAccesion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getd_taxonomo_accesion');
        $this->hasColumn('co_nacional', 'string', 9, array(
             'type' => 'string',
             'length' => 9,
             'fixed' => true,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('co_organizacion', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             'fixed' => true,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('co_externo', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => true,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('fe_id_taxonomo', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'notnull' => false,
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
        $this->hasColumn('id_creacion', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => true,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('fe_creacion', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('id_modificacion', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('fe_modificacion', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}