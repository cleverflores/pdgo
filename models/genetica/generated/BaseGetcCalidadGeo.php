<?php

/**
 * BaseGetcCalidadGeo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_calidad_geo
 * @property string $de_calidad_geo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetcCalidadGeo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getc_calidad_geo');
        $this->hasColumn('co_calidad_geo', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => true,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_calidad_geo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}