<?php
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 12:21
 */

class UserDataSource extends DataSource
{
    public function configUrlSource()
    {
        $this->strUrlSource = 'https://shiftstestapi.firebaseio.com/users.json';
    }
}