<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 20:22
 */

namespace Momento\Model;


interface PostRepositoryInterface
{
    /**
     * Return all posts. Each entry is Post item.
     *
     * @return Post[]
     * @see Post
     */
    public function findAllPosts();

    /**
     * Return post specified by $id.
     *
     * @param $id Post id in db
     * @return Post
     */
    public function findPost($id);
}