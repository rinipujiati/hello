<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Menu:Templates' => 'Modèle',
	'Menu:Templates+' => 'Modèle pour un formulaire de création d\'objet',
	'Templates:UserData' => 'Données complémentaires',
	'Templates:UserData-Source' => 'Créé à partir du modèle %1$s',

	'Templates:PreviewTab:Title' => 'Prévisualisation',
	'Templates:PreviewTab:FormFields' => 'Formulaire',
	'Templates:PreviewTab:HiddenFields' => 'Champs cachés',

	'Class:Template' => 'Modèle',
	'Class:Template+' => 'Modèle pour un formulaire de création d\'objet à partir du portail',
	'Class:Template/Attribute:name' => 'Nom',
	'Class:Template/Attribute:name+' => 'Nom interne',
	'Class:Template/Attribute:label' => 'Label',
	'Class:Template/Attribute:label+' => 'Label utilisé dans le formulaire',
	'Class:Template/Attribute:description' => 'Description',
	'Class:Template/Attribute:description+' => 'Description dans le formulaire',
	'Class:Template/Attribute:field_list' => 'Champs',
	'Class:Template/Attribute:field_list+' => '',

	'Class:TemplateField' => 'Champ',
	'Class:TemplateField+' => '',
	'Class:TemplateField/Attribute:template_id' => 'Modèle',
	'Class:TemplateField/Attribute:template_id+' => '',
	'Class:TemplateField/Attribute:template_id_finalclass_recall' => 'Type',
	'Class:TemplateField/Attribute:template_id_finalclass_recall+' => '',
	'Class:TemplateField/Attribute:code' => 'Code',
	'Class:TemplateField/Attribute:code+' => 'Code de l\'attribut',
	'Class:TemplateField/Attribute:label' => 'Label',
	'Class:TemplateField/Attribute:label+' => 'Label affiché à l\'utilisateur final',
	'Class:TemplateField/Attribute:order' => 'Ordre',
	'Class:TemplateField/Attribute:order+' => 'Position dans le formulaire',
	'Class:TemplateField/Attribute:mandatory' => 'Obligatoire',
	'Class:TemplateField/Attribute:mandatory+' => '',
	'Class:TemplateField/Attribute:mandatory/Value:no' => 'non',
	'Class:TemplateField/Attribute:mandatory/Value:no+' => '',
	'Class:TemplateField/Attribute:mandatory/Value:yes' => 'oui',
	'Class:TemplateField/Attribute:mandatory/Value:yes+' => '',
	'Class:TemplateField/Attribute:input_type' => 'Type de donnée',
	'Class:TemplateField/Attribute:input_type+' => '',
	'Class:TemplateField/Attribute:input_type/Value:text' => 'Texte',
	'Class:TemplateField/Attribute:input_type/Value:text+' => '',
	'Class:TemplateField/Attribute:input_type/Value:text_area' => 'Zone de texte',
	'Class:TemplateField/Attribute:input_type/Value:text_area+' => '',
	'Class:TemplateField/Attribute:input_type/Value:drop_down_list' => 'Liste déroulante',
	'Class:TemplateField/Attribute:input_type/Value:drop_down_list+' => '',
	'Class:TemplateField/Attribute:input_type/Value:radio_buttons' => 'Liste',
	'Class:TemplateField/Attribute:input_type/Value:radio_buttons+' => '',
	'Class:TemplateField/Attribute:input_type/Value:date' => 'Date',
	'Class:TemplateField/Attribute:input_type/Value:date+' => '',
	'Class:TemplateField/Attribute:input_type/Value:date_and_time' => 'Date et Heure',
	'Class:TemplateField/Attribute:input_type/Value:date_and_time+' => '',
	'Class:TemplateField/Attribute:input_type/Value:duration' => 'Durée',
	'Class:TemplateField/Attribute:input_type/Value:duration+' => '',
	'Class:TemplateField/Attribute:input_type/Value:read_only' => 'Lecture seule',
	'Class:TemplateField/Attribute:input_type/Value:read_only+' => '',
	'Class:TemplateField/Attribute:input_type/Value:hidden' => 'Caché',
	'Class:TemplateField/Attribute:input_type/Value:hidden+' => '',
	'Class:TemplateField/Attribute:values' => 'Valeurs (OQL ou CSV)',
	'Class:TemplateField/Attribute:values+' => '"SELECT myClass WHERE name LIKE \'foo\'" or "val1,val2,..."',
	'Class:TemplateField/Attribute:initial_value' => 'Valeur initiale',
	'Class:TemplateField/Attribute:initial_value+' => '',
	'Class:TemplateField/Attribute:format' => 'Expression régulière',
	'Class:TemplateField/Attribute:format+' => 'Expression régulière',
));
?>
