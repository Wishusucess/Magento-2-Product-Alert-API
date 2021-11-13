<?php
/**
 * Category: Wishusucess Product Alert API 
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\ProductAlertApi\Api;
use Exception;

/**
 * Interface ProductAlertManagementInterface
 * @api
 */
interface ProductAlertManagementInterface
{
    /**
     * Return true if product Added to Alert.
     *
     * @param int $customerId
     * @param int $productId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function addProductAlertStock($customerId, $productId);
    /**
     * Return true if product Added to Alert.
     *
     * @param int $customerId
     * @param int $productId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteProductAlertStock($customerId, $productId);
    /**
     * Return true if product Added to Alert.
     *
     * @param int $customerId
     * @param int $productId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function addProductAlertPrice($customerId, $productId);
    /**
     * Return true if product Added to Alert.
     *
     * @param int $customerId
     * @param int $productId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteProductAlertPrice($customerId, $productId);
}
