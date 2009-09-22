<?php

/**
 * BaseCarPijuayo01
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_nacional
 * @property string $de_anio_camp
 * @property integer $NUMRAC
 * @property integer $DIAEST
 * @property integer $LONENT
 * @property integer $NUMESP
 * @property integer $LORAHO
 * @property integer $LONFOL
 * @property decimal $AREFOL
 * @property integer $ESPPEC
 * @property decimal $PETORA
 * @property integer $NUTOFR
 * @property decimal $PETOFR
 * @property decimal $PEFRUT
 * @property integer $NUFRPA
 * @property decimal $PEFRFE
 * @property decimal $PEFRPA
 * @property decimal $RAFRRA
 * @property integer $PRRAEX
 * @property integer $COLEXO
 * @property integer $COLMES
 * @property integer $HUMMES
 * @property integer $ACEMES
 * @property decimal $RAMEFR
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseCarPijuayo01 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('car_pijuayo_01');
        $this->hasColumn('co_nacional', 'string', 9, array(
             'type' => 'string',
             'length' => 9,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('de_anio_camp', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('NUMRAC', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('DIAEST', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('LONENT', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('NUMESP', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('LORAHO', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('LONFOL', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('AREFOL', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('ESPPEC', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('PETORA', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('NUTOFR', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('PETOFR', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('PEFRUT', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('NUFRPA', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('PEFRFE', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('PEFRPA', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('RAFRRA', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
        $this->hasColumn('PRRAEX', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('COLEXO', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('COLMES', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('HUMMES', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('ACEMES', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('RAMEFR', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => false,
             ));
    }

}