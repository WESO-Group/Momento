<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 21:32
 */

namespace Momento\Model;


interface PostCommandInterface
{
    /**
     * Creates a new post entry in db.
     *
     * @param Post $post
     * @return Post the created post
     */
    public function createPost(Post $post);

    /**
     * Updates existing post in db.
     *
     * @param Post $post
     * @return Post the updated post
     */
    public function updatePost(Post $post);

    /**
     * Removes a post entry from database.
     *
     * @param Post $post
     * @return bool
     */
    public function deletePost(Post $post);
}