<?php
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 12:21
 */

class TimePushDataSource extends DataSource
{
    public function configUrlSource()
    {
        $this->strUrlSource = 'https://shiftstestapi.firebaseio.com/timePunches.json';
    }
}