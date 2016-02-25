<?php
    /**
     * Created by PhpStorm.
     * User: sinan.gul
     * Date: 25.2.2016
     * Time: 17:24
     */

    namespace AppBundle\Entity;

    use FOS\UserBundle\Model\User as BaseUser;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * Class User
     * @package AppBundle\Entity
     *
     * @ORM\Entity
     * @ORM\Table(name="user")
     */
    class User extends BaseUser
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        public function __construct()
        {
            parent::__construct();
        }

    }