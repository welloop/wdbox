<?php
/**
* Language file variables for the login page.
*
* @see GetLang
*
* @version     $Id: login.php,v 1.11 2008/01/08 04:09:40 scott Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the login area... Please backup before you start!
*/


define('LNG_Login', '登录');
define('LNG_UserName', '用户名');
define('LNG_NoUsername', '请输入用户名.');
define('LNG_NoPassword', '请输入密码.');

/**
* Forgot password page.
*/
define('LNG_ForgotPasswordDetails', '输入你的信息.');
define('LNG_NewPassword', '新密码');
define('LNG_BadLogin_Forgot', '用户名不存在，请再试一次.');
define('LNG_ChangePasswordSubject', '请确认修改密码');
define('LNG_ChangePasswordEmail', 'You have recently chosen to change your control panel password. To confirm this, please click on the following link: %s');
define('LNG_PasswordUpdated', '你的密码已经成功更新。请在下面登录.');
define('LNG_BadLogin_Link', '你的链接是无效的。请再试一次.');
define('LNG_ChangePassword', '修改密码');

define('LNG_LoginTitle', '登录');


/**
***************************
* Changed/added in v5.0
***************************
*/
define('LNG_SendPassword', '发送邮件');
define('LNG_BadLogin', 'The username or password you provided are incorrect. Please check them and try again.');
define('LNG_Help_ForgotPassword', '请输入你的用户名，稍后会发送一封邮件到你的注册邮箱，点击邮件中的链接修改密码.');
define('LNG_Help_Login', '请输入用户名和密码登录系统.');
define('LNG_RememberMe', '记住我的登录信息');
define('LNG_ChangePassword_Emailed', 'Before Your Password is Changed...<br /><br />Please check your inbox/junk mail folder for %s. You\'ve just been sent an email that contains a link you must click to change your password.');
define('LNG_ForgotPasswordReminder', '<a href="index.php?Page=Login&Action=ForgotPass" style="font-size: 11px;">忘记密码?</a>');

define('LNG_TakeMeTo', '你想要登录');
define('LNG_TakeMeTo_HomePage', '首页');
define('LNG_TakeMeTo_Contacts', 'My Contacts');
define('LNG_TakeMeTo_Lists', 'My Contact Lists');
define('LNG_TakeMeTo_Campaign', 'My Email Campaigns');
define('LNG_TakeMeTo_Autoresponder', 'My Autoresponder');
define('LNG_TakeMeTo_Statistics', 'My Campaign Statistics');
define('LNG_TakeMeTo_Segments', 'My Segments');

/**
***************************
* Changed/Added in v5.0.10
***************************
*/
define('LNG_PleaseWaitAWhile', '登录失败次数过多,请在15分钟后重新登录.');

/**
***************************
* Changed/Added in v5.7.0
***************************
*/
define('LNG_ApplicationInactive_Admin', 'This software has been disabled due to a possible license violation. If you feel you have received this message in error, please contact Interspire.');
define('LNG_ApplicationInactive_Regular', 'This application is currently down for maintenance and is not available. Please try again later.');