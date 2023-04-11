<?php
namespace Embitel\Mymodule\Model\Resolver\StatusDisplay;

/**
 * Interceptor class for @see \Embitel\Mymodule\Model\Resolver\StatusDisplay
 */
class Interceptor extends \Embitel\Mymodule\Model\Resolver\StatusDisplay implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\GroupFactory $group)
    {
        $this->___init();
        parent::__construct($group);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
