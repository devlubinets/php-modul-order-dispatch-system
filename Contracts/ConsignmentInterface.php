<?php

interface ConsignmentInterface
{
    /**
     * Set consignment id
     *
     * @return void
     */
    public function setConsignmentID(string $id): void;

    /**
     * Get consignment id
     *
     * @return string
     */
    public function getConsignmentID(): string;

    /**
     * Get courier for consignment
     *
     * @return CourierInterface
     */
    public function getCourier(): CourierInterface;
}