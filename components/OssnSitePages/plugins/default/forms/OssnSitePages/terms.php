<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 
$OssnSitePages = new OssnSitePages;
$OssnSitePages->pagename = 'terms';
$OssnSitePages = $OssnSitePages->getPage();

?>
<div>
	<label> <?php echo ossn_print('site:terms'); ?> </label>
	<textarea name="pagebody" class="ossn-editor"><?php echo html_entity_decode($OssnSitePages->description); ?></textarea>
<div>
<div>
	<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('save'); ?>"/>
</div>