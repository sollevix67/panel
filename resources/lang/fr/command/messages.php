<?php

return [
    'key' => [
        'warning' => 'Il semble que vous ayez déjà configuré une clé de chiffrement d\'application. Poursuivre ce processus en écrasant cette clé et en endommageant les données de toutes les données cryptées existantes. NE CONTINUEZ PAS À MOINS DE SAVOIR CE QUE VOUS FAITES.',
        'confirm' => 'Je comprends les conséquences de l\'exécution de cette commande et j\'accepte toute responsabilité en cas de perte de données cryptées.',
        'final_confirm' => 'Êtes-vous sûr de vouloir continuer? La modification de la clé de cryptage de l\'application CAUSE UNE PERTE DE DONNÉES.',
    ],
    'location' => [
        'no_location_found' => 'Impossible de trouver un enregistrement correspondant au code court fourni.',
        'ask_short' => 'Code abrégé de l\'emplacement',
        'ask_long' => 'Description de l\'emplacement',
        'created' => 'Un nouvel emplacement (:name) a été créé avec succès avec l\'identifiant :id.',
        'deleted' => 'L\'emplacement demandé a bien été supprimé.',
    ],
    'user' => [
        'search_users' => 'Entrez un nom d\'utilisateur, un identifiant d\'utilisateur ou une adresse e-mail',
        'select_search_user' => 'ID de l\'utilisateur à supprimer (entrez \'0\' pour effectuer une nouvelle recherche)',
        'deleted' => 'L\'utilisateur a bien été supprimé du panneau.',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cet utilisateur du panneau?',
        'no_users_found' => 'Aucun utilisateur n\'a été trouvé pour le terme de recherche fourni.',
        'multiple_found' => 'Plusieurs comptes ont été trouvés pour l\'utilisateur fourni, impossible de supprimer un utilisateur en raison de l\'indicateur --no-interaction.',
        'ask_admin' => 'Cet utilisateur est-il un administrateur?',
        'ask_email' => 'Adresse e-mail',
        'ask_username' => 'Pseudo',
        'ask_name_first' => 'Prénom',
        'ask_name_last' => 'Nom',
        'ask_password' => 'Mot de passe',
        'ask_password_tip' => 'Si vous souhaitez créer un compte avec un mot de passe aléatoire envoyé par e-mail à l\'utilisateur, réexécutez cette commande (CTRL + C) et passez le paramètre `--no-password`.',
        'ask_password_help' => 'Les mots de passe doivent comporter au moins 8 caractères et contenir au moins une lettre majuscule et un chiffre.',
        '2fa_help_text' => [
            'Cette commande désactivera l\'authentification à 2 facteurs pour le compte d\'un utilisateur si elle est activée. Cela ne doit être utilisé comme commande de récupération de compte que si l\'utilisateur est bloqué hors de son compte.',
            'Si ce n\'est pas ce que vous vouliez faire, faites un CTRL + C pour quitter ce processus.',
        ],
        '2fa_disabled' => 'L\'authentification à 2 facteurs a été désactivée pour :e-mail.',
    ],
    'schedule' => [
        'output_line' => 'Distribution du travail pour la première tâche en `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Suppression du fichier de sauvegarde du service :file.',
    ],
    'server' => [
        'rebuild_failed' => 'La demande de reconstruction pour ":name" (#:id) sur le nœud ":node" a échoué avec l\'erreur: :message',
        'reinstall' => [
            'failed' => 'La demande de réinstallation pour ":name" (#:id) sur le nœud ":node" a échoué avec l\'erreur: :message',
            'confirm' => 'Vous êtes sur le point de réinstaller sur un groupe de serveurs. Souhaitez-vous continuer?',
        ],
        'power' => [
            'confirm' => 'Vous êtes sur le point d\'exécuter l\'action :action sur :count serveur(s). Souhaitez-vous continuer?',
            'action_failed' => 'La demande d\'action d\'alimentation pour ":nom" (#:id) sur le nœud ":nœud" a échoué avec l\'erreur: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Hôte SMTP (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'Port SMTP',
            'ask_smtp_username' => 'non d\'utilisateur SMTP (e.g. nom@domaine.com)',
            'ask_smtp_password' => 'mot de passe SMTP',
            'ask_mailgun_domain' => 'Domaine Mailgun',
            'ask_mailgun_secret' => 'Clé secrète Mailgun',
            'ask_mandrill_secret' => 'Clé secrète Mandrill',
            'ask_postmark_username' => 'Clé APT Postmark',
            'ask_driver' => 'Quel pilote doit être utilisé pour envoyer des e-mails?',
            'ask_mail_from' => 'Les adresses e-mail doivent provenir de',
            'ask_mail_name' => 'Nom à partir duquel les e-mails doivent apparaître',
            'ask_encryption' => 'Méthode de chiffrement à utiliser',
        ],
        'database' => [
            'host_warning' => 'Il est fortement recommandé de ne pas utiliser "localhost" comme nom d\'hôte de votre base de données car nous avons vu de fréquents problèmes de connexion socket. Si vous souhaitez utiliser une connexion locale, vous devez utiliser "127.0.0.1".',
            'host' => 'Adresse ou nom d\'hôte du serveur de base de données',
            'port' => 'Port du serveur de base de données',
            'database' => 'Nom de la base de données',
            'username_warning' => 'Utiliser le compte "root" pour les connexions MySQL n\'est pas seulement très mal vu, il n\'est pas non plus autorisé par cette application. Vous devrez avoir créé un nouvel utilisateur MySQL pour cette application.',
            'username' => 'Utilisateur de la base de données',
            'password_defined' => 'Il semble que vous ayez déjà défini un mot de passe de connexion MySQL, souhaitez-vous le modifier?',
            'password' => 'Mot de passe de la base de donnée',
            'connection_error' => 'Impossible de se connecter au serveur MySQL à l\'aide des informations d\'identification fournies. L\'erreur renvoyée était ":error".',
            'creds_not_saved' => 'Vos informations de connexion n\'ont PAS été enregistrées. Vous devrez fournir des informations de connexion valides avant de continuer.',
            'try_again' => 'Revenir en arrière et réessayer?',
        ],
        'app' => [
            'settings' => 'Activer l\'éditeur de paramètres basé sur l\'interface utilisateur?',
            'author' => 'Email de l\'auteur de l\'oeuf',
            'author_help' => 'Indiquez l\'adresse e-mail à partir de laquelle les œufs exportés par ce panel doivent provenir. Il doit s\'agir d\'une adresse e-mail valide.',
            'app_url_help' => 'L\'URL de l\'application DOIT commencer par https:// ou http:// selon que vous utilisez SSL ou non. Si vous n\'incluez pas le schéma, vos e-mails et autres contenus seront liés au mauvais emplacement.',
            'app_url' => 'Application URL',
            'timezone_help' => 'Le fuseau horaire doit correspondre à l\'un des fuseaux horaires pris en charge par PHP. En cas de doute, veuillez consulter http://php.net/manual/en/timezones.php.',
            'timezone' => 'Fuseau horaire de l\'application',
            'cache_driver' => 'Pilote du cache',
            'session_driver' => 'Pilote de session',
            'queue_driver' => 'Pilote de file d\'attente',
            'using_redis' => 'Vous avez sélectionné le pilote Redis pour une ou plusieurs options, veuillez fournir des informations de connexion valides ci-dessous. Dans la plupart des cas, vous pouvez utiliser les paramètres par défaut fournis, sauf si vous avez modifié votre configuration.',
            'redis_host' => 'Hôte du serveur Redis',
            'redis_password' => 'Mot de passe du serveur Redis',
            'redis_pass_help' => 'Par défaut, une instance de serveur Redis n\'a pas de mot de passe car elle s\'exécute localement et n\'est pas accessible depuis l\'extérieur. Si tel est le cas, appuyez simplement sur Entrée sans saisir de valeur.',
            'redis_port' => 'Port du serveur Redis',
            'redis_pass_defined' => 'Il semble qu\'un mot de passe soit déjà défini pour Redis, souhaitez-vous le changer?',
        ],
    ],
];
