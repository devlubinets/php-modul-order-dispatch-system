<?php

class Order implements OrderInterface
{
    /**
     * Order ID
     *
     * @var string
     */
    private string $id;

    /**
     * Set order ID
     *
     * @return void
     */
    public function setOrderID(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Get order ID
     *
     * @return string
     */
    public function getOrderID(): string
    {
        return $this->id;
    }
}