<?php

namespace Etsy\Resources;

use Etsy\Resource;

/**
 * Taxonomy resource class. Represents a taxonomy within Etsy. These are essentially categories used for listing.
 *
 * @link   https://developers.etsy.com/documentation/reference/#tag/SellerTaxonomy
 * @author Rhys Hall hello@rhyshall.com
 */
class Taxonomy extends Resource
{

    /**
     * Get the propertys for this Taxonomy node.
     *
     * @return \Etsy\Collection[TaxonomyProperty]
     */
    public function getProperties()
    {
        return $this->request(
            'GET',
            "/application/seller-taxonomy/nodes/{$this->id}/properties",
            "TaxonomyProperty"
        );
    }

}
