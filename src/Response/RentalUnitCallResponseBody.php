<?php
/**
 * Date: 30-04-2020
 * @author Raymond Kiekens
 * @copyright (c) Oberon 2020
 */

namespace Oberon\TravelbaseClient\Response;

use Oberon\TravelbaseClient\Result\RentalUnitResult;

class RentalUnitCallResponseBody implements GraphQLCallResponseBodyInterface
{
    /**
     * @var RentalUnitResult
     */
    private $data;

    public function __construct(RentalUnitResult $data)
    {
        $this->data = $data;
    }

    /**
     * @return RentalUnitResult
     */
    public function getData(): RentalUnitResult
    {
        return $this->data;
    }
}
