<?php

class Batch implements BatchInterface
{
    /**
     * List of consigment's it by batch
     * @var array
     */
    private array $list = [];

    /**
     * Add consignment's id to batch
     *
     * @param ConsignmentInterface $consignment
     * @return void
     */
    public function addConsignment(ConsignmentInterface $consignment): void
    {
        array_push($this->list, $consignment->getConsignmentID());
    }

    /**
     * Get list's consignment's id
     *
     * @return array
     */
    public function getListConsignments(): array
    {
       return $this->list;
    }
}