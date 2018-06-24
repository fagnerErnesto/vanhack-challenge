<?php
require_once __DIR__ . '/../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 11:22
 */

class User
{
    protected $location;
    protected $arrData;
    protected $user;
    protected $userId;

    public function __construct(Location $location)
    {
        $this->location = $location;
    }

    public function getUser($userId = null)
    {
        if (is_null($this->location->getLocationId())) {
            throw new Exception('You should pass an existent location for user');
        }
        if (is_null($this->arrData[$this->location->getLocationId()])) {
            $objDao = new UserDataSource();
            $this->arrData = $objDao->getData();
        }
        if (!is_null($userId)) {
            $this->userId = $userId;
        }
        return (!is_null($userId))
            ? $this->arrData[$this->location->getLocationId()][$userId]
            : $this->arrData[$this->location->getLocationId()];
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}