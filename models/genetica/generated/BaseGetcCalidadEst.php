<?php

/**
 * BaseGetcCalidadEst
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_calidad_est
 * @property string $de_calidad_est
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetcCalidadEst extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getc_calidad_est');
        $this->hasColumn('co_calidad_est', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => true,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_calidad_est', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}