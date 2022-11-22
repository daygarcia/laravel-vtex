<?php

namespace Models\Catalog;

use LaravelVtex\Model\BaseModel;
use LaravelVtex\Model\ModelInterface;

class GetProductsFromACollection extends BaseModel implements ModelInterface
{
    private $container;

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data)
    {
        $this->container['page'] = isset($data['page']) ? $data['page'] : 1;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : 10;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['release_from'] = isset($data['release_from']) ? $data['release_from'] : null;
        $this->container['release_to'] = isset($data['release_to']) ? $data['release_to'] : null;
        $this->container['specification_product'] = isset($data['specification_product']) ? $data['specification_product'] : null;
        $this->container['specification_field_id'] = isset($data['specification_field_id']) ? $data['specification_field_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!empty($this->container['page']) && !is_int($this->container['page'])) {
            $invalidProperties[] = "'page' must be a integer";
        }

        if (!empty($this->container['page_size']) && !is_int($this->container['page_size'])) {
            $invalidProperties[] = "'page_size' must be a integer";
        }

        if (!empty($this->container['filter']) && !is_string($this->container['filter'])) {
            $invalidProperties[] = "'filter' must be a string";
        }

        if (!empty($this->container['active']) && !is_bool($this->container['active'])) {
            $invalidProperties[] = "'active' must be a boolean";
        }

        if (!empty($this->container['visible']) && !is_string($this->container['visible'])) {
            $invalidProperties[] = "'visible' must be a boolean";
        }

        if (!empty($this->container['category_id']) && !is_int($this->container['category_id'])) {
            $invalidProperties[] = "'category_id' must be a integer";
        }

        if (!empty($this->container['brand_id']) && !is_int($this->container['brand_id'])) {
            $invalidProperties[] = "'brand_id' must be a integer";
        }

        if (!empty($this->container['supplier_id']) && !is_int($this->container['supplier_id'])) {
            $invalidProperties[] = "'supplier_id' must be a integer";
        }

        if (!empty($this->container['release_from']) && !is_string($this->container['release_from'])) {
            $invalidProperties[] = "'release_from' must be a string";
        }

        if (!empty($this->container['specification_product']) && !is_string($this->container['specification_product'])) {
            $invalidProperties[] = "'specification_product' must be a string";
        }

        if (!empty($this->container['specification_field_id']) && !is_int($this->container['specification_field_id'])) {
            $invalidProperties[] = "'specification_field_id' must be a string";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets page.
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page.
     *
     * @param int $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets page_size.
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size.
     *
     * @param int $page_size
     *
     * @return $this
     */

    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets filter.
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter.
     *
     * @param string $filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets active.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active.
     *
     * @param bool $active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible.
     *
     * @param bool $visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets category_id.
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id.
     *
     * @param int $category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets brand_id.
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id.
     *
     * @param int $brand_id
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets supplier_id.
     *
     * @return int
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id.
     *
     * @param int $supplier_id
     *
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets release_from.
     *
     * @return string
     */
    public function getReleaseFrom()
    {
        return $this->container['release_from'];
    }

    /**
     * Sets release_from.
     *
     * @param string $release_from
     *
     * @return $this
     */
    public function setReleaseFrom($release_from)
    {
        $this->container['release_from'] = $release_from;

        return $this;
    }

    /**
     * Gets specification_product.
     *
     * @return string
     */
    public function getSpecificationProduct()
    {
        return $this->container['specification_product'];
    }

    /**
     * Sets specification_product.
     *
     * @param string $specification_product
     *
     * @return $this
     */
    public function setSpecificationProduct($specification_product)
    {
        $this->container['specification_product'] = $specification_product;

        return $this;
    }

    /**
     * Gets specification_field_id.
     *
     * @return int
     */
    public function getSpecificationFieldId()
    {
        return $this->container['specification_field_id'];
    }

    /**
     * Sets specification_field_id.
     *
     * @param int $specification_field_id
     *
     * @return $this
     */
    public function setSpecificationFieldId($specification_field_id)
    {
        $this->container['specification_field_id'] = $specification_field_id;

        return $this;
    }
}
