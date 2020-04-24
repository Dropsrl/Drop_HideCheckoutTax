# Drop_HideCheckoutTax
By this module you can disable the "Tax" row on the summary of the cart and checkout pages.
Configurations are in **Store->Configuration->Sales->Tax->Display->Shopping Cart Display Settings->Display Tax"**.
Please note that this option not affect the taxs calculation at all, but simply remove the row with the amount in the checkout funnel.

# Drop_BetterLogout

## Installation
- Install module through composer (recommended):
```sh
$ composer config repositories.drop.dhct vcs https://github.com/Dropsrl/Drop_HideCheckoutTax
$ composer require drop/module-hide-checkout-tax
```

- Install module manually:
    - Copy these files in app/code/Drop/Drop_HideCheckoutTax/

- After installing the extension, run the following commands:
```sh
$ php bin/magento module:enable Drop_HideCheckoutTax
$ php bin/magento setup:upgrade
$ php bin/magento setup:di:compile
$ php bin/magento setup:static-content:deploy
$ php bin/magento cache:clear
```

## Requirements
- PHP >= 7.0.0

## Compatibility
- Magento >= 2.2
- Not tested on 2.1 and 2.0

## Support
If you encounter any problems or bugs, please create an issue on [Github](https://github.com/Dropsrl/Drop_HideCheckoutTax/issues) 

## License
[GNU General Public License, version 3 (GPLv3)] http://opensource.org/licenses/gpl-3.0

## Copyright
(C) 2019 Drop S.R.L.
