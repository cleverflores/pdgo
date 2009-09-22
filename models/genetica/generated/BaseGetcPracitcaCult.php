<?php

/**
 * BaseGetcPracitcaCult
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_practica_cult
 * @property string $de_practica_cult
 * @property string $de_observacion_cult
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetcPracitcaCult extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getc_pracitca_cult');
        $this->hasColumn('co_practica_cult', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => true,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_practica_cult', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_observacion_cult', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

}