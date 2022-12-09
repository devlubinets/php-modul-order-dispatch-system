<?php

class CourierService
{
    /**
     * All couriers
     *
     * @var array
     */
    private array $couriers = [
        DHL::class,
        DPD::class,
        RoyalMail::class
    ];


    /**
     * Create consignment for courier
     *
     * @param CourierInterface $courier
     * @param Order $order
     * @return ConsignmentInterface
     */
    public function createConsignment(CourierInterface $courier, Order $order): ConsignmentInterface
    {
        //Any manipulations for build consignment

        $consignment = new Consignment($courier, $order);
        $consignmentID = $courier->getUIDConsignment($order);
        $consignment->setConsignmentID($consignmentID);

        return $consignment;
    }

    /**
     * Send consignments to all couriers
     *
     * @param Batch $batch
     * @return void
     */
    public function sendListsConsignmentsToCouriers(Batch $batch)
    {
        foreach ($this->couriers as $courier) {
            $currentCourier = new $courier();
            $consignments = $currentCourier->getConsignments();
            $currentCourier->getConsignments($consignments);
        }
    }

}