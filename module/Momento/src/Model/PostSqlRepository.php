<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 21:40
 */

namespace Momento\Model;


use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\Sql\Exception\InvalidArgumentException;
use Zend\Db\Sql\Exception\RuntimeException;
use Zend\Db\Sql\Sql;
use Zend\Hydrator\HydratorInterface;

class PostSqlRepository implements PostRepositoryInterface
{

    /**
     * @var AdapterInterface
     */
    private $db;

    /**
     * @var HydratorInterface
     */
    private $hydrator;

    /**
     * @var Post
     */
    private $postPrototype;

    public function __construct(AdapterInterface $db,
        HydratorInterface $hydrator, Post $postPrototype)
    {
        $this->db = $db;
        $this->hydrator = $hydrator;
        $this->postPrototype = $postPrototype;
    }

    /**
     * {@inheritdoc}
     */
    public function findAllPosts()
    {
        $sql = new Sql($this->db);

        $select = $sql->select('posts')->join(
            ["u" => "users"],
            "u.id = author_id",
            ["name", "nickname", "avatar"]
        );

        $statement = $sql->prepareStatementForSqlObject($select);
        $result = $statement->execute();

        if ( ! $result instanceof ResultInterface || ! $result->isQueryResult()) {
            return [];
        }

        $resultSet = new HydratingResultSet($this->hydrator, $this->postPrototype);
        $resultSet->initialize($result);

        return $resultSet;
    }

    /**
     * {@inheritdoc}
     */
    public function findPost($id)
    {
        $sql = new Sql($this->db);
        $select = $sql->select('posts');
        $select->where(['id = ?' => $id]);
        $statement = $sql->prepareStatementForSqlObject($select);
        $result = $statement->execute();

        if ( !$result instanceof  ResultInterface || ! $result->isQueryResult() ) {
            throw new RuntimeException("Failed to get blog with id $id; Unknown database error.");
        }

        $resultSet = new HydratingResultSet($this->hydrator, $this->postPrototype);
        $resultSet->initialize($result);
        $post = $resultSet->current();

        if ( !$post ) {
            throw new InvalidArgumentException("Blog post with identifier $id not found.");
        }

        return $post;
    }
}