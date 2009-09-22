<?php

/**
 * BaseGetcTipoMuestra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_tipo_muestra
 * @property string $de_tipo_muestra
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetcTipoMuestra extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getc_tipo_muestra');
        $this->hasColumn('co_tipo_muestra', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => true,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_tipo_muestra', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}