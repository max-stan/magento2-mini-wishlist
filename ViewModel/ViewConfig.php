<?php

declare(strict_types=1);

namespace MaxStan\MiniWishlist\ViewModel;

use Magento\Framework\Config\View;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ViewConfig implements ArgumentInterface
{
    public function __construct(
        private readonly View $viewConfig
    ) {
    }

    public function getThumbnailSize(): array
    {
        $attributes = $this->viewConfig->getMediaAttributes(
            'Magento_Catalog',
            'images',
            'mini_cart_product_thumbnail'
        );

        return [$attributes['width'], $attributes['height']];
    }
}
