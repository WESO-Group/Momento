<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 20:36
 */

namespace Momento\Model;


class PostRepository implements PostRepositoryInterface
{

    /**
     * {@inheritdoc}
     */
    public function findAllPosts()
    {
        $posts = $this->table->select(function(Select $select) {
//            $select->offset($offset);
//
//            if ( $limit !== -1 ) {
//                $select->limit($limit);
//            }

            $select->join(['u' => 'users'], 'u.id = author', [
                "user.id"           => "id",
                "user.name"         => "name",
                "user.surname"      => "surname",
                "user.nickname"     => "nickname",
                "user.gender"       => "gender",
                "user.description"  => "description",
                "user.age"          => "age",
                "user.registration_date" => "registration_date",
                "user.lastseen_date"     => "lastseen_date",
                "user.level"        => "level",
                "user.avatar"       => "avatar",
            ], Select::JOIN_INNER);

            $select->order("created ASC");
        });

        return $posts;
    }

    /**
     * {@inheritdoc}
     */
    public function findPost($id)
    {
        $results = $this->table->select([
            'id' => $id
        ]);

        return $results->current();
    }
}