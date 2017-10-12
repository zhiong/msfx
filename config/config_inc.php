<?php
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'minsheng';
$g_db_username            = 'root';
$g_db_password            = 'Qs@18113138238';
$g_db_table_prefix          = 'ms';
$g_default_timezone       = 'UTC';
$g_crypto_master_salt     = 'N4KuPGeJL5Re3eZDG7aqniKRbJc19ydYTrejmbgwap4=';

# --- Branding ---
$g_window_title		= '民生肥西绩效系统';
$g_logo_image		= 'images/mantis_logo.png';
$g_favicon_image	= 'images/favicon.ico';
$g_allow_signup		= ON;

# --- Email Configuration ---
$g_enable_email_notification = ON;
#$g_use_phpMailer = ON;
#$g_phpMailer_path = '../library/phpmailer/';
$g_phpMailer_method	= PHPMAILER_METHOD_SMTP; # PHPMAILER_METHOD_MAIL(0) or PHPMAILER_METHOD_SENDMAIL(1) or PHPMAILER_METHOD_SMTP(2)
$g_smtp_host		= 'smtp.163.com';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_port		= 25; #25, 465, 587
$g_smtp_username	= '13980796780';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_password	= 'ad4alcatel';					# used with PHPMAILER_METHOD_SMTP
$g_webmaster_email      = '13980796780@163.com';
$g_return_path_email    = '13980796780@163.com';	# the return address for bounced mail
$g_from_email           = 'noreply@laochuantea.com';	# the "From: " field in emails
$g_from_name		= '民生肥西绩效系统';
#$g_email_receive_own	= OFF;
#$g_email_send_using_cronjob = OFF;
#$g_administrator_email  = '13980796780@163.com';


$g_my_view_boxes = array(
	'my_comments'   => '1',
	'assigned'      => '2',
	'reported'      => '3',
	'unassigned'    => '0',
	'resolved'      => '0',
	'recent_mod'    => '0',
	'monitored'     => '0',
	'feedback'      => '0',
	'verify'        => '0',
	
);

$g_bug_view_page_fields = array(
#	'additional_info',
	'attachments',
	'category_id',
	'date_submitted',
	'description',
	'due_date',
#	'eta',
#	'fixed_in_version',
	'handler',
	'id',
	'last_updated',
	'os',
	'os_version',
	'platform',
	'priority',
	'product_build',
	'product_version',
	'project',
	'projection',
	'reporter',
#	'reproducibility',
	'resolution',
#	'severity',
	'status',
#	'steps_to_reproduce',
	'summary',
#	'tags',
	'target_version',
	'view_state',
);

$g_bug_report_page_fields = array(
	'additional_info',
#	'attachments',
	'category_id',
	'due_date',
	'handler',
	'os',
	'os_version',
	'platform',
	'priority',	
	'finish',
	'product_build',
	'product_version',
#	'reproducibility',
#	'severity',
#	'steps_to_reproduce',
#	'tags',
#	'target_version',
#	'view_state',
);


$g_timeline_view_threshold = NOBODY;
$g_enable_profiles = OFF;
$g_view_changelog_threshold = NOBODY;
$g_roadmap_view_threshold = NOBODY;
$g_tag_view_threshold = NOBODY;
$g_rss_enabled = OFF;

#################
# Task Assign System #
#################
/**
 * threshold for viewing task
 * @global integer $g_task_view_threshold
 */
$g_task_view_threshold = VIEWER;

?>
