<?php
namespace Embitel\Mymodule\Model\Resolver;

use \Magento\Framework\GraphQl\Config\Element\Field;
use \Magento\Framework\GraphQl\Query\ResolverInterface;
use \Magento\Framework\GraphQl\Schema\Type\ResolveInfo;


class CustomerData implements ResolverInterface
{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    )
    {
        $data=[
            [   
                'id'=>'1',
                'firstname'=>'Akash',
                'lastname'=>'Shetty',
                'email'=>'sky@gmail.com',
                'telephone'=>'0820789',
                'city'=>'Bangaluru',
                'state'=>'Karnataka',
                'country'=>'India'
            ],
            [   
                'id'=>'2',
                'firstname'=>'Shashank Suvarna',
                'lastname'=>'Ganesh',
                'email'=>'sha@gmail.com',
                'telephone'=>'415454531',
                'city'=>'Udupi',
                'state'=>'Karnataka',
                'country'=>'India'
            ],
        ];
    return [
        'total_count'=>count($data),
        'details'=>$data
    ];

    }
}