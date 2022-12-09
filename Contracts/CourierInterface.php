<?php

interface CourierInterface
{
    /**
     * Get UID for consignment
     *
     * @param Order $order
     * @return string
     */
    public function getUIDConsignment(Order $order):string;

    /**
     * Send consignment from courier to client
     *
     * @param ConsignmentInterface $consignment
     * @return bool
     */
    public function sendConsignment(ConsignmentInterface $consignment): bool;

    /**
     * Get list consignments for courier
     *
     * @param array $consignments
     * @return array
     */
    public function getConsignments(array $consignments): array;
}