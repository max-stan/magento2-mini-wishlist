<?php

declare(strict_types=1);

namespace MaxStan\MiniWishlist\CustomerData;

use Magento\Wishlist\CustomerData\Wishlist;

/**
 * Wishlist section providing full item list (up to 20 items).
 *
 * The core Wishlist section is hardcoded to 3 items (SIDEBAR_ITEMS_NUMBER).
 * This subclass overrides getItems() to return up to 20 items for the wishlist drawer.
 */
class WishlistFull extends Wishlist
{
    private const int MAX_ITEMS = 20;

    /**
     * @inheritdoc
     */
    public function getSectionData(): array
    {
        return [
            'items' => $this->getItems(),
            'wishlist_id' => (int)$this->wishlistHelper->getWishlist()->getId(),
        ];
    }

    protected function getItems(): array
    {
        $collection = $this->wishlistHelper->getWishlistItemCollection();
        $collection->clear()->setPageSize(self::MAX_ITEMS)
            ->setInStockFilter()
            ->setOrder('added_at');

        $items = [];
        foreach ($collection as $wishlistItem) {
            $items[] = $this->getItemData($wishlistItem);
        }
        return $items;
    }
}
