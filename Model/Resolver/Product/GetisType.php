<?php

/**
 * @author Magesource
 * @copyright Magesource. All rights reserved.
 * @package Magesource Product Attribute in Graph Ql for Magento 2.
 */
namespace Magesource\ProductAttributeGraphQl\Model\Resolver\Product;

use \Magento\Catalog\Model\Product;

class GetisType implements \Magento\Framework\GraphQl\Query\ResolverInterface
{
    protected $productdata;

    public function __construct(
        Product $productdata
    ) {
        $this->productdata = $productdata;
    }
    
    public function resolve(
        \Magento\Framework\GraphQl\Config\Element\Field $field,
        $context,
        \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $product = $value['model'];
        $productdata = $this->productdata->load($product->getId());
        $isType = $productdata->getResource()->getAttribute('is_type')->getFrontend()->getValue($productdata);
        return $isType;
    }
}