# 🛍️ Magento 2 Mini Wishlist

> Fully CSP-compatible slide-out wishlist drawer for Hyvä themes with inline product search, GraphQL-based add/remove

Customers browse, save, and manage their wishlist without ever leaving the product catalog. They search and add products directly inside the drawer, remove items with a single click, and see their wishlist count update in the header in real time. No redirects. No lost context. Just a smoother path from interest to purchase.

## 🛠️ Installation

```bash
composer require max-stan/magento2-mini-wishlist
bin/magento module:enable MaxStan_MiniWishlist
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:flush
```

## 🚀 Contributing

Contributions are welcome! If you find a bug or have a feature request, feel free to open an issue or submit a pull request.
