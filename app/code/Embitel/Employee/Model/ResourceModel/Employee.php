<?php
namespace Embitel\Employee\Model\ResourceModel;

class Employee extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('employee', 'id');   //here "employee" is table name and "id" is the primary key of custom table
    }
}
