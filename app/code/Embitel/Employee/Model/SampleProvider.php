<?php
namespace Embitel\Employee\Model;

use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Embitel\Employee\Model\ResourceModel\Employee\CollectionFactory;



class SampleProvider extends AbstractDataProvider implements \Magento\Framework\View\Element\UiComponent\DataProvider\DataProviderInterface
{
    /**
     * @var DataPersistorInterface
     */

     protected $dataPersistor;

     /**
      * @var array
      */

      protected $loadedData;

      public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $employeeCollectionFactory,
        array $meta =[],
        array $data =[]
      )
      {
        $this-> collection = $employeeCollectionFactory -> create();
        parent::__construct($name,$primaryFieldName,$requestFieldName,$meta,$data);
      }

      public function getData()
      {
        $this -> loadedData = [];
        return $this -> loadedData;
      }
}

?>