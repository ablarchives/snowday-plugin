# Snowday Plugin for OctoberCMS

**Background**  
This adds a component that returns a simple banner message to the front-end, intended for use at the top of a site. The message can be managed in the backend settings. The component returns a block style div with the HTML added inside.

**Features**  
- Adds support for a snowday banner

**Install**  
There are two options:
- `git clone https://github.com/albrightlabs/snowday-plugin.git plugins/albrightlabs/snowday` and run `php artisan october:up` or
- `git submodule add -b master https://github.com/albrightlabs/snowday-plugin.git plugins/albrightlabs/snowday` and run `php artisan october:up`

**Update**  
- `git pull origin master` or
- `git pull --recursive-submodules`

**Usage**  
1. Add the Snowday component to the layout you wish to display the banner. Customize the HTML and CSS as needed.
2. Go to settings, snowday. Check the display option. Add the message in the richeditor.
*Note: HTML is supported in the message richeditor. If the display option is unchecked, the banner won't render on the front-end.*

**Contribute**  
Feel free to fork and contribute to this plugin! Please email support@albrightlabs.com with any and all questions.
