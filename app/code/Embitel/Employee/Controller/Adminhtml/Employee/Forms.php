<?php

namespace Embitel\Employee\Controller\Adminhtml\Employee;

class Forms extends \Magento\Framework\App\Action\Action
{
/** @var \Magento\Framework\View\Result\PageFactory  */
protected $resultPageFactory;
public function __construct(
     \Magento\Framework\App\Action\Context $context,
     \Magento\Framework\View\Result\PageFactory $resultPageFactory
) {
     $this->resultPageFactory = $resultPageFactory;
     parent::__construct($context);
}
/**
* Load the page defined in view/adminhtml/layout/samplenewpage_sampleform_index.xml
*
* @return \Magento\Framework\View\Result\Page
*/
public function execute()
{
     $returnPage=$this->resultPageFactory->create();
     $returnPage->getConfig()->getTitle()->prepend(__('Employee feedback Form'));
     return $returnPage; 
}
}