<?php
require_once __DIR__ . '/../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 11:23
 */

class TimePush
{
    protected $arrData;
    public function getTimePush($id = null)
    {

        $objDao = new TimePushDataSource();
        $this->arrData = $objDao->getData( $id );

        return (is_null($id)) ? $this->arrData : $this->arrData[$id];
    }

    public function getTimePushByUser($userId)
    {
        $arrTimePushedByUser = [];
        foreach ($this->arrData as $timePush) {
            if ($timePush['userId'] != $userId) continue;
            $arrTimePushedByUser[] = $timePush;
        }
        return $arrTimePushedByUser;
    }
}