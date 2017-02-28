<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/janus/Documents/www/Github/freeplay-blog/user/plugins/login/languages.yaml',
    'modified' => 1488320001,
    'data' => [
        'en' => [
            'PLUGIN_LOGIN' => [
                'USERNAME' => 'Username',
                'EMAIL' => 'Email',
                'USERNAME_EMAIL' => 'Username/Email',
                'PASSWORD' => 'Password',
                'ACCESS_DENIED' => 'Access denied...',
                'LOGIN_FAILED' => 'Login failed...',
                'LOGIN_SUCCESSFUL' => 'You have been successfully logged in.',
                'BTN_LOGIN' => 'Login',
                'BTN_LOGOUT' => 'Logout',
                'BTN_FORGOT' => 'Forgot',
                'BTN_REGISTER' => 'Register',
                'BTN_RESET' => 'Reset Password',
                'BTN_SEND_INSTRUCTIONS' => 'Send Reset Instructions',
                'RESET_LINK_EXPIRED' => 'Reset link has expired, please try again',
                'RESET_PASSWORD_RESET' => 'Password has been reset',
                'RESET_INVALID_LINK' => 'Invalid reset link used, please try again',
                'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Instructions to reset your password have been sent via email',
                'FORGOT_FAILED_TO_EMAIL' => 'Failed to email instructions, please try again later',
                'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Cannot reset password for %s, no email address is set',
                'FORGOT_USERNAME_DOES_NOT_EXIST' => 'User with username <b>%s</b> does not exist',
                'FORGOT_EMAIL_NOT_CONFIGURED' => 'Cannot reset password. This site is not configured to send emails',
                'FORGOT_EMAIL_SUBJECT' => '%s Password Reset Request',
                'FORGOT_EMAIL_BODY' => '<h1>Password Reset</h1><p>Dear %1$s,</p><p>A request was made on <b>%4$s</b> to reset your password.</p><p><br /><a href="%2$s" class="btn-primary">Click this to reset your password</a><br /><br /></p><p>Alternatively, copy the following URL into your browser\'s address bar:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Kind regards,<br /><br />%3$s</p>',
                'SESSION' => '&ldquo;Remember Me&rdquo;-Session',
                'REMEMBER_ME' => 'Remember Me',
                'REMEMBER_ME_HELP' => 'Sets a persistent cookie on your browser to allow persistent-login authentication between sessions.',
                'REMEMBER_ME_STOLEN_COOKIE' => 'Someone else has used your login information to access this page! All sessions were logged out. Please log in with your credentials and check your data.',
                'BUILTIN_CSS' => 'Use built in CSS',
                'BUILTIN_CSS_HELP' => 'Include the CSS provided by the admin plugin',
                'ROUTE' => 'Login path',
                'ROUTE_HELP' => 'Custom route to a custom login page that your theme provides',
                'ROUTE_REGISTER' => 'Registration path',
                'ROUTE_REGISTER_HELP' => 'Route to the registration page. Set this if you want to use the built-in registration page. Leave it empty if you have your own registration form',
                'USERNAME_NOT_VALID' => 'Username should be between 3 and 16 characters, including lowercase letters, numbers, underscores, and hyphens. Uppercase letters, spaces, and special characters are not allowed',
                'USERNAME_NOT_AVAILABLE' => 'Username %s already exists, please pick another username',
                'PASSWORD_NOT_VALID' => 'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters',
                'PASSWORDS_DO_NOT_MATCH' => 'Passwords do not match. Double-check you entered the same password twice',
                'USER_NEEDS_EMAIL_FIELD' => 'The user needs an email field',
                'EMAIL_SENDING_FAILURE' => 'An error occurred while sending the email',
                'ACTIVATION_EMAIL_SUBJECT' => 'Activate your account on %s',
                'ACTIVATION_EMAIL_BODY' => 'Hi %s, click <a href="%s">here</a> to activate your account on %s',
                'WELCOME_EMAIL_SUBJECT' => 'Welcome to %s',
                'WELCOME_EMAIL_BODY' => 'Hi %s, welcome to %s!',
                'NOTIFICATION_EMAIL_SUBJECT' => 'New user on %s',
                'NOTIFICATION_EMAIL_BODY' => 'Hi, a new user registered on %s. Username: %s, email: %s',
                'EMAIL_FOOTER' => 'GetGrav.org',
                'ACTIVATION_LINK_EXPIRED' => 'Activation link expired',
                'USER_ACTIVATED_SUCCESSFULLY' => 'User activated successfully',
                'INVALID_REQUEST' => 'Invalid request',
                'USER_REGISTRATION' => 'User Registration',
                'USER_REGISTRATION_ENABLED_HELP' => 'Enable the user registration',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validate double entered password',
                'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validate and compare two different fields for the passwords, named `password1` and `password2`. Enable this if you have two password fields in the registration form',
                'SET_USER_DISABLED' => 'Set the user as disabled',
                'SET_USER_DISABLED_HELP' => 'Best used along with the `Send activation email` email. Adds the user to Grav, but sets it as disabled',
                'LOGIN_AFTER_REGISTRATION' => 'Login the user after registration',
                'LOGIN_AFTER_REGISTRATION_HELP' => 'Immediately login the user after the registration. If email activation is required, the user will be logged in immediately after activating the account',
                'SEND_ACTIVATION_EMAIL' => 'Send activation email',
                'SEND_ACTIVATION_EMAIL_HELP' => 'Sends an email to the user to activate his account. Enable the `Set the user as disabled` option when using this feature, so the user will be set as disabled and an email will be sent to activate the account',
                'SEND_NOTIFICATION_EMAIL' => 'Send notification email',
                'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifies the site admin that a new user has registered. The email will be sent to the `To` field in the Email Plugin configuration',
                'SEND_WELCOME_EMAIL' => 'Send welcome email',
                'SEND_WELCOME_EMAIL_HELP' => 'Sends an email to the newly registered user',
                'DEFAULT_VALUES' => 'Default values',
                'DEFAULT_VALUES_HELP' => 'List of field names and values associated, that will be added to the user profile (yaml file) by default, without being configurable by the user. Separate multiple values with a comma, with no spaces between the values',
                'ADDITIONAL_PARAM_KEY' => 'Parameter',
                'ADDITIONAL_PARAM_VALUE' => 'Value',
                'REGISTRATION_FIELDS' => 'Registration fields',
                'REGISTRATION_FIELDS_HELP' => 'Add the fields that will be added to the user yaml file. Fields not listed here will not be added even if present in the registration form',
                'REGISTRATION_FIELD_KEY' => 'Field name',
                'REDIRECT_AFTER_LOGIN' => 'Redirect after login',
                'REDIRECT_AFTER_LOGIN_HELP' => 'Custom route to redirect after login',
                'REDIRECT_AFTER_REGISTRATION' => 'Redirect after registration',
                'REDIRECT_AFTER_REGISTRATION_HELP' => 'Custom route to redirect after the registration',
                'OPTIONS' => 'Options',
                'EMAIL_VALIDATION_MESSAGE' => 'Must be a valid email address',
                'PASSWORD_VALIDATION_MESSAGE' => 'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters',
                'TIMEOUT_HELP' => 'Sets the session timeout in seconds when Remember Me is enabled and checked by the user. Minimum is 604800 which means 1 week',
                'GROUPS_HELP' => 'List of groups the new registered user will be part of, if any',
                'SITE_ACCESS_HELP' => 'List of site access levels the new registered user will have. Example: `login` -> `true` ',
                'WELCOME' => 'Welcome',
                'REDIRECT_AFTER_ACTIVATION' => 'Redirect after the user activation',
                'REDIRECT_AFTER_ACTIVATION_HELP' => 'Used if the user is required to activate the account via email. Once activated, this route will be shown',
                'REGISTRATION_DISABLED' => 'Registration disabled',
                'USE_PARENT_ACL_LABEL' => 'Use parent access rules',
                'USE_PARENT_ACL_HELP' => 'Check for parent access rules if no rules are defined',
                'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Protect a login-protected page media',
                'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'If enabled, media of a login protected page is login protected as well and cannot be seen unless logged in'
            ]
        ],
        'de' => [
            'PLUGIN_LOGIN' => [
                'USERNAME' => 'Benutzername',
                'PASSWORD' => 'Passwort',
                'ACCESS_DENIED' => 'Zugang verweigert',
                'LOGIN_FAILED' => 'Login fehlgeschlagen...',
                'LOGIN_SUCCESSFUL' => 'Du wurdest erfolgreich eingeloggt.',
                'BTN_LOGIN' => 'Anmelden',
                'BTN_LOGOUT' => 'Ausloggen',
                'BTN_FORGOT' => 'Vergessen',
                'BTN_REGISTER' => 'Registrieren',
                'REMEMBER_ME' => 'Angemeldet bleiben',
                'REMEMBER_ME_HELP' => 'Speichert einen Cookie im Browser, welcher eine fortwährende Anmeldung sicherstellt.',
                'BUILTIN_CSS' => 'Nutze das integrierte CSS',
                'BUILTIN_CSS_HELP' => 'Nutze das CSS, welches vom Admin Plugin bereitgestellt werden',
                'ROUTE' => 'Anmeldepfad',
                'ROUTE_REGISTER' => 'Registrierungspfad',
                'USERNAME_NOT_AVAILABLE' => 'Der Nutzername %s existiert bereits, bitte wähle einen Anderen',
                'USER_NEEDS_EMAIL_FIELD' => 'Der Nutzer benötigt ein E-Mail Feld',
                'EMAIL_SENDING_FAILURE' => 'Ein Fehler ist beim senden der E-Mail aufgetreten',
                'ACTIVATION_EMAIL_SUBJECT' => 'Aktiviere dein Account auf %s',
                'ACTIVATION_EMAIL_BODY' => 'Hi %s, click %s to activate your account on %s',
                'WELCOME_EMAIL_SUBJECT' => 'Willkommen zu %s',
                'WELCOME_EMAIL_BODY' => 'Hi %s, willkommen zu %s!',
                'NOTIFICATION_EMAIL_SUBJECT' => 'Neuer Nutzer auf %s',
                'NOTIFICATION_EMAIL_BODY' => 'Hi, ein neuer Nutzer hat sich auf %s registriert. Nutzername: %s, E-Mail: %s',
                'EMAIL_FOOTER' => 'GetGrav.org',
                'ACTIVATION_LINK_EXPIRED' => 'Aktivierungslink ist abgelaufen',
                'USER_ACTIVATED_SUCCESSFULLY' => 'Nutzer erfolgreich aktiviert',
                'INVALID_REQUEST' => 'Ungültige Anfrage',
                'USER_REGISTRATION' => 'Nutzer Registrierung',
                'USER_REGISTRATION_ENABLED_HELP' => 'Aktiviere die Nutzer Registrierung',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Überprüfe das doppelt eingegebene Passwort',
                'SEND_ACTIVATION_EMAIL' => 'Aktivierungs E-Mail senden',
                'SEND_NOTIFICATION_EMAIL' => 'Benachtichtigungs E-Mail senden',
                'SEND_WELCOME_EMAIL' => 'Sende eine Willkommens E-Mail',
                'DEFAULT_VALUES' => 'Standard Werte',
                'ADDITIONAL_PARAM_KEY' => 'Parameter',
                'ADDITIONAL_PARAM_VALUE' => 'Wert',
                'REGISTRATION_FIELDS' => 'Registrierungsfelder',
                'REGISTRATION_FIELD_KEY' => 'Feldname',
                'REDIRECT_AFTER_LOGIN' => 'Umleitung nach Login',
                'REDIRECT_AFTER_REGISTRATION' => 'Umleitung nach Registrierung',
                'OPTIONS' => 'Optionen',
                'EMAIL_VALIDATION_MESSAGE' => 'Muss eine gültige E-Mail Adresse sein'
            ]
        ],
        'fr' => [
            'PLUGIN_LOGIN' => [
                'USERNAME' => 'Nom d’utilisateur',
                'EMAIL' => 'E-mail',
                'USERNAME_EMAIL' => 'Nom d’utilisateur/E-mail',
                'PASSWORD' => 'Mot de passe',
                'ACCESS_DENIED' => 'Accès refusé...',
                'LOGIN_FAILED' => 'Échec de la connexion...',
                'LOGIN_SUCCESSFUL' => 'Vous vous êtes connecté avec succès.',
                'BTN_LOGIN' => 'Connexion',
                'BTN_LOGOUT' => 'Déconnexion',
                'BTN_FORGOT' => 'Mot de passe oublié',
                'BTN_REGISTER' => 'S’enregister',
                'BTN_RESET' => 'Réinitialiser le mot de passe',
                'BTN_SEND_INSTRUCTIONS' => 'Envoyer les instructions de Réinitialisation',
                'RESET_LINK_EXPIRED' => 'Le lien de réinitialisation a expiré, veuillez réessayer',
                'RESET_PASSWORD_RESET' => 'Le mot de passe a été réinitialisé',
                'RESET_INVALID_LINK' => 'Le lien de réinitialisation utilisé n’est pas valide, veuillez réessayer',
                'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Les instructions pour la réinitialisation de votre mot de passe ont été envoyées par e-mail',
                'FORGOT_FAILED_TO_EMAIL' => 'Impossible d’envoyer les instructions, veuillez réessayer ultérieurement',
                'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Impossible de réinitialiser le mot de passe pour %s, aucune adresse e-mail n’a été paramétrée',
                'FORGOT_USERNAME_DOES_NOT_EXIST' => 'L’utilisateur avec le nom d’utilisateur <b>%s</b> n’existe pas',
                'FORGOT_EMAIL_NOT_CONFIGURED' => 'Impossible de réinitialiser le mot de passe. Ce site n’est pas configuré pour envoyer des e-mails',
                'FORGOT_EMAIL_SUBJECT' => 'Demande de réinitialisation de mot de passe %s',
                'FORGOT_EMAIL_BODY' => '<h1>Réinitialisation de mot de passe</h1><p>%1$s,</p><p>Une demande a été faite sur <b>%4$s</b> pour la réinitialisation de votre mot de passe.</p><p><br /><a href="%2$s" class="btn-primary">Cliquez ici pour réinitialiser votre mot de passe</a><br /><br /></p><p>Vous pouvez également copier l’URL suivante dans la barre d’adresse de votre navigateur :</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Cordialement,<br /><br />%3$s</p>',
                'SESSION' => 'Session - &ldquo;Se souvenir de moi&rdquo;',
                'REMEMBER_ME' => 'Se souvenir de moi',
                'REMEMBER_ME_HELP' => 'Définit un cookie persistant sur votre navigateur autorisant l’authentification par connexion persistante entre les sessions.',
                'REMEMBER_ME_STOLEN_COOKIE' => 'Quelqu’un d’autre a utilisé vos informations de connexion pour accéder à cette page ! Toutes les sessions ont été déconnectées. Veuillez vous connecter avec vos identifiants et vérifier vos données.',
                'BUILTIN_CSS' => 'Utiliser les CSS intégrés',
                'BUILTIN_CSS_HELP' => 'Utiliser les CSS fournis dans le plugin d’administration',
                'ROUTE' => 'Chemin de connexion',
                'ROUTE_HELP' => 'Chemin personnalisé vers une page de connexion personnalisée proposée par votre thème',
                'ROUTE_REGISTER' => 'Chemin vers l’inscription',
                'ROUTE_REGISTER_HELP' => 'Chemin vers la page d’inscription. A définir si vous souhaitez utiliser la page d’inscription intégrée. Laisser vide si vous disposez de votre propre formulaire d’inscription.',
                'USERNAME_NOT_VALID' => 'Le nom d’utilisateur doit comporter entre 3 et 16 caractères et peut être composé de lettres minuscules, de chiffres et de tirets de soulignement (underscores) et des traits d’union. Les lettres majuscules, les espaces et les caractères spéciaux ne sont pas autorisés.',
                'USERNAME_NOT_AVAILABLE' => 'Le nom d’utilisateur %s existe déjà, veuillez en choisir un autre.',
                'PASSWORD_NOT_VALID' => 'Le mot de passe doit contenir au moins un chiffre, une majuscule et une minuscule et être composé d’au moins 8 caractères',
                'PASSWORDS_DO_NOT_MATCH' => 'Les mots de passe sont différents. Réessayez de saisir le même mot de passe deux fois.',
                'USER_NEEDS_EMAIL_FIELD' => 'L’utilisateur a besoin d’un champ pour e-mail',
                'EMAIL_SENDING_FAILURE' => 'Une erreur est survenue lors de l’envoi de l’e-mail.',
                'ACTIVATION_EMAIL_SUBJECT' => 'Activer votre compte sur %s',
                'ACTIVATION_EMAIL_BODY' => 'Bonjour %s, <a href="%s">cliquez</a> pour activer votre compte sur %s',
                'WELCOME_EMAIL_SUBJECT' => 'Bienvenue sur %s',
                'WELCOME_EMAIL_BODY' => 'Bonjour %s, bienvenue sur %s!',
                'NOTIFICATION_EMAIL_SUBJECT' => 'Nouvel utilisateur sur %s',
                'EMAIL_FOOTER' => 'GetGrav.org',
                'NOTIFICATION_EMAIL_BODY' => 'Bonjour, un nouvel utilisateur s’est inscrit sur %s. Nom d’utilisateur : %s, e-mail : %s',
                'ACTIVATION_LINK_EXPIRED' => 'Le lien d’activation a expiré',
                'USER_ACTIVATED_SUCCESSFULLY' => 'Utilisateur activé avec succès',
                'INVALID_REQUEST' => 'Requête non valide',
                'USER_REGISTRATION' => 'Inscription de l’utilisateur',
                'USER_REGISTRATION_ENABLED_HELP' => 'Activer l’inscription des utilisateurs',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Valider la double saisie du mot de passe',
                'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Comparer et valider deux champs pour les mots de passe `Mot de passe 1` et `Mot de passe 2`. Activez cette option si vous avez deux champs de mots de passe dans le formulaire d’inscription.',
                'SET_USER_DISABLED' => 'Définir l’utilisateur comme désactivé',
                'SET_USER_DISABLED_HELP' => 'La meilleure pratique si vous utilisez l’option `Envoyer un e-mail d’activation`. Ajoute l’utilisateur à Grav, mais le défini comme étant désactivé.',
                'LOGIN_AFTER_REGISTRATION' => 'Connecte l’utilisateur après son inscription',
                'LOGIN_AFTER_REGISTRATION_HELP' => 'Identifier immédiatement l’utilisateur après l’inscription. Si l’e-mail d’activation est demandé, l’utilisateur sera connecté immédiatement après l’activation du compte.',
                'SEND_ACTIVATION_EMAIL' => 'Envoyer un e-mail d’activation',
                'SEND_ACTIVATION_EMAIL_HELP' => 'Envoyer un e-mail à l’utilisateur pour l’activation son compte. Lorsque vous utilisez cette fonction, activez l’option `Définir l’utilisateur comme désactivé` afin que l’utilisateur soit désactivé et qu’un e-mail lui soit envoyé pour activer son compte.',
                'SEND_NOTIFICATION_EMAIL' => 'Envoyer un e-mail de notification',
                'SEND_NOTIFICATION_EMAIL_HELP' => 'Informe l’administrateur du site qu’un nouvel utilisateur s’est enregistré. L’e-mail sera envoyé à la personne renseignée dans le champ `À` dans la configuration du plugin e-mail.',
                'SEND_WELCOME_EMAIL' => 'Envoyer un e-mail de bienvenue',
                'SEND_WELCOME_EMAIL_HELP' => 'Envoyer un e-mail à un nouvel utilisateur enregistré.',
                'DEFAULT_VALUES' => 'Valeurs par défaut',
                'DEFAULT_VALUES_HELP' => 'Liste des noms et valeurs associés pour les champs. Ils seront ajoutés au profil utilisateur par défaut (fichier yaml), sans pouvoir être configurables par l’utilisateur. Séparez les différentes valeurs par une virgule, sans espaces entre les valeurs.',
                'ADDITIONAL_PARAM_KEY' => 'Paramètre',
                'ADDITIONAL_PARAM_VALUE' => 'Valeur',
                'REGISTRATION_FIELDS' => 'Champs d’inscription',
                'REGISTRATION_FIELDS_HELP' => 'Ajouter les champs qui seront ajoutés au fichier yaml de l’utilisateur. Les champs non listés ne seront pas ajoutés même s’ils sont présent sur le formulaire d’inscription',
                'REGISTRATION_FIELD_KEY' => 'Nom du champ',
                'REDIRECT_AFTER_LOGIN' => 'Redirection après connexion',
                'REDIRECT_AFTER_LOGIN_HELP' => 'Chemin personnalisé de redirection après la connexion',
                'REDIRECT_AFTER_REGISTRATION' => 'Redirection après inscription',
                'REDIRECT_AFTER_REGISTRATION_HELP' => 'Chemin personnalisé de redirection après l’inscription',
                'OPTIONS' => 'Options',
                'EMAIL_VALIDATION_MESSAGE' => 'Doit-être une adresse e-mail valide',
                'PASSWORD_VALIDATION_MESSAGE' => 'Le mot de passe doit-être composé d’au moins un chiffre, une majuscule et une minuscule, et au moins 8 caractères',
                'TIMEOUT_HELP' => 'Définit le délai d’expiration de la session en secondes lorsque `Se souvenir de moi` est activé et coché par l’utilisateur. Minimum de 604800 ce qui correspond à 1 semaine.',
                'GROUPS_HELP' => 'Liste des groupes auxquels le nouvel utilisateur enregistré fera partie, le cas échéant.',
                'SITE_ACCESS_HELP' => 'Liste des niveaux d’accès au site attribués au nouvel utilisateur enregistré. Exemple : `login` -> `true` ',
                'WELCOME' => 'Bienvenue',
                'REDIRECT_AFTER_ACTIVATION' => 'Redirection après l’activation de l’utilisateur',
                'REDIRECT_AFTER_ACTIVATION_HELP' => 'Utilisé s’il est nécessaire pour l’utilisateur d’activer le compte par e-mail. Une fois activé, ce chemin s’affichera',
                'REGISTRATION_DISABLED' => 'Inscription désactivée',
                'USE_PARENT_ACL_LABEL' => 'Appliquer les règles d’accès parentes',
                'USE_PARENT_ACL_HELP' => 'Utiliser les règles d’accès parentes si aucune règle n’a été définie',
                'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Protéger le média d\'une page par une protection par connexion',
                'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Si activé, les médias d\'une page protégée par connexion sera également protégé par un système de connexion et ne pourra pas être visible à moins d\'être connecté.'
            ]
        ],
        'hr' => [
            'PLUGIN_LOGIN' => [
                'ACCESS_DENIED' => 'Pristup odbijen...',
                'LOGIN_FAILED' => 'Prijava nije uspjela...',
                'BTN_LOGIN' => 'Prijava',
                'BTN_LOGOUT' => 'Odjava',
                'BTN_FORGOT' => 'Zaboravih',
                'BTN_REGISTER' => 'Registriraj',
                'REMEMBER_ME' => 'Zapamti me',
                'BUILTIN_CSS' => 'Koristi ugrađeni CSS',
                'BUILTIN_CSS_HELP' => 'Uključi CSS koji dolazi sa admin pluginom',
                'ROUTE' => 'Putanja prijave',
                'ROUTE_REGISTER' => 'Putanja registracije',
                'USERNAME_NOT_VALID' => 'Korisničko ime bi trebalo biti između 3 i 16 znakova, uključujući mala slova, brojeve, _, i crtice. VELIKA SLOVA, razmaci, i posebni znakovi nisu dopušteni',
                'USERNAME_NOT_AVAILABLE' => 'Korisničko ime %s već postoji, odaberi neko drugo',
                'PASSWORD_NOT_VALID' => 'Lozinka mora sadržavati bar jedan broj i jedno veliko i malo slovo, i bar još 8 ili više znakova',
                'PASSWORDS_DO_NOT_MATCH' => 'Lozinke se ne slažu. Poonovo provjeri da li si unio istu lozinku dva puta',
                'USER_NEEDS_EMAIL_FIELD' => 'Korisnik treba email polje',
                'EMAIL_SENDING_FAILURE' => 'Došlo je do greške pri slanju emaila',
                'ACTIVATION_LINK_EXPIRED' => 'Aktivacijski link je istekao',
                'USER_ACTIVATED_SUCCESSFULLY' => 'Korisnik je uspješno aktiviran',
                'INVALID_REQUEST' => 'Nevaljani zahtjev',
                'USER_REGISTRATION' => 'Registracija korisnika',
                'USER_REGISTRATION_ENABLED_HELP' => 'Omogući registraciju korisnika',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validiraj duplo unesenu lozinku',
                'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validiraj i usporedi dva različčita polja za lozinke, imenovana `lozinka1` i `lozinka2`. Omogući ovo ako imaš dva polja za lozinke u formularu registracije',
                'LOGIN_AFTER_REGISTRATION' => 'Ulogiraj korisnika nakon reegistracije',
                'LOGIN_AFTER_REGISTRATION_HELP' => 'Ulogiraj korisnika odmah nakon registracije. Ako je potrebna email aktivacija, korisnik će biti ulogiran odmah nakon aktiviranja računa',
                'SEND_ACTIVATION_EMAIL' => 'Pošalji aktivacijski email',
                'SEND_ACTIVATION_EMAIL_HELP' => 'Šalje email korisniku da aktivira svoja račun.',
                'SEND_NOTIFICATION_EMAIL' => 'Pošalji email obavijest',
                'SEND_NOTIFICATION_EMAIL_HELP' => 'Obavještava administratora da se novi korisnik registrirao. Email će biti poslan na `To` polje u Email Plugin konfiguraciji',
                'SEND_WELCOME_EMAIL' => 'Pošalji email dobrodošlice',
                'SEND_WELCOME_EMAIL_HELP' => 'Šalje email novoregistriranom korisniku',
                'DEFAULT_VALUES' => 'Određene vrijednosti',
                'DEFAULT_VALUES_HELP' => 'List of field names and values associated, that will be added to the user profile (yaml file) by default, without being configurable by the user. Separate multiple values with a comma, with no spaces between the values',
                'ADDITIONAL_PARAM_KEY' => 'Parametar',
                'ADDITIONAL_PARAM_VALUE' => 'Vrijednost',
                'REGISTRATION_FIELDS' => 'Registracijska polja',
                'REGISTRATION_FIELDS_HELP' => 'Add the fields that will be added to the user yaml file. Fields not listed here will not be added even if present in the registration form',
                'REGISTRATION_FIELD_KEY' => 'Ime polja',
                'OPTIONS' => 'Opcije'
            ]
        ],
        'hu' => [
            'PLUGIN_LOGIN' => [
                'ACCESS_DENIED' => 'Hozzáférés megtagadva...',
                'LOGIN_FAILED' => 'Sikertelen belépés...',
                'LOGIN_SUCCESSFUL' => 'Sikeresen beléptél.',
                'BTN_LOGIN' => 'Belépés',
                'BTN_LOGOUT' => 'Kilépés',
                'BTN_FORGOT' => 'Elfelejtettem',
                'BTN_REGISTER' => 'Regisztráció',
                'REMEMBER_ME' => 'Jegyezz Meg',
                'REMEMBER_ME_HELP' => 'Elhelyezünk egy hosszú lejáratú sütit a böngésződben, hogy belépve maradhass két munkamenet között.',
                'REMEMBER_ME_STOLEN_COOKIE' => 'Valaki a belépési adataid felhasználásával látogatta meg ezt az oldalt! Minden munkamenetet kiléptettünk. Kérlek, jelentkezz be ismét és ellenőrizd az adataidat.',
                'BUILTIN_CSS' => 'Beépített CSS használata',
                'BUILTIN_CSS_HELP' => 'Az admin plugin által biztosított CSS beillesztése',
                'ROUTE' => 'Belépés útvonala',
                'ROUTE_HELP' => 'Egyedi útvonal egy egyedi belépő oldalhoz, melyet az aktuális téma biztosít',
                'ROUTE_REGISTER' => 'Regisztráció útvonala',
                'ROUTE_REGISTER_HELP' => 'A regisztrációs oldal elérési útja. Akkor állítsd be, ha a beépített regisztrációs oldalt szeretnéd használni',
                'USERNAME_NOT_VALID' => 'A felhasználónév 3-16 karakter hosszú legyen, tartalmazhat kisbetűket, számokat, aláhúzást és kötőjelet. Nagybetűk, szóköz és speciális karakterek használata nem megengedett',
                'USERNAME_NOT_AVAILABLE' => '%s nevű felhasználó már létezik, kérlek válassz más felhasználónevet',
                'PASSWORD_NOT_VALID' => 'A jelszónak tartalmaznia kell legalább egy számot, egy kisbetűt és egy nagybetűt, valamint legalább 8 karakter hosszú kell, hogy legyen',
                'PASSWORDS_DO_NOT_MATCH' => 'A két jelszó nem egyezik meg. Győzödj meg róla, hogy azonos legyen a kettő'
            ]
        ],
        'ro' => [
            'PLUGIN_LOGIN' => [
                'USERNAME' => 'Nume utilizator',
                'PASSWORD' => 'Parolă',
                'ACCESS_DENIED' => 'Acces refuzat...',
                'LOGIN_FAILED' => 'Logare eșuată...',
                'LOGIN_SUCCESSFUL' => 'Ați fost logat cu succes.',
                'BTN_LOGIN' => 'Logare',
                'BTN_LOGOUT' => 'Ieșire din cont ',
                'BTN_FORGOT' => 'Am uitat',
                'BTN_REGISTER' => 'Înregistrare',
                'BTN_RESET' => 'Resetează parola',
                'BTN_SEND_INSTRUCTIONS' => 'Trimite instrucțiuni pentru resetare',
                'RESET_LINK_EXPIRED' => 'Link-ul pentru resetarea parolei a expirat, vă rugăm încercați din nou ',
                'RESET_PASSWORD_RESET' => 'Parola a fost modificată',
                'RESET_INVALID_LINK' => 'Link-ul pentru resetare este invalid, Invalid reset link used, vă rugăm încercați din nou ',
                'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Instrucțiunile pentru resetarea parolei au fst trimise pe email',
                'FORGOT_FAILED_TO_EMAIL' => 'Instrucțiunile nu au putut fi trimise pe email, vă rugăm încercați mai târziu ',
                'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Parola nu poate fi resetată pentru %s, nu este setată nici o adresă de email',
                'FORGOT_USERNAME_DOES_NOT_EXIST' => 'Utilizatorul cu numele <b>%s</b> nu există',
                'FORGOT_EMAIL_NOT_CONFIGURED' => 'Parola nu poate fi resetată. Acest site nu este configurat pentru a trimite email-uri.',
                'FORGOT_EMAIL_SUBJECT' => '%s Cerere de resetare a parolei',
                'FORGOT_EMAIL_BODY' => '<h1>Resetare parolă</h1><p> Dragă %1$s,</p><p>O cerere de resetare a parolei a fost făcută în data de <b>%4$s</b>.</p><p><br /><a href="%2$s" class="btn-primary">Apasă aici pentru a reseta parola</a><br /><br /></p><p>Alternativ, copiază URL de mai jos în bara de adrese a browser-ului favorit:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Cu respect,<br /><br />%3$s</p>',
                'SESSION' => '&ldquo;Ține-mă minte&rdquo;-Sesiune',
                'REMEMBER_ME' => 'Ține-mă minte',
                'REMEMBER_ME_HELP' => 'Setează o cookie în browserul Dvs. ce permite menținerea datelor de logare între sesiuni.',
                'REMEMBER_ME_STOLEN_COOKIE' => 'Altcineva a folosit darele Dvs de logare pentru a accesa această pagină! Toate sesiunile au fost deconectate. Vă rugăm să vă logați cu datele Dvs. și să verificați toate detaliile. ',
                'BUILTIN_CSS' => 'Folosește CSS-ul din modul',
                'BUILTIN_CSS_HELP' => 'Include CSS-ul furnizat de către modulul Admin',
                'ROUTE' => 'Calea pentru logare',
                'ROUTE_HELP' => 'O rută personalizată către pagina de logare pe care o furnizează tema activă ',
                'ROUTE_REGISTER' => 'Calea pentru înregistrare  ',
                'ROUTE_REGISTER_HELP' => 'Ruta către pagina de înregistrare. Setați această rută dacă doriți folosirea paginei implicite pentru înregistrare. Lăsați gol dacă folosiți o pagină personalizată pentru înregistrare.',
                'USERNAME_NOT_VALID' => 'Numele de utilizator trebuie să fie între 3-16 caractere, incluzând litere mici, numere, linii de subliniere și cratime. Literele de tipar, spațiile și caracterele speciale nu sunt permise. ',
                'USERNAME_NOT_AVAILABLE' => 'Utilizatorul  %s există deja, vă rugăm alegeți un alt nume de utilizator ',
                'PASSWORD_NOT_VALID' => ' Parola trebuie să conțină cel puțin 1 număr și o literă de tipar și o literă mică; și să aibă minim 8 caractere',
                'PASSWORDS_DO_NOT_MATCH' => ' Parolele nu sunt identice. Vă rugăm verificați că ași scris aceeiași parolă de două ori.',
                'USER_NEEDS_EMAIL_FIELD' => 'Utilizatorul trebuie să aibă adresa de email completată',
                'EMAIL_SENDING_FAILURE' => 'A apărut o eroare la trimirea email-ului',
                'ACTIVATION_EMAIL_SUBJECT' => 'Activați-vă contrul pentru %s',
                'ACTIVATION_EMAIL_BODY' => 'Salut %s, apasă  <a href="%s">aici</a> pentru a-ți activa contul de pe %s',
                'WELCOME_EMAIL_SUBJECT' => 'Bine ați venit pe %s',
                'WELCOME_EMAIL_BODY' => 'Salut %s, bine ai venit la %s!',
                'NOTIFICATION_EMAIL_SUBJECT' => 'Utilizator nou pe %s',
                'NOTIFICATION_EMAIL_BODY' => 'Salut, un nou utilizator s-a înregistrat pe  %s. Nume de utilizator: %s, adresă de email: %s',
                'ACTIVATION_LINK_EXPIRED' => 'Link-ul pentru activare este expirat',
                'USER_ACTIVATED_SUCCESSFULLY' => 'Utilizator activat cu succes',
                'INVALID_REQUEST' => 'Cerere invalidă ',
                'USER_REGISTRATION' => 'Înregistrare utilizator ',
                'USER_REGISTRATION_ENABLED_HELP' => 'Activați înregistrarea utilizatorilor',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validați parola introdusă de două ori',
                'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validați și comparați cele două câmpuri pentru parolă cu numele `password1` și `password2`. Activați această opțiune dacă există două câmpuri pentru parolă în formularul de înregistrare.',
                'SET_USER_DISABLED' => 'Setați utilizatorul dezactivat',
                'SET_USER_DISABLED_HELP' => 'Cel mai bine să fie folosit împreună cu email-ul pentru activare. Adaugă utilizatorul în Grav dar îl setează ca dezactivat',
                'LOGIN_AFTER_REGISTRATION' => 'Loghează utilizatorul după înregistrare',
                'LOGIN_AFTER_REGISTRATION_HELP' => 'Imediat după înregistrare loghează utilizatorul în cont. Dacă este necesară activarea prin email, utilizatorul va fi logat imediat după activarea contului.',
                'SEND_ACTIVATION_EMAIL' => 'Trimite email-ul pentru activare',
                'SEND_ACTIVATION_EMAIL_HELP' => 'Trimite un email către utilizatorul nou înregistrat pentru activarea contului. Activați opțiunea `Setați utilizatorul dezactivat` când folosiți această opțiune pentru a seta utilizatorul dezactivat și pentru a trimite un email automat pentru activarea contului. ',
                'SEND_NOTIFICATION_EMAIL' => 'Trimite email cu notificare',
                'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifică adminstratorul site-ului când un utilizator nou s-a înregistrat. Email-ul va di trimis către adresa `Către` din configurarea modului de Email',
                'SEND_WELCOME_EMAIL' => 'Trimite email de bun venit',
                'SEND_WELCOME_EMAIL_HELP' => 'Trimite un email către utilizatorul nou înregistrat.',
                'DEFAULT_VALUES' => ' Valori implicite',
                'DEFAULT_VALUES_HELP' => 'Listă de câmpuri și valorile asociate acestora ce vor fi adăugate profilului utilizatorului (în fișierul yaml) în mod implicit fără a putea fi configurabile de către utilizator. Separați valorile multiple cu virgulă, fără spații între valori.',
                'ADDITIONAL_PARAM_KEY' => 'Parametru',
                'ADDITIONAL_PARAM_VALUE' => 'Valoare',
                'REGISTRATION_FIELDS' => 'Câmpuri pentru înregistrare',
                'REGISTRATION_FIELDS_HELP' => 'Adaugă câmpurile ce vor fi adăugate fișierului yaml al utilizatorului. Câmpurile care nu sunt listate aici nu vor fi adăugate chiar dacă sunt prezente în formularul de înregistrare.',
                'REGISTRATION_FIELD_KEY' => ' Numele câmpului',
                'REDIRECT_AFTER_LOGIN' => 'Redirecționează după logare',
                'REDIRECT_AFTER_LOGIN_HELP' => 'Ruta personalizată pentru redirecționare după logare',
                'REDIRECT_AFTER_REGISTRATION' => 'Redirecționează după înregistrare',
                'REDIRECT_AFTER_REGISTRATION_HELP' => 'Ruta personalizată pentru redirecționare după înregistrare',
                'OPTIONS' => 'Opțiuni',
                'EMAIL_VALIDATION_MESSAGE' => 'Trebuie să fie o adresă de email validă',
                'PASSWORD_VALIDATION_MESSAGE' => 'Parola trebuie să conțină cel puțin un număr și o literă de tipar și să aibă cel puțin 8 caractere',
                'TIMEOUT_HELP' => 'Setează pauza pentru sesiune când este activat \'Ține-mă minte\' de către utilizator. Minimul este de 604800 care înseamnă 1 săptămână.',
                'GROUPS_HELP' => 'Lista grupurilor din care utilizatorii nou înregistrați vor face parte, dacă este necesar',
                'SITE_ACCESS_HELP' => 'Lista cu niveluri de acces la care utilizatorul nou înregistrat are acces. De eg: `login` -> `true` ',
                'WELCOME' => 'Bine ați venit',
                'REDIRECT_AFTER_ACTIVATION' => 'Redirecționează după activarea utilizatorului',
                'REDIRECT_AFTER_ACTIVATION_HELP' => 'Folosită dacă utilizatorul trebuie să-și activeze contul prin email.  Odată activat contul va fi folosită această rută.',
                'REGISTRATION_DISABLED' => ' Dezactivează înregistrarea ',
                'USE_PARENT_ACL_LABEL' => 'Folosește regulile de acces ale părintelui',
                'USE_PARENT_ACL_HELP' => 'Verifică regulie de acces ale părintelui dacă nu sunt specificate alte reguli de acces',
                'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => ' Protejează media ce aparține paginii de logare ',
                'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Dacă este activată, media ce aparține unei pagini de logare este protejată și nu poate fi accesată decât după logare.'
            ]
        ]
    ]
];
