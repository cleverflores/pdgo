<?php

/**
 * BaseMdlQuestionAttempts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $modulename
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlQuestionAttempts extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_question_attempts');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('modulename', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'primary' => false,
             'default' => 'quiz',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}