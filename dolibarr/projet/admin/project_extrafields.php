<?php
/* Copyright (C) 2001-2002	Rodolphe Quiedeville	<rodolphe@quiedeville.org>
 * Copyright (C) 2003		Jean-Louis Bergamo		<jlb@j1b.org>
 * Copyright (C) 2004-2012	Laurent Destailleur		<eldy@users.sourceforge.net>
 * Copyright (C) 2012		Regis Houssin			<regis.houssin@inodbox.com>
 * Copyright (C) 2013		Florian Henry			<florian.henry@open-concept.pro>
 * Copyright (C) 2015		Juanjo Menent			<jmenent@2byte.es>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *      \file       htdocs/projet/admin/project_extrafields.php
 *		\ingroup    project
 *		\brief      Page to setup extra fields of project
 */

// Load Dolibarr environment
require '../../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/project.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/extrafields.class.php';

$langs->loadLangs(array("project", "admin"));

$extrafields = new ExtraFields($db);
$form = new Form($db);

// List of supported format
$type2label = ExtraFields::getListOfTypesLabels();

$action = GETPOST('action', 'aZ09');
$attrname = GETPOST('attrname', 'alpha');
$elementtype = 'projet'; //Must be the $table_element of the class that manage extrafield

if (!$user->admin) {
	accessforbidden();
}


/*
 * Actions
 */

require DOL_DOCUMENT_ROOT.'/core/actions_extrafields.inc.php';



/*
 * View
 */

$textobject = $langs->transnoentitiesnoconv("Project");

llxHeader("", $langs->trans("ProjectsSetup"));

$linkback = '<a href="'.DOL_URL_ROOT.'/admin/modules.php?restore_lastsearch_values=1">'.$langs->trans("BackToModuleList").'</a>';
print load_fiche_titre($langs->trans("ProjectsSetup"), $linkback, 'title_setup');


$head = project_admin_prepare_head();

print dol_get_fiche_head($head, 'attributes', $langs->trans("Projects"), -1, 'project');

require DOL_DOCUMENT_ROOT.'/core/tpl/admin_extrafields_view.tpl.php';

print dol_get_fiche_end();


// Creation of an optional field
if ($action == 'create') {
	print "<br>";
	print load_fiche_titre($langs->trans('NewAttribute'));

	require DOL_DOCUMENT_ROOT.'/core/tpl/admin_extrafields_add.tpl.php';
}

// Edition of an optional field
if ($action == 'edit' && !empty($attrname)) {
	print "<br>";
	print load_fiche_titre($langs->trans("FieldEdition", $attrname));

	require DOL_DOCUMENT_ROOT.'/core/tpl/admin_extrafields_edit.tpl.php';
}

// End of page
llxFooter();
$db->close();
