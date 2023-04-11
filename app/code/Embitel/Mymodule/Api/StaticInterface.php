<?php
namespace Embitel\Mymodule\Api;

interface StaticInterface
{
    /**
     * Get Data
     *
     * @return array
     */
    public function getCustomerData();

    /**
     * set Data
     * 
     * @param string[] $customerData
     * @return array
     */
    public function setCustomerGroup($customerData);


}
