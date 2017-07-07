<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User",
     * inversedBy="posts"
     * )
     */
    private $user;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="postTitle", type="string", length=45)
     */
    private $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="postContent", type="text")
     */
    private $postContent;

    /**
     * @var int
     *
     * @ORM\Column(name="postPrice", type="integer")
     */
    private $postPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="postPostCode", type="integer")
     */
    private $postPostCode;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return Post
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     *
     * @return Post
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * Get postContent
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postPrice
     *
     * @param integer $postPrice
     *
     * @return Post
     */
    public function setPostPrice($postPrice)
    {
        $this->postPrice = $postPrice;

        return $this;
    }

    /**
     * Get postPrice
     *
     * @return int
     */
    public function getPostPrice()
    {
        return $this->postPrice;
    }

    /**
     * Set postPostCode
     *
     * @param integer $postPostCode
     *
     * @return Post
     */
    public function setPostPostCode($postPostCode)
    {
        $this->postPostCode = $postPostCode;

        return $this;
    }

    /**
     * Get postPostCode
     *
     * @return int
     */
    public function getPostPostCode()
    {
        return $this->postPostCode;
    }
}

