<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 16:59
 */

namespace App\Model;

use App\Api\Data;

class User extends AbstractModel implements Data\UserInterface
{
    /**
     * @inheritdoc
     */
    public function setId($id)
    {
        return $this->setData(Data\UserInterface::ID, $id);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getData(Data\UserInterface::ID);
    }

    /**
     * @inheritdoc
     */
    public function setFirstName($firstName)
    {
        return $this->setData(Data\UserInterface::FIRST_NAME, $firstName);
    }

    /**
     * @inheritdoc
     */
    public function getFirstName()
    {
        return $this->getData(Data\UserInterface::FIRST_NAME);
    }

    /**
     * @inheritdoc
     */
    public function setLastName($lastName)
    {
        return $this->setData(Data\UserInterface::LAST_NAME, $lastName);
    }

    /**
     * @inheritdoc
     */
    public function getLastName()
    {
        return $this->getData(Data\UserInterface::LAST_NAME);
    }

    /**
     * @inheritdoc
     */
    public function setEmail($email)
    {
        return $this->setData(Data\UserInterface::EMAIL, $email);
    }

    /**
     * @inheritdoc
     */
    public function getEmail()
    {
        return $this->getData(Data\UserInterface::EMAIL);
    }

    /**
     * @inheritdoc
     */
    public function setBirthday($birthday)
    {
        return $this->setData(Data\UserInterface::BIRTHDAY, $birthday);
    }

    /**
     * @inheritdoc
     */
    public function getBirthday()
    {
        return $this->getData(Data\UserInterface::BIRTHDAY);
    }
}
