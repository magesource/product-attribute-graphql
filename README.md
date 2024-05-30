# Magesource_CustomerImport
Magesource Product Attribute in Graph Ql for Magento 2.

## Installation

 - Install the module composer by running `composer require magesource/product-attribute-graphql:dev-main`
 - Enable the module by running `php bin/magento module:enable Magesource_ProductAttributeGraphQl`
 - Run Magento commands by running

   `php bin/magento set:up;php bin/magento s:d:c;php bin/magento s:s:d -f;php bin/magento c:f`


## Features

Create custom product attribute and get value in product api of graph ql.

## Testing

Use graphql after magento 2 store base url
{Magento 2 Base Url}/graphql

Query:

{
    products(
    filter: { sku: { eq: "{Product Sku}" } }
    ){
        items {
          id
          sku
          name
          is_type
        }
    }
}
