# Flatbox
This is a skin made for **MediaWiki** websites. Primarily used for [Aarthalopedia, or aarthal for short](http://aarthal.com).

### What is Mediawiki?
The website explains like this: *"The MediaWiki software is used by tens of thousands of websites and thousands of companies and organizations. It powers Wikipedia and also this website. MediaWiki helps you collect and organize knowledge and make it available to people. It's powerful, multilingual, free and open, extensible, customizable, reliable, and free of charge."*

### What is Aarthal then?
Aarthal is a fantasy-world filled collectively; whomever wants to contribute, can do it. Its borders are drawn from the beginning, so newcomers can add stuff without breaking the world.

## Installing the skin
You can clone this repository with git:


    git clone https://github.com/enginbyram/mediawiki-flatbox


* After cloning, change the name of the folder to **Flatbox**.
* Put the folder inside your skin folder.
* Open LocalSettings.php file, and add following code to LocalSettings.php:

      wfLoadSkin( 'Flatbox' );

* Go to wiki site and change user's skin preference. Done!

* If you want to make Flatbox your default skin, you can do it by changing **$wgDefaultSkin** to *"flatbox"*. 
