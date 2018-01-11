<?
class cfg{
    //WebSite Settings
        public static $main_page = 'home';              // Website to First page
        public static $subdir = ''; // Under which subdirectory of this website? (Default null, Example: '/demo/webSite')

    // WebSite Menus
        // array(Menu name, menu-link, Page seperator photo link)
        // page -> /views/menu-link.php
        public static $menu=[
            array('Home','home',''),
            array('Page 1','page-1','http://placehold.it/1920x1080'),
            array('Page 2','page-2','http://placehold.it/1920x1080'),
            array('Contact','contact','http://placehold.it/1920x1080')
        ];

    //Website SEO
        public static $logo_name = 'My WebSite';    // Logo Name
        public static $site_name = 'WebSite';       // WebSite Name
        public static $seo_author = 'xx';           // WebSite Author
        public static $seo_description='xx';        // Description
        public static $seo_keywords='xx';           // Keywords
}
?>