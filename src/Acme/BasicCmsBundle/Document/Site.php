<?php
/**
 * Author: vidy
 * Date: 6/12/15 18:22
 * Email: videni@foxmail.com
 */

namespace Acme\BasicCmsBundle\Document;


use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document()
 */
class Site
{
    /**
     * @PHPCR\Id()
     */
    protected $id;
    /**
     * @PHPCR\ReferenceOne(targetDocument="Acme\BasicCmsBundle\Document\Page")
     */
    protected $homepage;

    public function getHomepage()
    {
        return $this->homepage;
    }

    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @PHPCR\Children()
     */
    protected $children;

    public function getChildren()
    {
        return $this->children;
    }
}