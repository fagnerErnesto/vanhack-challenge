<?php
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 13:28
 */

abstract class DataSource implements IDataSource
{
    protected $strUrlSource;

    public function __construct()
    {
        $this->configUrlSource();
    }

    /**
     * @param null $id
     * @return mixed
     * @throws Exception
     */
    public function getData($id = null)
    {
        if (!$this->strUrlSource) {
            throw new Exception('You should informe a valid source.');
        }
        $arrData = json_decode(file_get_contents($this->strUrlSource), true);

        return (!is_null($id)) ? $arrData[$id] : $arrData;
    }


}