<?php

/**
 * BaseMdlGradeLetters
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $contextid
 * @property decimal $lowerboundary
 * @property string $letter
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlGradeLetters extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_grade_letters');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('contextid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('lowerboundary', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('letter', 'string', 255, array(
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