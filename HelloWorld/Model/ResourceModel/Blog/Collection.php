<?php

namespace VarnitS\HelloWorld\Model\ResourceModel\Blog;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use VarnitS\HelloWorld\Model\Blog as BlogModel;
use VarnitS\HelloWorld\Model\ResourceModel\Blog as BlogResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(BlogModel::class, BlogResourceModel::class);
    }
}
?>