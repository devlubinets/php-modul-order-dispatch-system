<?php

interface BatchInterface
{
    /**
     * Add consignment to batch
     *
     * @param ConsignmentInterface $consignment
     * @return void
     */
    public function addConsignment(ConsignmentInterface $consignment): void;

    /**
     * Get list's consignments by batch
     *
     * @return array
     */
    public function getListConsignments(): array;
}