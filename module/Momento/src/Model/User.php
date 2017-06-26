<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 25.06.17
 * Time: 18:55
 */

namespace Momento\Model;


class User
{

    public $id;
    public $name;
    public $surname;
    public $nickname;
    public $gender;
    public $description;
    public $age;
    public $registrationDate;
    public $lastSeenDate;
    public $level;
    public $avatar;

    public function __construct()
    {
    }

    public function exchangeArray($data, $prefix='') {
        $this->id               = isset($data[$prefix.'id'])                ? $data[$prefix.'id'] : null;
        $this->name             = isset($data[$prefix.'name'])              ? $data[$prefix.'name'] : null;
        $this->surname          = isset($data[$prefix.'surname'])           ? $data[$prefix.'surname'] : null;
        $this->nickname         = isset($data[$prefix.'nickname'])          ? $data[$prefix.'nickname'] : null;
        $this->gender           = isset($data[$prefix.'gender'])            ? $data[$prefix.'gender'] : null;
        $this->description      = isset($data[$prefix.'description'])       ? $data[$prefix.'description'] : null;
        $this->age              = isset($data[$prefix.'age'])               ? $data[$prefix.'age'] : null;
        $this->registrationDate = isset($data[$prefix.'registration_date']) ? $data[$prefix.'registration_date'] : null;
        $this->lastSeenDate     = isset($data[$prefix.'lastseen_date'])     ? $data[$prefix.'lastseen_date'] : null;
        $this->level            = isset($data[$prefix.'level'])             ? $data[$prefix.'level'] : null;
        $this->avatar           = isset($data[$prefix.'avatar'])            ? $data[$prefix.'avatar'] : null;
    }

    public function getArrayCopy() {
        return [
            "id"                => $this->id,
            "name"              => $this->name,
            "surname"           => $this->surname,
            "nickname"          => $this->nickname,
            "gender"            => $this->gender,
            "description"       => $this->description,
            "age"               => $this->age,
            "registration_date" => $this->registrationDate,
            "lastseen_date"     => $this->lastSeenDate,
            "level"             => $this->level,
            "avatar"            => $this->avatar,
        ];
    }

    public function getDisplayName() {
        return $this->name . ' ' .
            $this->surname . ' (' .
            $this->nickname . ')';
    }
}