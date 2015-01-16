<?php

/**
 * This file is part of the <name> project.
 *
 * (c) Rodrigo G. Villarreal <rodrigodj2000@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Document;

use Sonata\UserBundle\Document\BaseGroup as BaseGroup;

/**
 * This file has been generated by the EasyExtends bundle ( http://sonata-project.org/bundles/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/docs/mongodb_odm/1.0/en/reference/working-with-objects.html
 *
 * @author Rodrigo G. Villarreal <rodrigodj2000@gmail.com>
 */
class Group extends BaseGroup
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}