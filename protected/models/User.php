<?php

class User extends CActiveRecord
{

    const ERROR_NONE = 0;
    const ERROR_USERNAME_INVALID = 1;
    const ERROR_PASSWORD_INVALID = 2;
    public $errorCode; // Tambahkan properti errorCode
    private $_id;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(
            array('username, password', 'required', 'on' => 'login'),
            array('username, password', 'length', 'max'=>128),
            array('email', 'safe'),
            // array('id, username, password, email', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        );
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }

    public function authenticate()
    {
        $user = $this->findByAttributes(array('username' => $this->username));

        if ($user === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif (!$user->validatePassword($this->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $user->id;
            $this->setState('name', $user->username);
            $this->errorCode = self::ERROR_NONE;
        }

        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId()
    {
        return $this->_id;
    }
}
