<?php
namespace Embitel\Mymodule\Controller\Index\Index;

/**
 * Interceptor class for @see \Embitel\Mymodule\Controller\Index\Index
 */
class Interceptor extends \Embitel\Mymodule\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($resultPageFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
