<?php
namespace Embitel\Employee\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function __construct()
    {
        $this->_init('Embitel\Employee\Model\ResourceModel\Employee');
    }
}
