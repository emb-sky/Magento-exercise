<?php
namespace Embitel\Employee\Model\ResourceModel\Employee;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Embitel\Employee\Model\Employee',
            'Embitel\Employee\Model\ResourceModel\Employee'
        );
    }
}
