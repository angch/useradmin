<?php defined('SYSPATH') or die('No direct script access.');

// This file was generated by Kohana-I18nget, http://github.com/rafsoaken/kohana-i18nget

return array(
	// \views\useradmin\menu.php
	'user.admin' => 'User Admin', // 9
	'my.profile' => 'Mein Profil', // 11
	'logout' => 'Abmelden', // 12
	'register' => 'Registrieren', // 16
	'login' => 'Login', // 17

	// \views\user\login.php
	'email.or.username' => 'Email oder Username', // 23
	'password' => 'Passwort', // 26
	'?forgot.password' => 'Sie haben Ihr Passwort vergessen?', // 27
	'remember.me' => 'Angemeldet bleiben', // 38
	'?dont.have.account' => 'Sie sind noch nicht registriert?', // 54
	'register.new.account' => 'Neuen User registrieren', // 54
	'register.or.providerchange' => 'Zur Registration / zum Anmelden klicken Sie bitte auf Ihren Konto Provider', // 57

	// \views\user\noaccess.php
	'access.denied' => 'Keine Zugriffsberechtigung', // 2
	'no.rights.to.access.functionality' => 'Sie haben für diese Funktion nicht die erforderlichen Rechte', // 4

	// \views\user\profile.php
	'edit.profile' => 'Profil bearbeiten', // 4
	'delete.account' => 'Konto löschen', // 5
	'user.profile' => 'User Profil', // 9
	'your.user.information' => 'Ihr Benutzerkonto', // 11
	'username' => 'Username', // 13
	'email' => 'Email', // 13
	'login.activity' => 'Login Aktivität', // 16
	'total.nbr.logins' => 'Anzahl aller Logins', // 17
	'accounts.associated.with.profile' => 'Konten, die mit diesem Profil verbunden sind', // 23
	'additional.accountproviders' => 'Weitere Konten Provider', // 31
	'click.provider.icon.to.associate.account' => 'Klicken Sie das Konto Provider Logo um Ihr Profil damit zu verknüpfen', // 31

	// \views\user\profile_edit.php
	'roles' => 'Berechtigungen', // 19
	'role' => 'Berechtigung', // 21
	'description' => 'Beschreibung', // 21
	'save' => 'Speichern', // 40

	// \views\user\register.php
	'?already.have.account' => 'Haben Sie schon ein Konto?', // 5
	'login.here' => 'Hier anmelden', // 5
	'enter.info.to.register' => 'Füllen Sie folgende Informationen aus, um sich zu registrieren', // 7
	'register.account' => 'Neues Benutzerkonto anlegen', // 35

	// \views\user\unregister.php
	'confirm.remove.user.account' => 'Löschen des Benutzerkontos bestätigen', // 2
	'?sure.to.remove.user.account' => 'Sind Sie sicher, dass Sie das Benutzer Konto löschen wollen?', // 10
	'yes' => 'Ja', // 12
	'no' => 'Nein', // 13
	'confirm' => 'Bestätigen', // 15
	'cancel' => 'Abbrechen', // 19

	// \views\user\user_edit_form.php
	'allowed.usernames' => 'Länge zw. 4 bis 32 Buchstaben oder Zahlen', // 2
	'email.address' => 'Email Adresse', // 3
	'allowed.passwords' => 'Passwörter sollten zwischen 6 und 42 Zeichen lang sein', // 6
	'retype.password' => 'Passwort wiederholen', // 7

	// \views\user\reset\forgot.php
	'?forgot.password.or.username' => 'Usernamen oder Passwort vergessen?', // 3
	'send.password.resetlink' => 'Passwort-zurücksetzen Link schicken', // 6
	'reset.password' => 'Passwort zurücksetzen', // 14

	// \views\user\reset\reset.php
	'account.email.address' => 'Benuzterkonto Email Adresse', // 10
	'password.reset.token' => 'Passwort-Reset Kennung', // 14

	// \views\user\admin\delete.php
	'?delete.user' => 'User löschen?', // 3
	'?sure.to.delete.user' => 'User wirklich löschen?', // 12
	'delete' => 'löschen', // 16

	// \views\user\admin\edit.php
	'?edit.or.add.user' => 'User editieren oder hinzufügen?', // 18

	// \views\user\admin\index.php
	'?add.user' => 'User hinzufügen?', // 11
	'administer.users' => 'User verwalten', // 15
	'edit' => 'Editieren', // 31
	'last.login' => 'Letztes Login', // 54
	'nbr.of.logins' => 'Anzahl der Logins', // 55
	'identities' => 'Identitäten', // 58
	'actions' => 'Aktionen', // 60

	// \views\template\useradmin.php
	'module.page.title' => 'Useradmin für Kohana', // 15

	// \views\pagination\useradmin.php
	'first' => 'Erste', // 13
	'previous' => 'Folgende', // 19
	'next' => 'Nächste', // 35
	'last' => 'Letzte', // 41

	// \classes\useradmin\helper\format.php
	'never' => 'nie', // 33
	'one.second.ago' => 'vor einer Sekunde', // 38
	'seconds.ago' => 'Sekunden zuvor', // 38
	'one.minute.ago' => 'vor einer Minute', // 42
	'minutes.ago' => 'Minuten zuvor', // 46
	'one.hour.ago' => 'vor einer Stunde', // 50
	'hours.ago' => 'Stunden zuvor', // 54
	'yesterday' => 'gestern', // 58
	'days.ago' => 'Tage zuvor', // 62
	'one.month.ago' => 'vor einem Monat', // 67
	'months.ago' => 'Monate zuvor', // 67
	'one.year.ago' => 'vor einem Jahr', // 72
	'years.ago' => 'Jahre zuvor', // 72

	// \classes\useradmin\controller\user.php
	'values.saved' => 'Werte gespeichert', // 161
	'error.values.could.not.be.saved' => 'Error. Werte konnten nicht gespeichert werden', // 170
	'user.registration' => 'Benutzer registrieren', // 208
	'captcha.incorrect' => 'Captcha ist nicht korrekt', // 235
	'please.try.again' => 'Bitte versuchen Sie es nochmals', // 235
	'close.user.account' => 'Dieses Benutzerkonto schließen', // 277
	'user.deleted' => 'Benutzer wurde gelöscht', // 308
	'forgot.password' => 'Passwort vergessen', // 422
	'account.password.reset' => 'Benutzerkonto Passwort zurücksetzen', // 434
	'email.password.reset.message.body' => 'Sie haven ein Passwort-Reset auf unserer Seite angefragt.

    Sie können jetzt Ihr Passwort zurücksetzen, indem Sie diesen Link aufrufen:

:reset_token_link

Falls der Link nicht geklickt werden kann, kopieren Sie bitte folgenden Link in Ihren Browser:

:reset_link

Und dann kopieren Sie bitte die Reset Kennung :reset_token in das vorgesehene Feld.
Ihr Benutzername ist: :username

', // 439
	'password.reset.email.sent' => 'Ein Email mit einem Passwort-Reset Link wurde an Sie verschickt', // 455
	'could.not.send.email' => 'Die Email konnte nicht verschickt werden', // 460
	'no.admin.account.email.password.reset' => 'Es kann kein Passwort-Reset Link für ein Adminkonto verschickt werden', // 467
	'user.account.not.found' => 'Benutzerkonto konnte nicht gefunden werden', // 471
	'email.password.reset.not.enabled' => 'Passwort Reset via Email ist nicht aktiviert. Bitte kontaktieren Sie den Administrator der Seite, um das für Sie zu tun', // 486
	'password.reset' => 'Passwort zurücksetzen', // 513
	'your.new.password' => 'Ihr neues Passwort', // 515
	'please.log.in.below' => 'Bitte melden Sie sich unterhalb an', // 517
	'change.password' => 'Passwort ändern', // 533
	'unable.to.change.password.?passwords.match' => 'Passwort konnte nicht geändert werden, weil die Passwörter nicht übereinstimmen', // 560
	'already.logged.in' => 'Sie sind schon angemeldet', // 582
	'provider.not.enabled.select.different.or.login' => 'Dieser Konto Provider ist nicht aktiviert. Bitte wählen Sie einen anderen aus, oder melden Sie sich hier direkt an.', // 598
	'click.yes.to.associate.account' => 'Klicken Sie "Ja", um dieses Provider Konto mit dem Benutzerkonto auf dieser Seite zu verbinden', // 630
	'user.account.associated.with.provider' => 'Ihr Benutzerkonto wurde erfolgreich mit dem Provider Konto verbunden', // 683
	'unable.to.associate.account.with.provider' => 'Es war leider nicht möglich Ihr Prvider Konto mit Ihrem Benutzerkonto zu verbinden.
        Bitte versichern Sie sich, dass noch kein anderes Benutzerkonto mit dem von Ihnen gewählten Provider Konto verbunden ist.', // 691
	'error.associating.account.with.provider' => 'Es gab einen Fehler beim Verbinden des angegebenen Provider Kontos mit Ihrem Benutzerkonto', // 699
	'twitter.no.email.retrive.support' => 'Zur erfolgreichen Verbindung Ihres Twitter Kontos mit Ihrem Benutzerkonto geben Sie jetzt bitte noch Ihre Email Adresse an', // 785
	'logged.in.but.account.emails.do.not.match' => 'Sie sind angemeldet, aber die Email Adresse Ihres Provider Kontos stimmt nicht mit der Email Adresse Ihres Benutzerkontos überein', // 815
	'retrieving.info.from.provider.failed.register.below' => 'Es gab Fehler beim Versuch die Provider Kontodaten abzurufen. Bitte registrieren Sie sich unterhalb', // 821

	// \classes\useradmin\controller\admin\user.php
	'user.administration' => 'User Verwaltung', // 43
	'edit.user' => 'User bearbeiten', // 81
	'delete.user' => 'User löschen', // 223
	'user.already.deleted' => 'User ist schon gelöscht', // 240

	// Orphan phrases
);
