<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(        
    'top_common_css' => array(
            '//css/bCenter/reset.css',
            '//css/bCenter/common.css',
            '//css/bCenter/job-manage.css',
            '//css/bCenter/manage_hale.css',
            '//css/bCenter/bcenter.css',
            '//css/bCenter/records.css',
            '//css/bCenter/top_nav.css',
            '//css/bCenter/index.css',
            //'//css/bCenter/busi.css',
    ),
    'top_common_js' => array(
            '//js/jquery.js',
            '//js/bCenter/bcenter.js',
    ),

    'job_js' => array(
            //'//js/kindeditor/kindeditor-min.js',
            '//js/kindeditor/lang/zh_CN.js',
            '//js/comlayer.js',
            '//js/dragSel.js',
            '//js/searchb.js',
            '//js/jobmanage_0917.js',
    ),
	
	//职位列表
	'jobrecord' => array(
			'//js/searchb.js',
			'//js/comlayer.js',
			/*--暂定--*/
			'//js/jobfilter.js',
			'//component/style/js/jquery.dialogPop.js',
			'//component/baijob_address/getBaijobAddress.js',
			'//component/baijob_profession/getBaijobProfession.js',
			'//component/baijob_majorType/getBaijobMajor.js',
			'//component/baijob_industry/getBaijobIndustry.js',
			'//component/style/js/subCHStr.js',
			'//js/jobpost.js',
	),
	//应聘简历
	'inbox_js' => array(
			'//js/dragSel.js',
			'//js/searchb.js',
			'//js/comlayer.js',
			'//js/buyResume.js',
			'//js/inbox.js',
	),
	//搜索已购买简历
	'purchased_js' => array(
			'//js/dragSel.js',
			'//js/searchb.js',
			'//js/comlayer.js',
			'//js/inbox.js',
	),
	//人才搜索
	'talentsfind_js' => array(
			'//js/dragSel.js',
			'//js/comlayer.js',
			'//js/searchb.js',
			'//js/talents.js',
			'//js/talentsCollect.js',
			'//js/talentsSearcher.js',
			'//js/buyResume.js',
	),
	'login_js' => array(
			'//js/jquery.js',
			'//js/common.js',
			'//js/login.js',
	),
	'login_css' => array(
			'//css/reset.css',
			'//css/common.css',
			'//css/outLogin.css',
	),
	//人才收藏夹
	'talentscollect_js' => array(
			'//js/dragSel.js',
			'//js/comlayer.js',
			'//js/searchb.js',
			'//js/talents.js',
			'//js/talentsCollect.js',
			'//js/buyResume.js',
	),
	//职位查看
	'resumelist_js' => array(
			'//js/searchb.js',
			'//js/comlayer.js',
	),
	
	//已过滤 回收站
	'filterlist_js' => array(
	        '//js/resumeList.js',
	        '//js/buyResume.js',
	),
    'rview_css' => array(
            '//css/bCenter/reset.css',
            '//css/bCenter/common.css',
            '//css/bCenter/records.css',
            '//css/bCenter/manage_hale.css',
            '//css/bCenter/bcenter.css',
            '//css/bCenter/resume.css',
    ),
    'rview_js' => array(
            '//js/buyResume.js',
            '//js/bCenter/bcenter.js',
            '//js/searchb.js',
    ),
    'jobadd' => array(
    		'//js/comlayer.js',
    		'//js/dragSel.js',
            '//js/searchb.js',
            '//js/jobmanage_0917.js',
    ),
    'swfview_css' => array(
            '//css/bCenter/reset.css',
            '//css/bCenter/common.css',
            '//css/bCenter/bcenter.css',
            '//css/bCenter/resume-swf.css',
    ),
	'pass_css' => array(
			'//css/reset.css',
			'//css/common.css',
			'//css/outLogin.css',
			'//css/bCenter/bcenter.css',
			'//css/retrieve.css',
	),
	'pass_js' => array(
			'//js/jquery.js',
			'//js/login.js',
			'//js/common.js',
			'//js/getpass.js',
	),

);