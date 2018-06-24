<?php
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 12:21
 */

class LocationDataSource extends DataSource
{
    public function configUrlSource()
    {
        $this->strUrlSource = 'https://shiftstestapi.firebaseio.com/locations.json';
    }
}