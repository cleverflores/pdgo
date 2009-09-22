<?php

/**
 * BaseZonaPaises
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_pais
 * @property string $codigo
 * @property string $pais
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseZonaPaises extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('zona_paises');
        $this->hasColumn('id_pais', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('codigo', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('pais', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}