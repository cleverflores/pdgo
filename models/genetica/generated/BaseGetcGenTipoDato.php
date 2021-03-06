<?php

/**
 * BaseGetcGenTipoDato
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_tipo_dato
 * @property string $de_tipo_dato
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseGetcGenTipoDato extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('getc_gen_tipo_dato');
        $this->hasColumn('id_tipo_dato', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('de_tipo_dato', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}