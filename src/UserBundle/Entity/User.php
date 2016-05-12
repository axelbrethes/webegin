<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="wb_user")
 */
class User extends BaseUser
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    
    protected $facebook_id;
    
    /** @ORM\Column(name="facebook_first_name", type="string", length=255, nullable=true) */
    
    protected $facebook_first_name;
    
    /** @ORM\Column(name="facebook_last_name", type="string", length=255, nullable=true) */
    
    protected $facebook_last_name;
    
    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    
    protected $facebook_access_token;
	
	public function __construct()
	{
		parent::__construct();
		// your own logic
	}

    /**
     * Set facebookId
     *
     * @param string $facebookId
     *
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebookAccessToken
     *
     * @param string $facebookAccessToken
     *
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebookAccessToken
     *
     * @return string
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * Set facebookFirstName
     *
     * @param string $facebookFirstName
     *
     * @return User
     */
    public function setFacebookFirstName($facebookFirstName)
    {
        $this->facebook_first_name = $facebookFirstName;

        return $this;
    }

    /**
     * Get facebookFirstName
     *
     * @return string
     */
    public function getFacebookFirstName()
    {
        return $this->facebook_first_name;
    }

    /**
     * Set facebookLastName
     *
     * @param string $facebookLastName
     *
     * @return User
     */
    public function setFacebookLastName($facebookLastName)
    {
        $this->facebook_last_name = $facebookLastName;

        return $this;
    }

    /**
     * Get facebookLastName
     *
     * @return string
     */
    public function getFacebookLastName()
    {
        return $this->facebook_last_name;
    }
}
