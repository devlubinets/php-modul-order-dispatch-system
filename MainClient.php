<?php

class MainClient implements ClientInterface
{
    /**
     * @var Batch
     */
    private Batch $batch;

    /**
     * @var CourierService
     */
    private CourierService $courierService;

    /**
     * @param CourierService $courierService
     * @param Batch $batch
     */
    public function __construct(CourierService $courierService, Batch $batch)
    {
        $this->courierService = $courierService;
        $this->batch = $batch;
    }

    /**
     * Start batch
     * One batch have many orders
     *
     * @return bool
     */
    public function startNewBatch(): bool
    {
        //Any event for start new Batch
        if (1) {
            return true;
        }
        return false;
    }

    /**
     * Add order to batch
     *
     * @return string
     */
    public function addConsignment(CourierInterface $courier, Order $order): void
    {
        $consignment = $this->courierService->createConsignment($courier, $order);
        $this->batch->addConsignment($consignment);
    }

    /**
     * End batch
     * One batch have many orders
     *
     * Before finish prepared batch service
     * send list orders by batch
     *
     * @return bool
     */
    public function endCurrentBatch(): bool
    {
        //Any event for end new Batch
        if (1) {
            $this->courierService->sendListsConsignmentsToCouriers($this->batch);
            return true;
        }
        return false;
    }
}