<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Création du nouveau nid, :name, réussi.',
        'deleted' => 'Suppression réussie du nid sélectionné.',
        'updated' => 'Mise à jour de la configuration du nid réussie.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importation réussie de cet œuf et de ses variables associées',
            'updated_via_import' => 'Cet œuf a été mis à jour à l\'aide du fichier fourni',
            'deleted' => 'Suppression réussie de l\'œuf demandé du panel.',
            'updated' => 'La configuration de l\'œuf a été mise à jour avec succès.',
            'script_updated' => 'Le script d\'installation de l\'œuf a été mis à jour et s\'exécutera à chaque fois que des serveurs seront installés.',
            'egg_created' => 'Un nouvel œuf a été pondu avec succès. Vous devrez redémarrer tous les démons en cours d\'exécution pour appliquer ce nouvel œuf.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'La variable ": variable" a été supprimée et ne sera plus disponible pour les serveurs une fois reconstruits.',
            'variable_updated' => 'La variable ": variable" a été mise à jour. Vous devrez reconstruire tous les serveurs utilisant cette variable pour appliquer les modifications.',
            'variable_created' => 'Une nouvelle variable a été créée et affectée avec succès à cet œuf.',
        ],
    ],
];
