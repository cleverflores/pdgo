<?php

/**
 * BaseGetmExterno
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_externo
 * @property string $co_organizacion
 * @property string $de_nombre
 * @property string $de_ap_paterno
 * @property string $de_ap_materno
 * @property string $co_documento
 * @property string $de_documento
 * @property string $de_direccion
 * @property string $de_email
 * @property string $de_telefono
 * @property string $es_estado
 * @property timestamp $fe_creacion
 * @property string $id_creacion
 * @property string $id_modificacion
 * @property timestamp $fe_modificacio
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetmExterno extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getm_externo');
        $this->hasColumn('co_externo', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('co_organizacion', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_nombre', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_ap_paterno', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_ap_materno', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('co_documento', 'string', 14, array(
             'type' => 'string',
             'length' => 14,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_documento', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_direccion', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_email', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_telefono', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
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
        $this->hasColumn('fe_creacion', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('id_creacion', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('id_modificacion', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('fe_modificacio', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}