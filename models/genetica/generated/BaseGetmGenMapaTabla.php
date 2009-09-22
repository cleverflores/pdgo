<?php

/**
 * BaseGetmGenMapaTabla
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $de_nombre_tabla
 * @property string $de_descripcion
 * @property string $co_especie
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetmGenMapaTabla extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getm_gen_mapa_tabla');
        $this->hasColumn('de_nombre_tabla', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_descripcion', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('co_especie', 'string', 6, array(
             'type' => 'string',
             'length' => 6,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}