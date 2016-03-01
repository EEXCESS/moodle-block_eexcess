copyright:   bit media e-solutions GmbH, gerhard.doppler@bitmedia.cc  
license:     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later

Use this link to download the installable plugin .zip file: https://github.com/EEXCESS/MoodleServerPlugin/raw/master/docs/MoodleServerPlugin.zip

# Moodle EEXCESS plugin
## Short description
It is a tool that provides you recommendations from cultural and scientific databases in a Moodle environment (http://www.moodle.org) .
Technically it consists of two plugins:

* Moodle Server plugin  https://purl.org/eexcess/components/moodle-server-plugin
* Moodle Atto Editor plugin https://purl.org/eexcess/components/moodle-atto-editor-plugin

As it mainly makes sense to install both plugins, this documentation contains installation and usage instructions for both.

## Installation instruction
### Moodle Server plugin
Necessary steps:

1. Download plugin Repository with plugin.
2. Go to Site administration/Plugins/Install plugins. Click the button Chose a file and chose folder with plugin. After, click the button install plugin from the ZIP file.
3. Click the button install plugin.
4. Click the button Upgrade Moodle database now.
5. Click continue.
6. Change the settings if it is necessary and click the button Save changes.
7. Installing EEXCESS plugin finished.


During installation we add a system role "EEXCESS User", which allows the administrator to define who can use the EEXCESS plugin.


1. To provide access for specific users go to Site Administration/Users/Permissions/Assign system roles![eexcess-user-role](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/eexcess-user-role.png) choose EEXCESS User role and assign the role to the respective user.
2. To provide access for all users go to Site Administration/Users/Permissions/Define Roles. Click on "Authenticated user", "Edit", use Ctrl+F to look for "eexcess", locate the capability "eexcess Permission to user data management (local/eexcess:managedata)![permission-to-user-managedata](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/permission-to-user-managedata.png) click on allow and "Save changes". 


After the installation, EEXCESS Search-Bar ![searchBar](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar.png)  will appear on the bottom. 
User settings for changing the preferred citation style will be added to the navigation block.

### Moodle Atto Editor plugin
You also need to install the excess atto editor plugin, for inserting citations in atto text editor.

Necessary steps:

1. Download plugin Repository with plugin.
2. Go to Site administration/Plugins/Install plugins. Click the button Chose a file and chose folder with plugin. After, click the button install plugin from the ZIP file.
3. Click the button install plugin.
4. Click the button Upgrade Moodle database now.
5. Click continue.
6. Installing EEXCESS plugin finished.

After installation, button![cit_style](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/atto_toolbar_menu_select_cit_style.png)for change and insert citation) will appear in toolbar atto.

![atto_toolbar_menu](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/button-change-cit-style.png)

## Usage instruction
### Content consumption
For search: you can select any text on any page in the Moodle site (except inside a text editor). The EEXESS image ![eexcess_image](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/eexcess-image1.png) gets animated while the system is looking for recommendations. As soon as recommendations are found the animation stops and button with results will appear on search bar ![button_eexcess_with_results](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-results.png) Clicking the button opens the recommendation display.
### Content creation
When you are writing a text (e.g. a forum post) the system gets active as soon as you finish a paragraph (by pressiong Return). The EEXCESS image gets animated while the system is looking for recommendations. As soon as recommendations are found the animation stops and button with results will appear on search bar.
Clicking the button with results of the page opens the recommendation display. 
Now the recommendation display contains 3 elements to enrich your text in the editor:

#### Search Results
![!search_result_screenshot](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-results-enrich-text1.png)

These elements serve to:

* Embed an image

 ![results_insert_image](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-results-insert-image.png)
* Embed a citation (according to the selected preferred citation style)

 ![results_insert_citation](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-results-insert-citation.png)
#### Dashboard
![dashboard_screenshot](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-dashboard-enrich-text.png)

These elements serve to:

* Embed an image 
 
  ![dashboard_embed_image](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-dashboard-insert-image.png)
* Embed a citation (according to the selected preferred citation style)

  ![dashboard_embed_citation](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-dashboard-insert-citation.png)
* Embed a screenshot of the visualization (not available for all visualization types)
 
  ![dashboard_screenshot](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-dashboard-enrich-text-insert-screenshot.png)
#### Facet Scape
![facet_scape_screen](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-facet-scape-enrich-text.png)

These elements serve to:

* Embed an image
 
 ![facet_scape_insert_image](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-facet-scape-insert-image.png)
* Embed a citation (according to the selected preferred citation style)
 
 ![facet_scape_insert_citation](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/searchBar-facet-scape-insert-citation.png)

## Settings
### Administrator settings:
Go to Site administration/Plugins/Local plugins/EEXCESS settings has 2 options:

* Change EEXCESS citation.
* Change base url for recommendations.

![admin_settings](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/EEXCESS_admin_settings.png)

### User settings:
In navigation block go to EEXCESS settings/Interests to add interests tags.

![interests](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/EEXCESS_user_interests_settings.png)

In navigation block go to EEXCESS settings/Citation to change the citation style.

![citation](https://raw.githubusercontent.com/EEXCESS/MoodleServerPlugin/master/docs/EEXCESS_user_settings.png)

