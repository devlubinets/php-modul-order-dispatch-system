<?php

class Consignment implements ConsignmentInterface
{
    /**
     * Courier
     *
     * @var CourierInterface
     */
    private CourierInterface $courier;

    /**
     * Consignment ID
     *
     * @var string
     */
    private string $consignmentID;

    /**
     * @param CourierInterface $courier
     * @param Order $order
     */
    public function __construct(CourierInterface $courier, Order $order)
    {
        $this->courier = $courier;
        $this->consignmentID = $courier->getUIDConsignment($order);
    }

    /**
     * Set ID for consignment
     *
     * @param string $id
     * @return void
     */
    public function setConsignmentID(string $id): void
    {
       $this->consignmentID = $id;
    }

    /**
     * Get consignment's ID
     *
     * @return string
     */
    public function getConsignmentID(): string
    {
        return $this->consignmentID;
    }

    /**
     * Get courier for consignment
     *
     * @return CourierInterface
     */
    public function getCourier(): CourierInterface
    {
        return $this->courier;
    }
}