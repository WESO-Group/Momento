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
            "about" => $object->getAbout(),
            "name" => $object->getName(),
            "nickname" => $object->getNickname(),
            "gender" => $object->getGender(),
            "is_online" => $object->getIsOnline(),
            "phone_number" => $object->getPhoneNumber(),
            "language" => $object->getLanguage(),
            "num_posts" => $object->getNumPosts(),
            "account_id" => $object->getAccountId()
        ];
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  User $object
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
        $object->setAbout(isset($data["about"]) ? $data["about"] : null);
        $object->setName(isset($data["name"]) ? $data["name"] : null);
        $object->setGender(isset($data["gender"]) ? $data["gender"] : null);
        $object->setNickname(isset($data["nickname"]) ? $data["nickname"] : null);
        $object->setIsOnline(isset($data["is_online"]) ? $data["is_online"] : null);
        $object->setPhoneNumber(isset($data["phone_number"]) ? $data["phone_number"] : null);
        $object->setLanguage(isset($data["language"]) ? $data["language"] : null);
        $object->setNumPosts(isset($data["num_posts"]) ? $data["num_posts"] : null);
        $object->setAccountId(isset($data["account_id"]) ? $data["account_id"] : null);

        return $object;
    }
}