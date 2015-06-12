<?php
/**
 * Author: vidy
 * Date: 6/12/15 14:22
 * Email: videni@foxmail.com
 */

namespace Acme\BasicCmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Cmf\Component\Routing\RouteReferrersReadInterface;
use Knp\Menu\NodeInterface;

/**
 * @PHPCR\Document(referenceable=true)
 */
class Page implements RouteReferrersReadInterface, NodeInterface
{
    use ContentTrait;

    /**
     * @PHPCR\Children()
     */
    protected $children;

    public function getName()
    {
        return $this->title;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function getOptions()
    {
        return array(
            'label' => $this->title,
            'content' => $this,
            'attributes' => array(),
            'childrenAttributes' => array(),
            'displayChildren'=>true,
            'linkAttributes'=>array(),
            'labelAttributes'=>[]
        ); }
}