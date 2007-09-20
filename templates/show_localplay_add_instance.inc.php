<?php
/*

 Copyright (c) 2001 - 2007 Ampache.org
 All rights reserved.

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; version 2
 of the License.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/

?>
<?php show_box_top(_('Add Localplay Instance')); ?>
<form method="post" action="<?php echo Config::get('web_path'); ?>/localplay.php?action=add_instance">
<table border="0" cellpadding="3" cellspacing="0" class="table-data">
<?php foreach ($fields as $key=>$field) { ?>
<tr>
	<td><?php echo $field['description']; ?></td>
	<td><input type="textbox" name="<?php echo $key; ?>" /></td>
</tr>
<?php } ?>
<tr>
	<td colspan="2">
		<input type="submit" value="<?php echo _('Add Instance'); ?>" />
	</td>
</tr>
</table>
</form>
<?php show_box_bottom(); ?>