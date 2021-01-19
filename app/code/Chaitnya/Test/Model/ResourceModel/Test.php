<?php

namespace Chaitnya\Test\Model\ResourceModel;

class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('chaitnya_test', 'test_id');   //here "chaitnya_test" is table name and "test_id" is the primary key of custom table
    }
}