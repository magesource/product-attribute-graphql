<?php
/**
 * @author Magesource
 * @copyright Magesource. All rights reserved.
 * @package Magesource Product Attribute in Graph Ql for Magento 2.
 */
declare(strict_types=1);

namespace Magesource\ProductAttributeGraphQl\Model\Source\Config;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Options extends AbstractSource
{
    /**
     * @return array
     */
    public function getAllOptions(): array
    {
        $this->_options = [
            ['label' => '', 'value' => '0'],
            ['label' => 'New', 'value' => '1'],
            ['label' => 'Sale', 'value' => '2'],
            ['label' => 'Exclusive', 'value' => '3']
        ];
        return $this->_options;
    }
}