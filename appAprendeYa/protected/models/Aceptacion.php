<?php

/**
 * This is the model class for table "Aceptacion".
 *
 * The followings are the available columns in table 'Aceptacion':
 * @property string $id_aceptacion
 * @property string $id_sesion
 * @property string $id_tema
 * @property string $id_alumno
 * @property string $puntuacion
 * @property string $id_Experto
 */
class Aceptacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Aceptacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_aceptacion, id_Experto', 'required'),
			array('id_aceptacion, id_sesion, id_tema, id_alumno, id_Experto', 'length', 'max'=>5),
			array('puntuacion', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_aceptacion, id_sesion, id_tema, id_alumno, puntuacion, id_Experto', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_aceptacion' => 'Id Aceptacion',
			'id_sesion' => 'Id Sesion',
			'id_tema' => 'Id Tema',
			'id_alumno' => 'Id Alumno',
			'puntuacion' => 'Puntuacion',
			'id_Experto' => 'Id Experto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_aceptacion',$this->id_aceptacion,true);
		$criteria->compare('id_sesion',$this->id_sesion,true);
		$criteria->compare('id_tema',$this->id_tema,true);
		$criteria->compare('id_alumno',$this->id_alumno,true);
		$criteria->compare('puntuacion',$this->puntuacion,true);
		$criteria->compare('id_Experto',$this->id_Experto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aceptacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
