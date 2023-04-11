<?php
namespace Embitel\Mymodule\Model;

use Magento\Framework\App\Action\Context;
use \Vendor\Module\Api\GetCustomerInterface;
use Magento\Customer\Model\GroupFactory;



class StaticService  implements \Embitel\Mymodule\Api\StaticInterface
{
    protected $_group;
    public function __construct(
        Context $context,
        GroupFactory $group
    ) {
        $this->_group = $group;
    }
    /**
     * Get Data
     *
     * @return array
     */
    public function getCustomerData()
    {
        return [
        [
        'firstname'=>'Akash',
        'lastname'=>'Shetty',
        'email'=>'sky@gmail.com',
        'telephone'=>'0820-7897987',
        'city'=>'Bangaluru',
        'state'=>'Karnataka',
        'Country'=>'India'
        ],
        [
        'firstname'=>'Krishna',
        'lastname'=>'Sheikh',
        'email'=>'krishna@gmail.com',
        'telephone'=>'0820-7897545',
        'city'=>'Udupi',
        'state'=>'Karnataka',
        'Country'=>'India'
        ],
        [
        'firstname'=>'Manindar',
        'lastname'=>'Singh',
        'email'=>'manindar@gmail.com',
        'telephone'=>'0820-4547987',
        'city'=>'Bengal',
        'state'=>'Bengal',
        'Country'=>'India'
        ]
            
        ];
    }

    /**
     * set Data
     * 
     * @param string[] $customerData
     * @return array
     */

    public function setCustomerGroup($customerData)
    {
        try {
            
            $data=[
                'customer_group_code'=>$customerData['groupName'],
                'tax_class_id' => 3
            ];
            $group = $this->_group->create();
            $group->setData($data);
            $group->save();
            $dataArr=[
                'group_id'=>$group->getCustomerGroupId(),
                'group_name'=>$group->getCustomerGroupCode()
            ];
            return $dataArr;
        
            } catch (\Throwable $th) {
            $th->getMessage();
            }
    }


}
