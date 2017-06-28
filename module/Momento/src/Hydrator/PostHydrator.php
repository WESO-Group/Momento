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
            "author_id" => $object->getAuthorId(),
            "creation_date" => $object->getCreationDate(),
            "text" => $object->getText(),
            "title" => $object->getTitle(),
            "num_views" => $object->getNumViews(),
            "next_id" => $object->getNextId(),
            "prev_id" => $object->getPrevId()
        ];
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  Post $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        if ( ! $object instanceof Post ) {
            return $object;
        }

        $object->setId(isset($data["id"]) ? $data["id"] : null);
        $object->setCreationDate(isset($data["creation_date"]) ? $data["creation_date"] : null);
        $object->setText(isset($data["text"]) ? $data["text"] : null);
        $object->setTitle(isset($data["title"]) ? $data["title"] : null);
        $object->setNumViews(isset($data["num_views"]) ? $data["num_views"] : null);
        $object->setNextId(isset($data["next_id"]) ? $data["next_id"] : null);
        $object->setPrevId(isset($data["prev_id"]) ? $data["prev_id"] : null);

        // Set author data, if provided
        // TODO: make constructor injection
        if ( isset($data["name"]) ) {
            $userHydrator = new UserHydrator();
            $author = $userHydrator->hydrate($data, new User());
        } else {
            $author = isset($data["author_id"]) ? $data["author_id"] : null;
        }

        $object->setAuthor($author);

        return $object;
    }
}