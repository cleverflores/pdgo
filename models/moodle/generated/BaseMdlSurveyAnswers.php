<?php

/**
 * BaseMdlSurveyAnswers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $userid
 * @property integer $survey
 * @property integer $question
 * @property integer $time
 * @property string $answer1
 * @property string $answer2
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseMdlSurveyAnswers extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mdl_survey_answers');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('userid', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('survey', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('question', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('time', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('answer1', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('answer2', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}