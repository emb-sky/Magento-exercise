<?php

namespace Embitel\Employee\Controller\Adminhtml\Employee;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\Model\View\Result\ForwardFactory;

class Index extends Action{

    /**
     * @see _isAllowed()
     */

     const ACTION_RESOURCE = 'Embitel_Employee::employee';

     /**
      * @var Resgistry
      */

      protected $coreRegistry;

      /**
       * @var PageFactory
       */

       protected $resultPageFactory;

       /**
        * @var ForwardFactory
        */

        protected $resultForwardFactory;

        /**
         * @param Registry $registry
         * @param PageFactory $resultPageFactory
         * @param ForwardFactory $resultForwardFactory
         * @param Context $context
         */

         public function __construct(
            Registry $registry,
            PageFactory $resultPageFactory,
            ForwardFactory $resultForwardFactory,
            Context $context
         )
         {
            $this -> coreRegistry=$registry;
            $this -> resultPageFactory = $resultPageFactory;
            $this -> resultForwardFactory = $resultForwardFactory;
            parent::__construct($context);
         }

         /**
          * @return \Magento\Framework\View\Result\Page
          */

          public function execute()
          {
             //die("yes");
            //  $this->_group->loadLayout();
            //  $this->_group->renderLayout();
            $resultPage = $this -> resultPageFactory ->create();
            $resultPage->setActiveMenu('Embitel_Employee::employee');
            $resultPage-> addBreadcrumb(__('Employee feedback form'),__('Employee feedback form'));
            $resultPage-> getConfig()->getTitle() -> prepend(__('Employee feedback form'));
            return $resultPage;
          }
}


?>
