<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeliveryForecastOptions
{

    /**
     * @var int[] $ignoredLineItemIds
     */
    protected $ignoredLineItemIds = null;

    /**
     * @param int[] $ignoredLineItemIds
     */
    public function __construct(array $ignoredLineItemIds = null)
    {
      $this->ignoredLineItemIds = $ignoredLineItemIds;
    }

    /**
     * @return int[]
     */
    public function getIgnoredLineItemIds()
    {
      return $this->ignoredLineItemIds;
    }

    /**
     * @param int[] $ignoredLineItemIds
     * @return \Google\AdsApi\Dfp\v201705\DeliveryForecastOptions
     */
    public function setIgnoredLineItemIds(array $ignoredLineItemIds)
    {
      $this->ignoredLineItemIds = $ignoredLineItemIds;
      return $this;
    }

}
