<?php

/**
 * BaseGetdGenMapaTablaUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $de_nombre_tabla
 * @property integer $id_usuario
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetdGenMapaTablaUsuario extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getd_gen_mapa_tabla_usuario');
        $this->hasColumn('de_nombre_tabla', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('id_usuario', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}