<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Le nom de domaine complet ou l\'adresse IP fourni ne se résout pas en une adresse IP valide.',
        'fqdn_required_for_ssl' => 'Un nom de domaine complet qui se résout en une adresse IP publique est requis pour utiliser SSL pour ce nœud.',
    ],
    'notices' => [
        'allocations_added' => 'Les allocations ont bien été ajoutées à ce nœud.',
        'node_deleted' => 'Le nœud a été supprimé du panneau avec succès.',
        'location_required' => 'Vous devez avoir au moins un emplacement configuré avant de pouvoir ajouter un nœud à ce panneau.',
        'node_created' => 'Nouveau nœud créé avec succès. Vous pouvez configurer automatiquement le démon sur cette machine en visitant l\'onglet \'Configuration \'. <strong> Avant de pouvoir ajouter des serveurs, vous devez d\'abord attribuer au moins une adresse IP et un port.</strong>',
        'node_updated' => 'Les informations sur le nœud ont été mises à jour. Si des paramètres du démon ont été modifiés, vous devrez le redémarrer pour que ces modifications prennent effet.',
        'unallocated_deleted' => 'Suppression de tous les ports non alloués pour <code>:ip</code>.',
    ],
];
