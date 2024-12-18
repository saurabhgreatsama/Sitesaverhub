<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// site routing starts from here
$route['sitelistpages'] = 'welcome/sitelist';
$route['aboutpage'] = 'welcome/about';
$route['sea'] = 'welcome/find';
$route['contactpage'] = 'welcome/contact';
$route['loginpage'] = 'welcome/login';
$route['userloginpage/(:num)'] = 'welcome/userlogs/$1';
$route['registerpage'] = 'welcome/register';
$route['site'] = 'welcome/cats';
$route['siteconfig'] = 'Welcome/siteEntrys';
$route['extensioncat'] = 'welcome/extcats';
$route['sitedetails'] = 'welcome/viewinsidesite';
$route['extensiondetails'] = 'welcome/viewextinside';
$route['extensionlistpage'] = 'welcome/extensionlist';
$route['thankyoupage'] = 'welcome/thankyou';

// Admin routing start from here
$route['gateguard'] = 'AdminController/adminlogin';
$route['kingdompage'] = 'AdminController/admin';
$route['siteaddingpage'] = 'AdminController/siteadding';
$route['extlistpage'] = 'AdminController/extensionlist';
$route['extcategorylistpage'] = 'AdminController/extcategorylist';
$route['extensionaddingpage'] = 'AdminController/extensionadding';
$route['extcategoryaddingpage'] = 'AdminController/extensioncategory';
$route['sitelistpage'] = 'AdminController/sitelist';
$route['contactlistpage'] = 'AdminController/contactlist';
$route['categorylistpage'] = 'AdminController/categorylist';
$route['categoryaddingpage'] = 'AdminController/categoryadding';
$route['userlistpage'] = 'AdminController/userlists';
$route['suggestpage'] = 'AdminController/suggestlist';
$route['viewsitedetails'] = 'AdminController/viewsite';

// Admin functions start from here
$route['sendingsitecategory'] = 'FunctionController/Addsitecategory';
$route['sendingextcategory'] = 'FunctionController/Addextcategory';
$route['sendingaddingsite'] = 'FunctionController/Addsite';
$route['sendingaddingextension'] = 'FunctionController/Addextension';
$route['sendingremoveextcat'] = 'FunctionController/removeextcat';
$route['sendingremoveextlist'] = 'FunctionController/removeextlist';
$route['sendingremovesitecat'] = 'FunctionController/removesitecategory';
$route['sendingremovesite'] = 'FunctionController/removesite';
$route['sendingauth'] = 'FunctionController/doLogin';
$route['sendinglogout'] = 'FunctionController/logout';
$route['searching'] = 'FunctionController/searchsite';
$route['searchingext'] = 'FunctionController/searchextension';
$route['sendingmessage'] = 'FunctionController/contactsend';
$route['sendingwebopnion'] = 'FunctionController/suggestadding';
$route['sendingeditsite'] = 'FunctionController/editsitelist';
$route['sendingsavefiles'] = 'FunctionController/savefiles';
$route['sendeditedversionsite'] = 'FunctionController/editedversionsite';
$route['sendingusercatremove'] = 'FunctionController/removeusercat';
$route['sendingusersiteremove'] = 'FunctionController/removeusersite';
$route['sendingremovesavesite'] = 'FunctionController/removesavesite';
$route['sendingexternalremove'] = 'FunctionController/removeexternal';


// User's function starts from here
$route['checkvalidation'] = 'Auth/process_registration';
$route['verify_email/(:any)'] = 'Auth/verify_email/$1';
$route['checkingusers'] = 'Auth/logins';
$route['logout'] = 'Auth/logout';
$route['usersiteuploading'] = 'Auth/usersiteupload';
$route['addusercategory'] = 'Auth/Addcategory';

// User's view router starts from here
$route['userdashboardpage'] = 'UserController/userview';
$route['usercategoryadding'] = 'UserController/usercategory';
$route['usersiteaddingpage'] = 'UserController/usersite';
$route['usersitesuggestionpage'] = 'UserController/usersitesuggestion';
$route['usersiteaddinglistpage'] = 'UserController/usersiteaddinglist';
$route['usercategorylistpage'] = 'UserController/usercategorylist';
$route['externalpage'] = 'UserController/externallink';
$route['savesitelists'] = 'UserController/savesiteextlist';
$route['savedpage'] = 'UserController/successpage';
$route['notofundpage'] = 'UserController/notfounds';
$route['(:any)/(.+)'] = 'UserController/save_url/$1/ver/$2';
$route['test'] = 'UserController/testings';
$route['process_form'] = 'UserController/process_form';
$route['forward'] = 'UserController/forwards';
$route['externalpage'] = 'UserController/externallink';
$route['sitemap.xml'] = 'sitemap.xml';

// usertemplate starts from here
$route['(:any)'] = 'UserController/verify_identity/$1'; 
