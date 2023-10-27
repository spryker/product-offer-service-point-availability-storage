<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductOfferServicePointAvailabilityStorage\Extractor;

use ArrayObject;

class ProductOfferStorageExtractor implements ProductOfferStorageExtractorInterface
{
    /**
     * @param \ArrayObject<array-key, \Generated\Shared\Transfer\ProductOfferStorageTransfer> $productOfferStorageTransfers
     *
     * @return list<string>
     */
    public function extractProductOfferReferencesFromProductOfferStorages(ArrayObject $productOfferStorageTransfers): array
    {
        $productOfferReferences = [];
        foreach ($productOfferStorageTransfers as $productOfferStorageTransfer) {
            $productOfferReferences[] = $productOfferStorageTransfer->getProductOfferReferenceOrFail();
        }

        return $productOfferReferences;
    }
}
