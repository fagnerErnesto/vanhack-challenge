<?php
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 13:19
 */

interface IDataSource
{
    public function getData($id = null);
    public function configUrlSource();
}