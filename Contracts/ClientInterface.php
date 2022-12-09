<?php

interface ClientInterface
{
    /**
     *  Start new batch with orders
     *
     * @return bool
     */
    public function startNewBatch(): bool;

    /**
     *
     *
     * @return void
     */
    public function addConsignment(CourierInterface $courier, Order $order): void;

    /**
     *  End preparing batch with orders
     *  This method send list of orders id by current batch
     *
     * @return bool
     */
    public function endCurrentBatch(): bool;
}