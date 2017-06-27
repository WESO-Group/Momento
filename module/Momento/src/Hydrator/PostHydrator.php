<?php


namespace Momento\Hydrator;

use Momento\Model\Post;
use Momento\Model\User;
use Zend\Hydrator\HydratorInterface;

/**
 * Created by PhpStorm.
 * User: archie
 * Date: 27.06.17
 * Time: 13:25
 */
class PostHydrator implements HydratorInterface
{

    /**
     * Extract values from an object
     *
     * @param  Post $object
     * @return array
     */
    public function extract($object)
    {
        if ( ! $object instanceof Post ) {
            return array();
        }

        return [
            "id" => $object->getId(),
            "author" => $object->getAuthor(),
            "created" => $object->getCreated(),
            "text" => $object->getText(),
            "title" => $object->getTitle()
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
        if ( ! $object instanceof Post ) {
            return $object;
        }

        $object->setId(isset($data["id"]) ? $data["id"] : null);
        $object->setCreated(isset($data["created"]) ? $data["created"] : null);
        $object->setText(isset($data["text"]) ? $data["text"] : null);
        $object->setTitle(isset($data["title"]) ? $data["title"] : null);

        // Set author data, if provided
        // TODO: make constructor injection
        if ( isset($data["name"]) ) {
            $userHydrator = new UserHydrator();
            $author = $userHydrator->hydrate($data, new User());
        } else {
            $author = isset($data["author"]) ? $data["author"] : null;
        }

        $object->setAuthor($author);

        return $object;
    }
}