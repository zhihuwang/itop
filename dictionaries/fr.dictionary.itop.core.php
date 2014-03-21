<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>


/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	'Core:DeletedObjectTip' => 'L\'objet a été effacé le %1$s (%2$s)',
	'Core:UnknownObjectLabel' => 'Classe: %1$s, Identifiant: %2$d',
	'Core:UnknownObjectTip' => 'L\'objet n\'a pu être trouvé. Il se peut que les archives aient été purgées après son effacement.',

	'Class:ActionEmail' => 'Notification par mél',
	'Class:ActionEmail+' => '',
	'Class:ActionEmail/Attribute:test_recipient' => 'Destinataire de test',
	'Class:ActionEmail/Attribute:test_recipient+' => '',
	'Class:ActionEmail/Attribute:from' => 'De',
	'Class:ActionEmail/Attribute:from+' => '',
	'Class:ActionEmail/Attribute:reply_to' => 'Répondre à',
	'Class:ActionEmail/Attribute:reply_to+' => '',
	'Class:ActionEmail/Attribute:to' => 'A',
	'Class:ActionEmail/Attribute:to+' => '',
	'Class:ActionEmail/Attribute:cc' => 'Copie',
	'Class:ActionEmail/Attribute:cc+' => '',
	'Class:ActionEmail/Attribute:bcc' => 'Copie Cachée',
	'Class:ActionEmail/Attribute:bcc+' => '',
	'Class:ActionEmail/Attribute:subject' => 'Sujet',
	'Class:ActionEmail/Attribute:subject+' => '',
	'Class:ActionEmail/Attribute:body' => 'Message',
	'Class:ActionEmail/Attribute:body+' => '',
	'Class:ActionEmail/Attribute:importance' => 'Importance',
	'Class:ActionEmail/Attribute:importance+' => '',
	'Class:ActionEmail/Attribute:importance/Value:high' => 'Haute',
	'Class:ActionEmail/Attribute:importance/Value:high+' => '',
	'Class:ActionEmail/Attribute:importance/Value:low' => 'Basse',
	'Class:ActionEmail/Attribute:importance/Value:low+' => '',
	'Class:ActionEmail/Attribute:importance/Value:normal' => 'Normale',
	'Class:ActionEmail/Attribute:importance/Value:normal+' => '',
	'Class:TriggerOnPortalUpdate' => 'Déclencheur sur mise à jour depuis le portail',
	'Class:TriggerOnPortalUpdate+' => '',
	'Class:TriggerOnStateEnter' => 'Déclencheur sur un objet entrant dans un état',
	'Class:TriggerOnStateEnter+' => '',
	'Class:TriggerOnStateLeave' => 'Déclencheur sur un objet quittant un état',
	'Class:TriggerOnStateLeave+' => '',
	'Class:TriggerOnObjectCreate' => 'Déclencheur sur la création d\'un objet',
	'Class:TriggerOnObjectCreate+' => '',
	'Class:lnkTriggerAction' => 'Actions-Déclencheur',
	'Class:lnkTriggerAction+' => '',
	'Class:lnkTriggerAction/Attribute:action_id' => 'Action',
	'Class:lnkTriggerAction/Attribute:action_id+' => '',
	'Class:lnkTriggerAction/Attribute:action_name' => 'Nom de l\'action',
	'Class:lnkTriggerAction/Attribute:action_name+' => '',
	'Class:lnkTriggerAction/Attribute:trigger_id' => 'Déclencheur',
	'Class:lnkTriggerAction/Attribute:trigger_id+' => '',
	'Class:lnkTriggerAction/Attribute:trigger_name' => 'Nom du déclencheur',
	'Class:lnkTriggerAction/Attribute:trigger_name+' => '',
	'Class:lnkTriggerAction/Attribute:order' => 'Ordre',
	'Class:lnkTriggerAction/Attribute:order+' => '',
	'Class:AsyncSendEmail' => 'Envoi d\'Email Asynchrone',
	'Class:AsyncSendEmail+' => '',
	'Class:AsyncSendEmail/Attribute:to' => 'A',
	'Class:AsyncSendEmail/Attribute:to+' => '',
	'Class:AsyncSendEmail/Attribute:subject' => 'Sujet',
	'Class:AsyncSendEmail/Attribute:subject+' => '',
	'Class:AsyncSendEmail/Attribute:body' => 'Message',
	'Class:AsyncSendEmail/Attribute:body+' => '',
	'Class:AsyncSendEmail/Attribute:header' => 'En-tête',
	'Class:AsyncSendEmail/Attribute:header+' => '',
	'Class:CMDBChange' => 'Modification',
	'Class:CMDBChange+' => '',
	'Class:CMDBChange/Attribute:date' => 'Date',
	'Class:CMDBChange/Attribute:date+' => '',
	'Class:CMDBChange/Attribute:userinfo' => 'Autres informations',
	'Class:CMDBChange/Attribute:userinfo+' => '',
	'Class:CMDBChangeOp' => 'Operation de changement',
	'Class:CMDBChangeOp+' => '',
	'Class:CMDBChangeOp/Attribute:change' => 'Modification',
	'Class:CMDBChangeOp/Attribute:change+' => '',
	'Class:CMDBChangeOp/Attribute:date' => 'Date',
	'Class:CMDBChangeOp/Attribute:date+' => '',
	'Class:CMDBChangeOp/Attribute:userinfo' => 'Utilisateur',
	'Class:CMDBChangeOp/Attribute:userinfo+' => '',
	'Class:CMDBChangeOp/Attribute:objclass' => 'Type d\'objet',
	'Class:CMDBChangeOp/Attribute:objclass+' => '',
	'Class:CMDBChangeOp/Attribute:objkey' => 'Clé',
	'Class:CMDBChangeOp/Attribute:objkey+' => '',
	'Class:CMDBChangeOp/Attribute:finalclass' => 'Type',
	'Class:CMDBChangeOp/Attribute:finalclass+' => '',
	'Class:CMDBChangeOpCreate' => 'Création de l\'objet',
	'Class:CMDBChangeOpCreate+' => '',
	'Class:CMDBChangeOpDelete' => 'Effacement de l\'objet',
	'Class:CMDBChangeOpDelete+' => '',
	'Class:CMDBChangeOpSetAttribute' => 'Modification de l\'objet',
	'Class:CMDBChangeOpSetAttribute+' => '',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode' => 'Champ',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode+' => '',
	'Class:CMDBChangeOpSetAttributeScalar' => 'Modification de valeur',
	'Class:CMDBChangeOpSetAttributeScalar+' => '',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue' => 'Ancienne valeur',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue+' => '',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue' => 'Nouvelle valeur',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue+' => '',
	'Class:CMDBChangeOpSetAttributeBlob' => 'Modification de données',
	'Class:CMDBChangeOpSetAttributeBlob+' => '',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata' => 'Ancienne valeur',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata+' => '',
	'Class:CMDBChangeOpSetAttributeOneWayPassword' => 'Mot de passe chiffré',
	'Class:CMDBChangeOpSetAttributeOneWayPassword+' => '',
	'Class:CMDBChangeOpSetAttributeOneWayPassword/Attribute:prev_pwd' => 'Ancien mot de passe',
	'Class:CMDBChangeOpSetAttributeOneWayPassword/Attribute:prev_pwd+' => '',
	'Class:CMDBChangeOpSetAttributeEncrypted' => 'Champ chiffré',
	'Class:CMDBChangeOpSetAttributeEncrypted+' => '',
	'Class:CMDBChangeOpSetAttributeEncrypted/Attribute:prevstring' => 'Ancienne valeur',
	'Class:CMDBChangeOpSetAttributeEncrypted/Attribute:prevstring+' => '',
	'Class:CMDBChangeOpSetAttributeText' => 'Modification de texte',
	'Class:CMDBChangeOpSetAttributeText+' => '',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata' => 'Ancienne valeur',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata+' => '',
	'Class:CMDBChangeOpSetAttributeCaseLog' => 'Archive de journal',
	'Class:CMDBChangeOpSetAttributeCaseLog+' => '',
	'Class:CMDBChangeOpSetAttributeCaseLog/Attribute:lastentry' => 'Dernière entrée',
	'Class:CMDBChangeOpSetAttributeCaseLog/Attribute:lastentry+' => '',
	'Class:Event' => 'Evenement',
	'Class:Event+' => '',
	'Class:Event/Attribute:message' => 'Message',
	'Class:Event/Attribute:message+' => '',
	'Class:Event/Attribute:date' => 'Date',
	'Class:Event/Attribute:date+' => '',
	'Class:Event/Attribute:userinfo' => 'Utilisateur',
	'Class:Event/Attribute:userinfo+' => '',
	'Class:Event/Attribute:finalclass' => 'Type',
	'Class:Event/Attribute:finalclass+' => '',
	'Class:EventNotification' => 'Notification',
	'Class:EventNotification+' => '',
	'Class:EventNotification/Attribute:trigger_id' => 'Déclencheur',
	'Class:EventNotification/Attribute:trigger_id+' => '',
	'Class:EventNotification/Attribute:action_id' => 'Action',
	'Class:EventNotification/Attribute:action_id+' => '',
	'Class:EventNotification/Attribute:object_id' => 'Objet',
	'Class:EventNotification/Attribute:object_id+' => '',
	'Class:EventNotificationEmail' => 'Envoi d\'Email',
	'Class:EventNotificationEmail+' => '',
	'Class:EventNotificationEmail/Attribute:to' => 'A',
	'Class:EventNotificationEmail/Attribute:to+' => '',
	'Class:EventNotificationEmail/Attribute:cc' => 'CC',
	'Class:EventNotificationEmail/Attribute:cc+' => '',
	'Class:EventNotificationEmail/Attribute:bcc' => 'BCC',
	'Class:EventNotificationEmail/Attribute:bcc+' => '',
	'Class:EventNotificationEmail/Attribute:from' => 'De',
	'Class:EventNotificationEmail/Attribute:from+' => '',
	'Class:EventNotificationEmail/Attribute:subject' => 'Sujet',
	'Class:EventNotificationEmail/Attribute:subject+' => '',
	'Class:EventNotificationEmail/Attribute:body' => 'Message',
	'Class:EventNotificationEmail/Attribute:body+' => '',
	'Class:EventNotificationEmail/Attribute:attachments' => 'Pièces jointes',
	'Class:EventNotificationEmail/Attribute:attachments+' => '',
	'Class:EventIssue' => 'Erreur',
	'Class:EventIssue+' => '',
	'Class:EventIssue/Attribute:issue' => 'Erreur',
	'Class:EventIssue/Attribute:issue+' => '',
	'Class:EventIssue/Attribute:impact' => 'Impact',
	'Class:EventIssue/Attribute:impact+' => '',
	'Class:EventIssue/Attribute:page' => 'Page Web',
	'Class:EventIssue/Attribute:page+' => '',
	'Class:EventIssue/Attribute:arguments_post' => 'Arguments (POST)',
	'Class:EventIssue/Attribute:arguments_post+' => '',
	'Class:EventIssue/Attribute:arguments_get' => 'Arguments (GET)',
	'Class:EventIssue/Attribute:arguments_get+' => '',
	'Class:EventIssue/Attribute:callstack' => 'Pile d\'appel',
	'Class:EventIssue/Attribute:callstack+' => '',
	'Class:EventIssue/Attribute:data' => 'Données',
	'Class:EventIssue/Attribute:data+' => '',
	'Class:EventWebService' => 'Appel de webservice',
	'Class:EventWebService+' => '',
	'Class:EventWebService/Attribute:verb' => 'Verbe',
	'Class:EventWebService/Attribute:verb+' => '',
	'Class:EventWebService/Attribute:result' => 'Résultat',
	'Class:EventWebService/Attribute:result+' => '',
	'Class:EventWebService/Attribute:log_info' => 'Informations',
	'Class:EventWebService/Attribute:log_info+' => '',
	'Class:EventWebService/Attribute:log_warning' => 'Avertissement',
	'Class:EventWebService/Attribute:log_warning+' => '',
	'Class:EventWebService/Attribute:log_error' => 'Erreurs',
	'Class:EventWebService/Attribute:log_error+' => '',
	'Class:EventWebService/Attribute:data' => 'Données',
	'Class:EventWebService/Attribute:data+' => '',
	'Class:EventLoginUsage' => 'Utilisation de l\'application',
	'Class:EventLoginUsage+' => '',
	'Class:EventLoginUsage/Attribute:user_id' => 'Login',
	'Class:EventLoginUsage/Attribute:user_id+' => '',
	'Class:EventLoginUsage/Attribute:contact_name' => 'Nom de l\'utilisateur',
	'Class:EventLoginUsage/Attribute:contact_name+' => '',
	'Class:EventLoginUsage/Attribute:contact_email' => 'Email',
	'Class:EventLoginUsage/Attribute:contact_email+' => '',
	'Class:SynchroDataSource' => 'Source de données',
	'Class:SynchroDataSource+' => '',
	'Class:SynchroDataSource/Attribute:name' => 'Nom',
	'Class:SynchroDataSource/Attribute:name+' => '',
	'Class:SynchroDataSource/Attribute:description' => 'Description',
	'Class:SynchroDataSource/Attribute:description+' => '',
	'Class:SynchroDataSource/Attribute:status' => 'Etat',
	'Class:SynchroDataSource/Attribute:status+' => '',
	'Class:SynchroDataSource/Attribute:status/Value:implementation' => 'Implémentation',
	'Class:SynchroDataSource/Attribute:status/Value:implementation+' => '',
	'Class:SynchroDataSource/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:SynchroDataSource/Attribute:status/Value:obsolete+' => '',
	'Class:SynchroDataSource/Attribute:status/Value:production' => 'Production',
	'Class:SynchroDataSource/Attribute:status/Value:production+' => '',
	'Class:SynchroDataSource/Attribute:user_id' => 'Utilisateur',
	'Class:SynchroDataSource/Attribute:user_id+' => 'Seul cet utilisateur (et les administrateurs) peuvent exécuter cette synchronisation',
	'Class:SynchroDataSource/Attribute:notify_contact_id' => 'Contact à notifier',
	'Class:SynchroDataSource/Attribute:notify_contact_id+' => 'Contact à notifier en cas d\'erreur',
	'Class:SynchroDataSource/Attribute:scope_class' => 'Type cible',
	'Class:SynchroDataSource/Attribute:scope_class+' => 'Type d\'objets à synchroniser',
	'Class:SynchroDataSource/Attribute:scope_restriction' => 'Restriction',
	'Class:SynchroDataSource/Attribute:scope_restriction+' => '',
	'Class:SynchroDataSource/Attribute:full_load_periodicity' => 'Obsolescence après',
	'Class:SynchroDataSource/Attribute:full_load_periodicity+' => 'Un objet est considéré comme obsolète s\'il n\'apparaît pas dans les données au delà de cette durée',
	'Class:SynchroDataSource/Attribute:reconciliation_policy' => 'Politique de recherche',
	'Class:SynchroDataSource/Attribute:reconciliation_policy+' => '',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_attributes' => 'Utiliser les champs',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_attributes+' => '',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_primary_key' => 'Utiliser la clé primaire',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_primary_key+' => '',
	'Class:SynchroDataSource/Attribute:action_on_zero' => 'Action si zéro',
	'Class:SynchroDataSource/Attribute:action_on_zero+' => '',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:create' => 'Créer',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:create+' => '',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:error' => 'Erreur',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:error+' => '',
	'Class:SynchroDataSource/Attribute:action_on_one' => 'Action si un',
	'Class:SynchroDataSource/Attribute:action_on_one+' => '',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:error' => 'Erreur',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:error+' => '',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:update' => 'Mettre à jour',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:update+' => '',
	'Class:SynchroDataSource/Attribute:action_on_multiple' => 'Action si plusieurs',
	'Class:SynchroDataSource/Attribute:action_on_multiple+' => '',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:create' => 'Créer',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:create+' => '',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:error' => 'Erreur',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:error+' => '',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:take_first' => 'Prendre le premier',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:take_first+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy' => 'Politique d\'effacement',
	'Class:SynchroDataSource/Attribute:delete_policy+' => 'Façon dont sont traités les objets obsolètes',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:delete' => 'Effacer',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:delete+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:ignore' => 'Ignorer',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:ignore+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update' => 'Mettre à jour',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update_then_delete' => 'Mettre à jour puis effacer',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update_then_delete+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy_update' => 'Mise à jour',
	'Class:SynchroDataSource/Attribute:delete_policy_update+' => 'Format: nom_de_champ:valeur; ...',
	'Class:SynchroDataSource/Attribute:delete_policy_retention' => 'Durée de rétention',
	'Class:SynchroDataSource/Attribute:delete_policy_retention+' => 'Si la politique est \'Mettre à jour puis effacer\', les objets obsolètes sont encore conservés pendant cette durée avant d\'être effacés',

	'Class:SynchroDataSource/Attribute:attribute_list' => 'Liste des champs',
	'Class:SynchroDataSource/Attribute:attribute_list+' => '',
	'Class:SynchroDataSource/Attribute:user_delete_policy' => 'Utilisateurs autorisés',
	'Class:SynchroDataSource/Attribute:user_delete_policy+' => 'Quels utilisateurs sont autorisés à effacer des objets synchronisés',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:administrators' => 'Seulement les administrateurs',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:administrators+' => '',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:everybody' => 'Tous les utilisateurs autorisés',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:everybody+' => '',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:nobody' => 'Personne',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:nobody+' => '',
	'Class:SynchroDataSource/Attribute:url_icon' => 'Icône (hyperlien)',
	'Class:SynchroDataSource/Attribute:url_icon+' => 'Hyperlien vers une icône représentant l\'application source des données',
	'Class:SynchroDataSource/Attribute:url_application' => 'Application (hyperlien)',
	'Class:SynchroDataSource/Attribute:url_application+' => 'Un hyperlien vers l\'application source des données. Paramètres possibles: $this->nom_de_champ$ et $replica->primary_key$',
	'Class:SynchroDataSource/Attribute:database_table_name' => 'Table de données',
	'Class:SynchroDataSource/Attribute:database_table_name+' => 'Nom de la table stockant les données de cette source. Un nom par défaut est calculé automatiquement si ce champ est laissé vide.',
	'Class:SynchroAttribute' => 'Champs de synchronisation',
	'Class:SynchroAttribute+' => '',
	'Class:SynchroAttribute/Attribute:sync_source_id' => 'Source de données',
	'Class:SynchroAttribute/Attribute:sync_source_id+' => '',
	'Class:SynchroAttribute/Attribute:attcode' => 'Champ',
	'Class:SynchroAttribute/Attribute:attcode+' => '',
	'Class:SynchroAttribute/Attribute:update' => 'Mise à jour',
	'Class:SynchroAttribute/Attribute:update+' => '',
	'Class:SynchroAttribute/Attribute:reconcile' => 'Recherche',
	'Class:SynchroAttribute/Attribute:reconcile+' => '',
	'Class:SynchroAttribute/Attribute:update_policy' => 'Politique de mise à jour',
	'Class:SynchroAttribute/Attribute:update_policy+' => '',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_locked' => 'Maître (verrouillé)',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_locked+' => '',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_unlocked' => 'Maître (non-verrouillé)',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_unlocked+' => '',
	'Class:SynchroAttribute/Attribute:update_policy/Value:write_if_empty' => 'Ecrire si le champ est vide',
	'Class:SynchroAttribute/Attribute:update_policy/Value:write_if_empty+' => '',
	'Class:SynchroAttribute/Attribute:finalclass' => 'Type',
	'Class:SynchroAttribute/Attribute:finalclass+' => '',
	'Class:SynchroAttExtKey' => 'Synchro Clé Externe',
	'Class:SynchroAttExtKey+' => '',
	'Class:SynchroAttExtKey/Attribute:reconciliation_attcode' => 'Champ',
	'Class:SynchroAttExtKey/Attribute:reconciliation_attcode+' => '',
	'Class:SynchroAttLinkSet' => 'Synchro Linkset',
	'Class:SynchroAttLinkSet+' => '',
	'Class:SynchroAttLinkSet/Attribute:row_separator' => 'Séparateur de colonnes',
	'Class:SynchroAttLinkSet/Attribute:row_separator+' => '',
	'Class:SynchroAttLinkSet/Attribute:attribute_separator' => 'Séparateur de champs',
	'Class:SynchroAttLinkSet/Attribute:attribute_separator+' => '',
	'Class:SynchroLog' => 'Journal de Synchro',
	'Class:SynchroLog+' => '',
	'Class:SynchroLog/Attribute:sync_source_id' => 'Source de données',
	'Class:SynchroLog/Attribute:sync_source_id+' => '',
	'Class:SynchroLog/Attribute:start_date' => 'Date/heure de début',
	'Class:SynchroLog/Attribute:start_date+' => '',
	'Class:SynchroLog/Attribute:end_date' => 'Date/heure de fin',
	'Class:SynchroLog/Attribute:end_date+' => '',
	'Class:SynchroLog/Attribute:status' => 'Etat',
	'Class:SynchroLog/Attribute:status+' => '',
	'Class:SynchroLog/Attribute:status/Value:completed' => 'Terminé Ok',
	'Class:SynchroLog/Attribute:status/Value:completed+' => '',
	'Class:SynchroLog/Attribute:status/Value:error' => 'Erreur',
	'Class:SynchroLog/Attribute:status/Value:error+' => '',
	'Class:SynchroLog/Attribute:status/Value:running' => 'En cours',
	'Class:SynchroLog/Attribute:status/Value:running+' => '',
	'Class:SynchroLog/Attribute:stats_nb_replica_seen' => 'Nb de réplicas vus',
	'Class:SynchroLog/Attribute:stats_nb_replica_seen+' => '',
	'Class:SynchroLog/Attribute:stats_nb_replica_total' => 'Nb total de réplicas',
	'Class:SynchroLog/Attribute:stats_nb_replica_total+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted' => 'Nb d\'objets effacés',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted_errors' => 'Nb d\'erreurs lors de l\'effacement',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted_errors+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted' => 'Nb d\'objets obsolètés',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted_errors' => 'Nb d\'erreurs lors de l\'obsolescence',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted_errors+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_created' => 'Nb d\'objets créés',
	'Class:SynchroLog/Attribute:stats_nb_obj_created+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_created_errors' => 'Nb d\'erreurs lors de la création',
	'Class:SynchroLog/Attribute:stats_nb_obj_created_errors+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated' => 'Nb d\'objets mis à jour',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated_errors' => 'Nb d\erreurs lors de la mise à jour',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated_errors+' => '',
	'Class:SynchroLog/Attribute:stats_nb_replica_reconciled_errors' => 'Nb d\'erreurs lors de la réconciliation',
	'Class:SynchroLog/Attribute:stats_nb_replica_reconciled_errors+' => '',
	'Class:SynchroLog/Attribute:stats_nb_replica_disappeared_no_action' => 'Nb d\'objets disparus',
	'Class:SynchroLog/Attribute:stats_nb_replica_disappeared_no_action+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_updated' => 'Nb d\'objets (nouveaux) mis à jour',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_updated+' => '',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_unchanged' => 'Nb d\'objets (nouveaux) inchangés',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_unchanged+' => '',
	'Class:SynchroLog/Attribute:last_error' => 'Dernière erreur',
	'Class:SynchroLog/Attribute:last_error+' => '',
	'Class:SynchroLog/Attribute:traces' => 'Traces',
	'Class:SynchroLog/Attribute:traces+' => '',
	'Class:SynchroReplica' => 'Réplica de Synchronisation',
	'Class:SynchroReplica+' => '',
	'Class:SynchroReplica/Attribute:sync_source_id' => 'Source de données',
	'Class:SynchroReplica/Attribute:sync_source_id+' => '',
	'Class:SynchroReplica/Attribute:base_class' => 'Type de base',
	'Class:SynchroReplica/Attribute:base_class+' => '',
	'Class:SynchroReplica/Attribute:dest_id' => 'Objet destination',
	'Class:SynchroReplica/Attribute:dest_id+' => '',
	'Class:SynchroReplica/Attribute:dest_class' => 'Type de l\'objet',
	'Class:SynchroReplica/Attribute:dest_class+' => '',
	'Class:SynchroReplica/Attribute:status_last_seen' => 'Dernière détection',
	'Class:SynchroReplica/Attribute:status_last_seen+' => '',
	'Class:SynchroReplica/Attribute:status' => 'Etat',
	'Class:SynchroReplica/Attribute:status+' => '',
	'Class:SynchroReplica/Attribute:status/Value:modified' => 'Modifié',
	'Class:SynchroReplica/Attribute:status/Value:modified+' => '',
	'Class:SynchroReplica/Attribute:status/Value:new' => 'Nouveau',
	'Class:SynchroReplica/Attribute:status/Value:new+' => '',
	'Class:SynchroReplica/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:SynchroReplica/Attribute:status/Value:obsolete+' => '',
	'Class:SynchroReplica/Attribute:status/Value:orphan' => 'Orphelin',
	'Class:SynchroReplica/Attribute:status/Value:orphan+' => '',
	'Class:SynchroReplica/Attribute:status/Value:synchronized' => 'Synchronisé',
	'Class:SynchroReplica/Attribute:status/Value:synchronized+' => '',
	'Class:SynchroReplica/Attribute:status_dest_creator' => 'Créé par la source ?',
	'Class:SynchroReplica/Attribute:status_dest_creator+' => '',
	'Class:SynchroReplica/Attribute:status_last_error' => 'Dernière erreur',
	'Class:SynchroReplica/Attribute:status_last_error+' => '',
	'Class:SynchroReplica/Attribute:status_last_warning' => 'Avertissements',
	'Class:SynchroReplica/Attribute:status_last_warning+' => '',
	'Class:SynchroReplica/Attribute:info_creation_date' => 'Date de création',
	'Class:SynchroReplica/Attribute:info_creation_date+' => '',
	'Class:SynchroReplica/Attribute:info_last_modified' => 'Date de dernière modification',
	'Class:SynchroReplica/Attribute:info_last_modified+' => '',
	'Class:appUserPreferences' => 'Préférences utilisateur',
	'Class:appUserPreferences+' => '',
	'Class:appUserPreferences/Attribute:userid' => 'Utilisateur',
	'Class:appUserPreferences/Attribute:userid+' => '',
	'Class:appUserPreferences/Attribute:preferences' => 'Préférences',
	'Class:appUserPreferences/Attribute:preferences+' => '',
	'Core:AttributeLinkedSet' => 'Objets liés (1-n)',
	'Core:AttributeLinkedSet+' => 'Liste d\'objets d\'une classe donnée et pointant sur l\'objet courant',
	'Core:AttributeLinkedSetIndirect' => 'Objets liés (1-n)',
	'Core:AttributeLinkedSetIndirect+' => 'Liste d\'objets d\'une classe donnée et liés à l\'objet courant via une classe intermédiaire',
	'Core:AttributeInteger' => 'Nombre entier',
	'Core:AttributeInteger+' => 'Valeur numérique entière',
	'Core:AttributeDecimal' => 'Nombre décimal',
	'Core:AttributeDecimal+' => 'Valeur numérique décimale',
	'Core:AttributeBoolean' => 'Booléen',
	'Core:AttributeBoolean+' => 'Booléen',
	'Core:AttributeString' => 'Chaîne de caractères',
	'Core:AttributeString+' => 'Chaîne de caractères (limitée à une ligne)',
	'Core:AttributeClass' => 'Classe',
	'Core:AttributeClass+' => 'Classe d\'objets',
	'Core:AttributeApplicationLanguage' => 'Langue',
	'Core:AttributeApplicationLanguage+' => 'Codes langue et pays (EN US)',
	'Core:AttributeFinalClass' => 'Classe',
	'Core:AttributeFinalClass+' => 'Classe réelle de l\'objet (attribut créé automatiquement)',
	'Core:AttributePassword' => 'Mot de passe',
	'Core:AttributePassword+' => 'Mot de passe qui peut être lu en clair',
	'Core:AttributeEncryptedString' => 'Chaîne encryptée',
	'Core:AttributeEncryptedString+' => 'Chaîne encryptée avec une clé locale',
	'Core:AttributeText' => 'Texte',
	'Core:AttributeText+' => 'Chaîne de caractères de plusieurs lignes',
	'Core:AttributeHTML' => 'HTML',
	'Core:AttributeHTML+' => 'Texte formaté en HTML',
	'Core:AttributeEmailAddress' => 'Adresse électronique',
	'Core:AttributeEmailAddress+' => 'Adresse électronique (xxxx@yyy.zzz)',
	'Core:AttributeIPAddress' => 'Adresse IP',
	'Core:AttributeIPAddress+' => 'Adresse IP',
	'Core:AttributeOQL' => 'Expression OQL',
	'Core:AttributeOQL+' => 'Expression formattée en "Object Query Language"',
	'Core:AttributeEnum' => 'Enumération',
	'Core:AttributeEnum+' => 'Valeur choisie parmi un liste de chaîne de caractères',
	'Core:AttributeTemplateString' => 'Modèle de chaîne de caractères',
	'Core:AttributeTemplateString+' => 'Chaîne de caractères d\'une ligne, contenant des espaces réservés pour des données iTop',
	'Core:AttributeTemplateText' => 'Modèle de texte',
	'Core:AttributeTemplateText+' => 'Texte contenant des espaces réservés pour des données iTop',
	'Core:AttributeTemplateHTML' => 'Modèle HTML',
	'Core:AttributeTemplateHTML+' => 'HTML contenant des espaces réservés pour des données iTop',
	'Core:AttributeDateTime' => 'Date/heure',
	'Core:AttributeDateTime+' => 'Date et heure (année-mois-jour hh:mm:ss)',
	'Core:AttributeDateTime?SmartSearch' => '
