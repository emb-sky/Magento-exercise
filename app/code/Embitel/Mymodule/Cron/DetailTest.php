<?php

namespace Embitel\Mymodule\Cron;

class DetailTest
{

	public function execute()
	{
       
        $current_date=date("YMd_his");
        $name_of_file='customer_'.$current_date.'.csv';
      
 
        //Inserting the table headers
        $header_data=array(
            'Firstname',
            'Lastname',
            'Email',
            'Telephone');
        $header_data=array_combine($header_data,$header_data);
        $data=[];
        $data[]=$header_data;
        $data[]=[
        'Firstname'=>'krishna',
        'Lastname'=>'Sheikh',
        'Email'=>'krish@gmail.com',
        'Telephone'=>'789787897897'
];
        
    $file_update=fopen('/var/www/html/magento-open-source/var/export/'.$name_of_file,'w');

    foreach ($data as $value) {
        fputcsv($file_update,$value);
    }

        fclose($file_update);



	}
}