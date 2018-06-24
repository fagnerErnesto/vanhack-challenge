<?php
require_once '../LocationDataSource.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 12:48
 */

use PHPUnit\Framework\TestCase;
class DataSourceTest extends TestCase
{

    public function testGetDataFrom()
    {
        $arrSources = [
            DataSource::LOCATION,
            DataSource::TIME_PUSH,
            DataSource::USER,
            //'',
            //1,
            //null
        ];

        foreach ($arrSources as $source) {
            $this->assertTrue(is_array(DataSource::getData( $source )));
        }
    }
}
