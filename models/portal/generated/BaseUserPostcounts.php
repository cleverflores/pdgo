<?php

/**
 * BaseUserPostcounts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $uid
 * @property integer $posts
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseUserPostcounts extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('user_postcounts');
        $this->hasColumn('uid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('posts', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 1,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}