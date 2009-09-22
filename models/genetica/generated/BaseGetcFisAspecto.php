<?php

/**
 * BaseGetcFisAspecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_fis_aspecto
 * @property string $de_fis_aspecto
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetcFisAspecto extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getc_fis_aspecto');
        $this->hasColumn('co_fis_aspecto', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => true,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_fis_aspecto', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}