<p>
	Format de date :<br/>
	<b>aaaa-mm-jj hh:mm:ss</b><br/>
	Exemple : 2011-07-19 18:40:00
</p>
<p>
Opérateurs :<br/>
	<b>&gt;</b><em>date</em><br/>
	<b>&lt;</b><em>date</em><br/>
	<b>[</b><em>date</em>,<em>date</em><b>]</b>
</p>
<p>
Si l\'heure n\'est pas spécifiée, cela revient à 00:00:00 (minuit)
</p>',
	'Core:AttributeDate' => 'Date',
	'Core:AttributeDate+' => 'Date (année-mois-jour)',
	'Core:AttributeDate?SmartSearch' => '
<p>
	Format de date :<br/>
	<b>aaaa-mm-jj</b><br/>
	Exemple : 2011-07-19
</p>
<p>
Opérateurs :<br/>
	<b>&gt;</b><em>date</em><br/>
	<b>&lt;</b><em>date</em><br/>
	<b>[</b><em>date</em>,<em>date</em><b>]</b>
</p>',
	'Core:AttributeDeadline' => 'Délai',
	'Core:AttributeDeadline+' => 'Date/heure exprimée relativement à l\'heure courante',
	'Core:AttributeExternalKey' => 'Clé externe',
	'Core:AttributeExternalKey+' => 'Clé externe',
	'Core:AttributeHierarchicalKey' => 'Clé externe (hiérarchie)',
	'Core:AttributeHierarchicalKey+' => 'Clé externe vers le parent',
	'Core:AttributeExternalField' => 'Attribut externe',
	'Core:AttributeExternalField+' => 'Copie de la valeur d\'un attribut de l\'objet lié par une clé externe',
	'Core:AttributeURL' => 'URL',
	'Core:AttributeURL+' => 'URL absolue ou relative',
	'Core:AttributeBlob' => 'Blob',
	'Core:AttributeBlob+' => 'Contenu binaire (document)',
	'Core:AttributeOneWayPassword' => 'Mot de passe "one way"',
	'Core:AttributeOneWayPassword+' => 'Mot de passe qui peut être vérifié mais jamais lu en clair',
	'Core:AttributeTable' => 'Table',
	'Core:AttributeTable+' => 'Tableau à deux dimensions',
	'Core:AttributePropertySet' => 'Propriétés',
	'Core:AttributePropertySet+' => 'Liste de propriétés (nom et valeur) non typées',

	'Core:AttributeFriendlyName' => 'Nom usuel (convivial)',
	'Core:AttributeFriendlyName+' => 'Attribut créé automatiquement ; sa valeur est calculée d\'après d\'autres attributs',

	'Core:FriendlyName-Label' => 'Nom',
	'Core:FriendlyName-Description' => 'Nom usuel',

	'Change:ObjectCreated' => 'Elément créé',
	'Change:ObjectDeleted' => 'Elément effacé',
	'Change:ObjectModified' => 'Elément modifié',
	'Change:AttName_SetTo_NewValue_PreviousValue_OldValue' => '%1$s modifié en %2$s (ancienne valeur: %3$s)',
	'Change:AttName_SetTo' => '%1$s modifié en %2$s',
	'Change:Text_AppendedTo_AttName' => '%1$s ajouté à %2$s',
	'Change:AttName_Changed_PreviousValue_OldValue' => '%1$s modifié, ancienne valeur: %2$s',
	'Change:AttName_Changed' => '%1$s modifié',
	'Change:AttName_EntryAdded' => '%1$s champ modifié, une nouvelle entrée a été ajoutée',
	'Change:LinkSet:Added' => 'ajout de %1$s',
	'Change:LinkSet:Removed' => 'suppression de %1$s',
	'Change:LinkSet:Modified' => 'modification de %1$s',
	'Class:Action' => 'Action',
	'Class:Action+' => 'Action spécifique',
	'Class:Action/Attribute:name' => 'Nom',
	'Class:Action/Attribute:name+' => 'Label',
	'Class:Action/Attribute:description' => 'Description',
	'Class:Action/Attribute:description+' => '',
	'Class:Action/Attribute:status' => 'Etat',
	'Class:Action/Attribute:status+' => '',
	'Class:Action/Attribute:status/Value:test' => 'En test',
	'Class:Action/Attribute:status/Value:test+' => '',
	'Class:Action/Attribute:status/Value:enabled' => 'En production',
	'Class:Action/Attribute:status/Value:enabled+' => '',
	'Class:Action/Attribute:status/Value:disabled' => 'Inactive',
	'Class:Action/Attribute:status/Value:disabled+' => '',
	'Class:Action/Attribute:trigger_list' => 'Déclencheurs liés',
	'Class:Action/Attribute:trigger_list+' => '',
	'Class:Action/Attribute:finalclass' => 'Type',
	'Class:Action/Attribute:finalclass+' => '',
	'Class:ActionNotification' => 'notification',
	'Class:ActionNotification+' => '',
	'Class:Trigger' => 'Déclencheur',
	'Class:Trigger+' => '',
	'Class:Trigger/Attribute:description' => 'Description',
	'Class:Trigger/Attribute:description+' => '',
	'Class:Trigger/Attribute:action_list' => 'Actions déclenchées',
	'Class:Trigger/Attribute:action_list+' => '',
	'Class:Trigger/Attribute:finalclass' => 'Type',
	'Class:Trigger/Attribute:finalclass+' => '',
	'Class:TriggerOnObject' => 'Trigger on a class of objects',
	'Class:TriggerOnObject+' => '',
	'Class:TriggerOnObject/Attribute:target_class' => 'Classe cible',
	'Class:TriggerOnObject/Attribute:target_class+' => 'label',
	'Class:TriggerOnObject/Attribute:filter' => 'Filtre',
	'Class:TriggerOnObject/Attribute:filter+' => '',
	'TriggerOnObject:WrongFilterQuery' => 'Requête de filtrage incorrecte: %1$s',
	'TriggerOnObject:WrongFilterClass' => 'La requête de filtrage doit retourner des objets de la classe "%1$s"',
	'Class:TriggerOnStateChange' => 'Trigger on object state change',
	'Class:TriggerOnStateChange+' => '',
	'Class:TriggerOnStateChange/Attribute:state' => 'Etat',
	'Class:TriggerOnStateChange/Attribute:state+' => 'label',
	'Class:TriggerOnThresholdReached' => 'Déclencheur sur dépassement de seuil',
	'Class:TriggerOnThresholdReached+' => 'Déclencheur sur franchissement de seuil d\'un chronomètre',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code' => 'Chronomètre',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code+' => '',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index' => 'Seuil',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:never' => 'Personne',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:depends' => 'Uniquement les administrateurs',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:always' => 'Tous les utilisateurs autorisés',
	'SynchroDataSource:Description' => 'Description',
	'SynchroDataSource:Reconciliation' => 'Recherche et réconciliation',
	'SynchroDataSource:Deletion' => 'Règles d\'effacement',
	'SynchroDataSource:Status' => 'Etat',
	'SynchroDataSource:Information' => 'Information',
	'SynchroDataSource:Definition' => 'Définition',
	'Core:SynchroAttributes' => 'Champs',
	'Core:SynchroStatus' => 'Etat',
	'Core:Synchro:ErrorsLabel' => 'Erreurs',
	'Core:Synchro:CreatedLabel' => 'Créations',
	'Core:Synchro:ModifiedLabel' => 'Modifications',
	'Core:Synchro:UnchangedLabel' => 'Sans changement',
	'Core:Synchro:ReconciledErrorsLabel' => 'Erreurs',
	'Core:Synchro:ReconciledLabel' => 'Trouvés',
	'Core:Synchro:ReconciledNewLabel' => 'Créations',
	'Core:SynchroReconcile:Yes' => 'Oui',
	'Core:SynchroReconcile:No' => 'Non',
	'Core:SynchroUpdate:Yes' => 'Oui',
	'Core:SynchroUpdate:No' => 'Non',
	'Core:Synchro:LastestStatus' => 'Dernier état',
	'Core:Synchro:History' => 'Historique de synchronisation',
	'Core:Synchro:NeverRun' => 'Aucun historique, la synchronisation n\'a pas encore fonctionné',
	'Core:Synchro:SynchroEndedOn_Date' => 'La dernière synchronisation s\'est terminée à: %1$s.',
	'Core:Synchro:SynchroRunningStartedOn_Date' => 'Synchronisation en cours (début à %1$s)',
	'Menu:DataSources' => 'Synchronisation',
	'Menu:DataSources+' => '',
	'Core:Synchro:label_repl_ignored' => 'Ignorés (%1$s)',
	'Core:Synchro:label_repl_disappeared' => 'Disparus (%1$s)',
	'Core:Synchro:label_repl_existing' => 'Existants (%1$s)',
	'Core:Synchro:label_repl_new' => 'Nouveau (%1$s)',
	'Core:Synchro:label_obj_deleted' => 'Effacés (%1$s)',
	'Core:Synchro:label_obj_obsoleted' => 'Obsoletés (%1$s)',
	'Core:Synchro:label_obj_disappeared_errors' => 'Erreurs (%1$s)',
	'Core:Synchro:label_obj_disappeared_no_action' => 'Aucune action (%1$s)',
	'Core:Synchro:label_obj_unchanged' => 'Sans changement (%1$s)',
	'Core:Synchro:label_obj_updated' => 'Mis à jour (%1$s)',
	'Core:Synchro:label_obj_updated_errors' => 'Erreurs (%1$s)',
	'Core:Synchro:label_obj_new_unchanged' => 'Sans changement (%1$s)',
	'Core:Synchro:label_obj_new_updated' => 'Mis à jour (%1$s)',
	'Core:Synchro:label_obj_created' => 'Créations (%1$s)',
	'Core:Synchro:label_obj_new_errors' => 'Erreurs (%1$s)',
	'Core:SynchroLogTitle' => '%1$s - %2$s',
	'Core:Synchro:Nb_Replica' => 'Replica traités: %1$s',
	'Core:Synchro:Nb_Class:Objects' => '%1$s: %2$s',
	'Class:SynchroDataSource/Error:AtLeastOneReconciliationKeyMustBeSpecified' => 'Si la politique de réconciliation n\'est pas la clé primaire, au moins une clé de recherche doit être spécifiée',
	'Class:SynchroDataSource/Error:DeleteRetentionDurationMustBeSpecified' => 'Pour que les objets soient effacés après avoir été obsoletés, il faut spécifier une durée de rétention',
	'Class:SynchroDataSource/Error:DeletePolicyUpdateMustBeSpecified' => 'Les objets obsolètes doivent être mis à jour, mais aucune information de mise à jour n\'est spécifiée',
	'Class:SynchroDataSource/Error:DataTableAlreadyExists' => 'La table %1$s existe déjà dans la base de données. Veuillez utiliser un autre nom pour la table des données de cette source.',
	'Core:SynchroReplica:PublicData' => 'Données synchronisées',
	'Core:SynchroReplica:PrivateDetails' => 'Informations internes',
	'Core:SynchroReplica:BackToDataSource' => 'Retourner aux détails de la source de données: %1$s',
	'Core:SynchroReplica:ListOfReplicas' => 'Liste des réplica',
	'Core:SynchroAttExtKey:ReconciliationById' => 'id (clé primaire)',
	'Core:SynchroAtt:attcode' => 'Champ',
	'Core:SynchroAtt:attcode+' => '',
	'Core:SynchroAtt:reconciliation' => 'Réconciliation ?',
	'Core:SynchroAtt:reconciliation+' => '',
	'Core:SynchroAtt:update' => 'Mise  jour ?',
	'Core:SynchroAtt:update+' => '',
	'Core:SynchroAtt:update_policy' => 'Politique de mise à jour',
	'Core:SynchroAtt:update_policy+' => '',
	'Core:SynchroAtt:reconciliation_attcode' => 'Clé de recherche',
	'Core:SynchroAtt:reconciliation_attcode+' => '',
	'Core:SyncDataExchangeComment' => '(Synchronisation)',
	'Core:Synchro:ListOfDataSources' => 'Sources de données:',
	'Core:Synchro:LastSynchro' => 'Dernière synchronisation:',
	'Core:Synchro:ThisObjectIsSynchronized' => 'Cet objet est synchronisé avec une source de données',
	'Core:Synchro:TheObjectWasCreatedBy_Source' => 'Cet objet a été <b>créé</b> par la source de données %1$s',
	'Core:Synchro:TheObjectCanBeDeletedBy_Source' => 'Cet objet <b>peut être effacé/b> par la source de données %1$s',
	'Core:Synchro:TheObjectCannotBeDeletedByUser_Source' => 'Vous <b>ne pouvez pas effacer</b> cet objet car il est géré par le source de données %1$s',
	'TitleSynchroExecution' => 'Exécution de la synchronisation',
	'Class:SynchroDataSource:DataTable' => 'Table contenant les données: %1$s',
	'Core:SyncDataSourceObsolete' => 'Cette source de données est obsolète. Opération annulée.',
	'Core:SyncDataSourceAccessRestriction' => 'Seuls les administrateurs et l\'utilisateur spécifié dans la source de données peuvent exécuter cette synchronisation. Opération annulée.',
	'Core:SyncTooManyMissingReplicas' => 'Tous les réplicas sont absents de l\'import. L\'import a-t-il réellement tourné. Opération annulée.',
	'Core:Synchro:ListReplicas_AllReplicas_Errors_Warnings' => '%1$s replicas, %2$s erreur(s), %3$s avertissement(s).',
	'Core:SynchroReplica:TargetObject' => 'Objet Synchronisé : %1$s',
	'Core:Duration_Seconds' => '%1$ds',
	'Core:Duration_Minutes_Seconds' => '%1$dmin %2$ds',
	'Core:Duration_Hours_Minutes_Seconds' => '%1$dh %2$dmin %3$ds',
	'Core:Duration_Days_Hours_Minutes_Seconds' => '%1$sj %2$dh %3$dmin %4$ds',
));
?>
