<?php
/**
 * Date: 30-04-2020
 * @author Raymond Kiekens
 * @copyright (c) Oberon 2020
 */

namespace TOR\GraphQL\Response;

use TOR\GraphQL\Result\PartnerResult;

class PartnerBookingCallResponseBody implements GraphQLCallResponseBodyInterface
{
    /**
     * @var PartnerResult
     */
    public $data;

    /**
     * @return PartnerResult
     */
    public function getData(): PartnerResult
    {
        return $this->data;
    }

    /**
     * @param PartnerResult $data
     * @return self
     */
    public function setData(PartnerResult $data): self
    {
        $this->data = $data;

        return $this;
    }
}