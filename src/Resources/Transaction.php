<?php

namespace Etsy\Resources;

use Etsy\Resource;

/**
 * Transaction resource class. Represents a single item sale on Etsy.
 *
 * @link   https://developers.etsy.com/documentation/reference#tag/Shop-Receipt-Transactions
 * @author Rhys Hall hello@rhyshall.com
 */
class Transaction extends Resource
{

    /**
     * Get primary listing image for this transaction.
     *
     * @link https://developers.etsy.com/documentation/reference/#operation/getListingImage
     * @return \Etsy\Resource|\Etsy\Resources\ListingImage
     */
    public function getPrimaryImage()
    {
        return $this->request(
            "GET",
            "/application/listings/{$this->listing_id}/images/{$this->listing_image_id}",
            "ListingImage"
        );
    }
}
