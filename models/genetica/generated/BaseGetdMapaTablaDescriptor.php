<?php

/**
 * BaseGetdMapaTablaDescriptor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $de_nombre_tabla
 * @property string $id_descriptor
 * @property string $es_estado
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetdMapaTablaDescriptor extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getd_mapa_tabla_descriptor');
        $this->hasColumn('de_nombre_tabla', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('id_descriptor', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('es_estado', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => true,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}