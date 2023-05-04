# Bright Cloud Studio's Isotope Product Cache Medium Blob
## Converts Contao's Isotope tl_iso_productcache.products field from 'blob' to 'mediumblob' to store more information.

This package was created to preserve a custom change to the tl_iso_productcache.products field from the default 'blob' to 'mediumblob'. Of course we were able to manually change the field type in phpMyAdmin but any update within Contao Manager will revert it back to 'blob'. This package will keep the change during updates, preventing it from reverting back.
