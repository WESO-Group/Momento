<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 27.06.17
 * Time: 13:47
 */

namespace Momento\Hydrator;


use Momento\Model\User;
use Zend\Hydrator\HydratorInterface;

class UserHydrator implements HydratorInterface
{

    /**
     * Extract values from an object
     *
     * @param  User $object
     * @return array
     */
    public function extract($object)
    {
        if ( ! $object instanceof User ) {
            return array();
        }

        return [
            "id" => $object->getId(),
            "age" => $object->getAge(),
            "avatar" => $object->getAvatar(),
            "description" => $object->getDescription(),
            "name" => $object->getName(),
            "surname" => $object->getSurname(),
            "gender" => $object->getGender(),
            "lastseen_date" => $object->getLastSeenDate(),
            "registration_date" => $object->getRegistrationDate(),
            "level" => $object->getLevel(),
            "nickname" => $object->getNickname()
        ];
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        if ( ! $object instanceof User ) {
            return $object;
        }

        $object->setId(isset($data["id"]) ? $data["id"] : null);
        $object->setAge(isset($data["age"]) ? $data["age"] : null);
        $object->setAvatar(isset($data["avatar"]) ? $data["avatar"] : null);
        $object->setDescription(isset($data["description"]) ? $data["description"] : null);
        $object->setName(isset($data["name"]) ? $data["name"] : null);
        $object->setSurname(isset($data["surname"]) ? $data["surname"] : null);
        $object->setGender(isset($data["gender"]) ? $data["gender"] : null);
        $object->setLastSeenDate(isset($data["lastseen_date"]) ? $data["lastseen_date"] : null);
        $object->setRegistrationDate(isset($data["registration_date"]) ? $data["registration_date"] : null);
        $object->setLevel(isset($data["level"]) ? $data["level"] : null);
        $object->setNickname(isset($data["nickname"]) ? $data["nickname"] : null);

        return $object;
    }
}