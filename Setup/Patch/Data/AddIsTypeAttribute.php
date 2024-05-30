<?php
/**
 * @author Magesource
 * @copyright Magesource. All rights reserved.
 * @package Magesource Product Attribute in Graph Ql for Magento 2.
 */
declare(strict_types=1);

namespace Magesource\ProductAttributeGraphQl\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class AddIsTypeAttribute implements DataPatchInterface
{
    private ModuleDataSetupInterface $moduleDataSetup;
    private EavSetupFactory          $eavSetupFactory;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function apply()
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $eavSetup->addAttribute(\Magento\Catalog\Model\Product::ENTITY, 'is_type', [
            'type' => 'int',
            'backend' => '',
            'frontend' => '',
            'label' => 'Is Type',
            'input' => 'select',
            'class' => '',
            'source' => \Magesource\ProductAttributeGraphQl\Model\Source\Config\Options::class,
            'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
            'visible' => true,
            'required' => false,
            'user_defined' => false,
            'default' => '1',
            'searchable' => true,
            'filterable' => true,
            'comparable' => true,
            'visible_on_front' => true,
            'used_in_product_listing' => true,
            'unique' => false,
            'apply_to' => ''
        ]);
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}
