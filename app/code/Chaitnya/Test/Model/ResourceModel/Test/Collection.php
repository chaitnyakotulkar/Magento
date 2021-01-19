<?php
namespace Chaitnya\Test\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Chaitnya\Test\Model\Test',
            'Chaitnya\Test\Model\ResourceModel\Test'
        );
    }
}