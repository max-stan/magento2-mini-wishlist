<?php

declare(strict_types=1);

namespace MaxStan\MiniWishlist\Plugin;

use Magento\Wishlist\CustomerData\Wishlist;
use Magento\Wishlist\Helper\Data as WishlistHelper;

/**
 * Adds wishlist ID and wishlist item IDs to customer section data.
 */
class AddWishlistId
{
    public function __construct(
        private readonly WishlistHelper $wishlistHelper
    ) {
    }

    public function afterGetSectionData(Wishlist $subject, array $result): array
    {
        $wishlist = $this->wishlistHelper->getWishlist();
        $result['wishlist_id'] = (int) $wishlist->getId();

        return $result;
    }
}
