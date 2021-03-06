<?php

/**
 * BaseGetmUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_usuario
 * @property integer $id_perfil
 * @property string $usuario
 * @property string $passwd
 * @property string $descripcion
 * @property string $correo
 * @property string $ciudad
 * @property string $pais
 * @property string $nombres
 * @property string $apellidos
 * @property string $imagen
 * @property string $estado
 * @property timestamp $fecha_creacion
 * @property timestamp $fecha_baja
 * @property string $co_personal
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetmUsuario extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getm_usuario');
        $this->hasColumn('id_usuario', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('id_perfil', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('usuario', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('passwd', 'string', 32, array(
             'type' => 'string',
             'length' => 32,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('correo', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('ciudad', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('pais', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('nombres', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('apellidos', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('imagen', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('estado', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => false,
             'default' => 'activo',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('fecha_creacion', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('fecha_baja', 'timestamp', null, array(
             'type' => 'timestamp',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('co_personal', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}