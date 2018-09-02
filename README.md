OXID Academy Sample Modules: External addresses for article details pages
=========================================================================

# Description

Sample Module for training purposes.
Displays a hyperlink on top of the article details page.

# Install

* Create a local directory for repositories in your project, e.g. `oxideshop/extensions`.
* Check-out this module and move it to the directory you just created
* Add the repository to your project's compser.json, e.g. like this:

  ```json
  "require": {
    ...
    "oxid-academy/extproducturl": "^1.0"
  },
  ...
    "repositories": {
        "oxid-academy/extproducturl": {
            "type": "path",
            "url": "extensions/oxac_extproducturl/"
        }
    }
  ```    

* Be aware that you need to extend the "repositories" section if it already exists. Take care about the JSON syntax.
* Run `composer update`
* When Composer is done, go to the shop admin, open "Extensions", "Modules", select "External addresses for article details pages" and click "activate".

# Use

* Open "Articles" and "Administer articles". At the bottom you will see two input fields. Enter a hyperlink and a title. The information will appear on top of the details page.

# Compatibility:

* Requires OXID eShop CE/PE/EE 6.0.x
* PHP 5.6 or higher
