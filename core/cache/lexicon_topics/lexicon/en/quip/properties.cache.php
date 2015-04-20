<?php  return array (
  'quip.all' => 'All',
  'quip.ascending' => 'Ascending',
  'quip.author' => 'Author',
  'quip.comment' => 'Comment',
  'quip.descending' => 'Descending',
  'quip.family' => 'Family',
  'quip.opt_blackglass' => 'Black Glass',
  'quip.opt_clean' => 'Clean',
  'quip.opt_red' => 'Red',
  'quip.opt_white' => 'White',
  'quip.thread' => 'Thread',
  'quip.user' => 'User',
  'quip.prop_allowremove_desc' => 'Allow logged-in users to remove their own postings.',
  'quip.prop_allowreportasspam_desc' => 'Allow logged-in users to report comments as spam.',
  'quip.prop_altrowcss_desc' => 'The CSS class to put on alternating comments.',
  'quip.prop_anonymousname_desc' => 'The name to display for anonymous postings. Defaults to "Anonymous".',
  'quip.prop_authortpl_desc' => 'A name of a Chunk to use for the Author name in the comment.',
  'quip.prop_closeafter_desc' => 'Will automatically close the thread to new comments after this number of days. Set to 0 to leave infinitely open.',
  'quip.prop_closed_desc' => 'If set to true, the thread will not accept new comments.',
  'quip.prop_currentpagecls_desc' => 'A CSS class to put on the current pagination number.',
  'quip.prop_dateformat_desc' => 'The format of the dates displayed for a comment.',
  'quip.prop_debug_desc' => 'Set to true to turn on debug mode. Not recommended for production sites.',
  'quip.prop_debuguser_desc' => 'If debug is on, will set the username of $modx->user to this value.',
  'quip.prop_debuguserid_desc' => 'If debug is on, will set the id of $modx->user to this value.',
  'quip.prop_gravataricon_desc' => 'The default Gravatar icon to load if none is found for a user.',
  'quip.prop_gravatarsize_desc' => 'The size, in pixels, of the Gravatar.',
  'quip.prop_idprefix_desc' => 'If you want to use multiple Quip instances on a page, change this ID prefix.',
  'quip.prop_limit_desc' => 'The number of comments to limit per page. Setting this to a non-zero number will enable pagination.',
  'quip.prop_namefield_desc' => 'The field to use for the author name of each comment. Recommended values are "name" or "username".',
  'quip.prop_maxdepth_desc' => 'The maximum depth that replies can be made in a threaded comment thread.',
  'quip.prop_olcss_desc' => 'The CSS class to put in the parent ol tags for each comment.',
  'quip.prop_pagecls_desc' => 'A CSS class to put on a non-current pagination number link.',
  'quip.prop_paginationcls_desc' => 'A CSS class to put on the pagination OL wrapper.',
  'quip.prop_parent_desc' => 'The parent to start at when displaying the thread.',
  'quip.prop_placeholderprefix_desc' => 'The prefix for the global placeholders set by Quip.',
  'quip.prop_requireauth_desc' => 'If set to true, only logged-in users can post comments.',
  'quip.prop_requireusergroups_desc' => 'Optional. A comma-separated list of User Groups to restrict commenting to.',
  'quip.prop_removeaction_desc' => 'The name of the submit field to initiate a comment remove.',
  'quip.prop_removethreshold_desc' => 'If allowRemove is true, the number of minutes a user can remove their posting after they have posted it. Defaults to 3 minutes.',
  'quip.prop_replyresourceid_desc' => 'The ID of the Resource where the QuipReply snippet is held, for replying to threaded comments.',
  'quip.prop_reportaction_desc' => 'The name of the submit field to initiate a comment report as spam.',
  'quip.prop_rowcss_desc' => 'The CSS class to put on each comment\'s outer div container.',
  'quip.prop_showanonymousname_desc' => 'If true, will display the value of anonymousName property (defaults to "Anonymous") if the user is not logged in when posting.',
  'quip.prop_start_desc' => 'The default comment index to start on. Recommended to leave at 0.',
  'quip.prop_sortby_desc' => 'The field to sort by.',
  'quip.prop_sortbyalias_desc' => 'The alias of classes to use with sort by.',
  'quip.prop_sortdir_desc' => 'The direction to sort by.',
  'quip.prop_thread_desc' => 'The unique name of the thread.',
  'quip.prop_threaded_desc' => 'Whether or not this thread can have threaded comments.',
  'quip.prop_threadedpostmargin_desc' => 'The margin, in pixels, by which threaded comments are moved right for each depth level that they go.',
  'quip.prop_toplaceholder_desc' => 'If set, will output the content to the placeholder specified in this property, rather than outputting the content directly.',
  'quip.prop_tplcomment_desc' => 'A Chunk for the comment itself.',
  'quip.prop_tplcommentoptions_desc' => 'A Chunk for the options, such as delete, shown to an owner of a comment.',
  'quip.prop_tplcomments_desc' => 'A Chunk for the outer wrapper for comments.',
  'quip.prop_tplpagination_desc' => 'A Chunk for the pagination OL wrapper.',
  'quip.prop_tplpaginationitem_desc' => 'A Chunk for each non-current pagination number link.',
  'quip.prop_tplpaginationcurrentitem_desc' => 'A Chunk for the current pagination number link.',
  'quip.prop_tplreport_desc' => 'The link on a comment to report as spam. Can either be a chunk name or value. If set to a value, will override the chunk.',
  'quip.prop_unapprovedcss_desc' => 'The CSS class to put on unapproved comments.',
  'quip.prop_usecss_desc' => 'If true, Quip will provide a basic CSS template for the presentation.',
  'quip.prop_usemargins_desc' => 'If false, Quip will use ol/li items for each comment and threaded comment. If true, will use padded margins for each comment in threading.',
  'quip.prop_usegravatar_desc' => 'If true, will attempt to use Gravatar images for avatars.',
  'quip.prop_reply_autoconvertlinks_desc' => 'If true, will automatically convert URLs to links.',
  'quip.prop_reply_closeafter_desc' => 'Will automatically close the thread to new comments after this number of days. Set to 0 to leave infinitely open.',
  'quip.prop_reply_closed_desc' => 'If set to true, the thread will not accept new comments.',
  'quip.prop_reply_dateformat_desc' => 'The format of the dates displayed for a comment.',
  'quip.prop_reply_debug_desc' => 'Set to true to turn on debug mode. Not recommended for production sites.',
  'quip.prop_reply_debuguser_desc' => 'If debug is on, will set the username of $modx->user to this value.',
  'quip.prop_reply_debuguserid_desc' => 'If debug is on, will set the id of $modx->user to this value.',
  'quip.prop_reply_disablerecaptchawhenloggedin_desc' => 'If the user is logged in, do not use reCaptcha.',
  'quip.prop_reply_dontmoderatemanagerusers_desc' => 'Never moderate users that are logged into the Revolution Manager.',
  'quip.prop_reply_extraautolinksattributes_desc' => 'Any extra HTML attributes to add to auto-converted links, if autoConvertLinks is set to 1.',
  'quip.prop_reply_gravataricon_desc' => 'The default Gravatar icon to load if none is found for a user.',
  'quip.prop_reply_gravatarsize_desc' => 'The size, in pixels, of the Gravatar.',
  'quip.prop_reply_idprefix_desc' => 'If you want to use multiple Quip instances on a page, change this ID prefix.',
  'quip.prop_reply_moderate_desc' => 'If set to true, all new posts to the thread will be moderated.',
  'quip.prop_reply_moderateanonymousonly_desc' => 'If set to true, only anonymous (non-logged-in) users will be moderated.',
  'quip.prop_reply_moderatefirstpostonly_desc' => 'If set to true, only the first post of the user will be moderated. All subsequent posts will be auto-approved. This only applies to logged-in users.',
  'quip.prop_reply_moderatorgroup_desc' => 'Any Users in this User Group will have moderator access.',
  'quip.prop_reply_moderators_desc' => 'A comma-separated list of moderator usernames for this thread.',
  'quip.prop_reply_notifyemails_desc' => 'A comma-separated list of email addresses to send a notification email to when a new post is made on this thread.',
  'quip.prop_reply_postaction_desc' => 'The name of the submit field to initiate a comment post.',
  'quip.prop_reply_previewaction_desc' => 'The name of the submit field to initiate a comment preview.',
  'quip.prop_reply_recaptcha_desc' => 'If true, will enable reCaptcha support.',
  'quip.prop_reply_recaptchatheme_desc' => 'If `recaptcha` is set to 1, this will select a theme for the reCaptcha widget.',
  'quip.prop_reply_redirectto_desc' => 'Optional. After posting a reply, redirect to the Resource with this ID.',
  'quip.prop_reply_redirecttourl_desc' => 'Optional. After posting a reply, redirect to this absolute URL.',
  'quip.prop_reply_requireauth_desc' => 'If set to true, only logged-in users can post comments.',
  'quip.prop_reply_requirepreview_desc' => 'If set to true, will require a user to preview their comment before posting.',
  'quip.prop_reply_requireusergroups_desc' => 'Optional. A comma-separated list of User Groups to restrict commenting to.',
  'quip.prop_reply_tpladdcomment_desc' => 'The add comment form. Can either be a chunk name or value. If set to a value, will override the chunk.',
  'quip.prop_reply_tpllogintocomment_desc' => 'The portion to show when the user is not logged in. Can either be a chunk name or value. If set to a value, will override the chunk.',
  'quip.prop_reply_tplpreview_desc' => 'The tpl for the preview text. Can either be a chunk name or value. If set to a value, will override the chunk.',
  'quip.prop_reply_tplreport_desc' => 'The link on a comment to report as spam. Can either be a chunk name or value. If set to a value, will override the chunk.',
  'quip.prop_reply_usecss_desc' => 'If true, Quip will provide a basic CSS template for the presentation.',
  'quip.prop_reply_usegravatar_desc' => 'If true, will attempt to use Gravatar images for avatars.',
  'quip.prop_late_altrowcss_desc' => 'The CSS class to put on alternating comments.',
  'quip.prop_late_bodylimit_desc' => 'The number of characters to limit the body field in the comment display to before adding an ellipsis.',
  'quip.prop_late_contexts_desc' => 'A comma-separated list of Contexts to pull comments from. If not set, will grab comments from all Contexts.',
  'quip.prop_late_dateformat_desc' => 'The format of the dates displayed for a comment.',
  'quip.prop_late_family_desc' => 'The family of threads to pull from. Only if type is set to Family.',
  'quip.prop_late_limit_desc' => 'The number of comments to pull.',
  'quip.prop_late_placeholderprefix_desc' => 'The prefix for the global placeholders set by QuipLatestComments.',
  'quip.prop_late_rowcss_desc' => 'The CSS class to put on each row.',
  'quip.prop_late_sortby_desc' => 'The field to sort by.',
  'quip.prop_late_sortbyalias_desc' => 'The alias of classes to use with sort by.',
  'quip.prop_late_sortdir_desc' => 'The direction to sort by.',
  'quip.prop_late_start_desc' => 'The start index of comments to pull from.',
  'quip.prop_late_striptags_desc' => 'If set to true, tags will be stripped from the body text.',
  'quip.prop_late_thread_desc' => 'The thread ID to pull from. Only if type is set to Thread.',
  'quip.prop_late_toplaceholder_desc' => 'If set, will output the content to the placeholder specified in this property, rather than outputting the content directly.',
  'quip.prop_late_tpl_desc' => 'The chunk tpl to use for each row.',
  'quip.prop_late_type_desc' => 'Whether to grab a list from all comments, per thread, per family of threads, or per user.',
  'quip.prop_late_user_desc' => 'The User ID or username to pull from. Only if type is set to User.',
  'quip.prop_count_thread_desc' => 'The thread ID to pull from. Only if type contains `thread`.',
  'quip.prop_count_toplaceholder_desc' => 'If set, will output the content to the placeholder specified in this property, rather than outputting the content directly.',
  'quip.prop_count_type_desc' => 'If contains `thread`, will count the # of comments in a thread. If contains `user`, will grab # of total comments by a User. Supports a comma-delimited list of types.',
  'quip.prop_count_user_desc' => 'The User ID or username to pull from. Only if type contains `user`.',
  'quip.prop_count_family_desc' => 'The family of threads to pull from. Only if type contains `family`.',
  'quip.prop_rss_tpl_desc' => 'The chunk tpl to use for each RSS item.',
  'quip.prop_rss_containertpl_desc' => 'The chunk tpl to use to wrap the RSS feed in.',
  'quip.prop_rss_placeholderprefix_desc' => 'The prefix for the global placeholders set by QuipRss.',
);