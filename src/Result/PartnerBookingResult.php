<?php
/**
 * Date: 06-05-2020
 * @author Raymond Kiekens
 * @copyright (c) Oberon 2020
 */

namespace TOR\GraphQL\Result;

use TOR\GraphQL\Model\PartnerBooking;

class PartnerBookingResult
{
    /**
     * @var PartnerBooking
     */
    public $partner;

    /**
     * @return PartnerBooking
     */
    public function getPartner(): PartnerBooking
    {
        return $this->partner;
    }

    /**
     * @param PartnerBooking $partner
     * @return self
     */
    public function setPartner(PartnerBooking $partner): self
    {
        $this->partner = $partner;

        return $this;
    }
}