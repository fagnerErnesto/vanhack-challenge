<?php
require_once __DIR__ . '/../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 11:22
 */

class Location
{
    protected $arrLocations;
    protected $locationId;

    public function getLocations($id = null)
    {
        if (!is_null($id)) {
            $this->locationId = $id;
        }
        $objDao = new LocationDataSource();
        $this->arrLocations = $objDao->getData( $id );
        return $this->arrLocations;
    }

    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    public function getLabourSetting()
    {
        return $this->arrLocations['labourSettings'];
    }

}