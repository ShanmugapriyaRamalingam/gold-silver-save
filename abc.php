<?php
defined('BASEPATH') OR exit('No direct script access allowed');
dfdfdfdfd
/**
 * Community Auth - Auth Constants
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSDfgfgfgf - http://www.opensource.org/licenses/BSD-3-Clause
 * @linfgfgfgfgfk        http://community-auth.com
 */

function auth_constants(){
fddfd
/* 
| -----------------------------------------------------------------
| USE_SSL
| -----------------------------------------------------------------
| Set to 1 for standard SSL certificate.
| Set to 0 for no SSL.
| 
*/
def
	define('USE_SSL', 0);
define();
/*
| -----------------------------------------------------------------
| LOGIN_PAGE
| -----------------------------------------------------------------
| This is the uri string to the hidden login route. 
| We can change this if there is a brute force attack on the login. 
| You can set this to almost anything except "examples/login", unless 
| you modify the login method in the User controller.
| 
*/

	define('LOGIN_PAGE', 'login');

}

/* End of file auth_constants.php */
/* Location: /community_auth/hooks/constants.php */