<?php

class RoyalMail implements CourierInterface
{
    /**
     * Get UID for consignment
     *
     * @param Order $order
     * @return string
     */
    public function getUIDConsignment(Order $order): string
    {
        return  __CLASS__ . '-' . rand(1,200) . '-' . $order->getOrderID();
    }

    /**
     * Send consignment from courier to client
     *
     * @param ConsignmentInterface $consignment
     * @return bool
     */
    public function sendConsignment(ConsignmentInterface $consignment): bool
    {
        // TODO: Implement sendParcel() method.
    }

    /**
     * Get list consignments for courier
     *
     * @param array $consignments
     * @return array
     */
    public function getConsignments(array $consignments): array
    {
        // TODO: Implement getConsignments() method.
    }
}