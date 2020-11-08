<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute doit être accepté.',
    'active_url' => ':attribute n\'est pas une URL valide.',
    'after' => ':attribute doit être une date après :date.',
    'after_or_equal' => ':attribute doit être une date après ou égal à :date.',
    'alpha' => ':attribute ne doit contenir que des lettres.',
    'alpha_dash' => ':attribute ne doit contenir que des chiffres, des lettres et des tirets.',
    'alpha_num' => ':attribute ne doit contenir que des chiffres et des lettres.',
    'array' => ':attribute doit être un ordre.',
    'before' => ':attribute doit être une date avant :date.',
    'before_or_equal' => ':attribute doit être une date avant ou égal à :date.',
    'between' => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file' => ':attribute doit être entre :min et :max Ko.',
        'string' => ':attribute doit être entre :min et :max caractères.',
        'array' => ':attribute doit être entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être "true" ou "false".',
    'confirmed' => 'La confirmation de :attribute ne correspond pas.',
    'date' => ':attribute n\'est pas une date valide.',
    'date_format' => ':attribute ne correspond pas au format :format.',
    'different' => ':attribute et :other doivent être différent.',
    'digits' => ':attribute doit être de :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'dimensions' => ':attribute a une dimension d\'image incorrect.',
    'distinct' => 'Le champ :attribute a une valeur dupliquée.',
    'email' => ':attribute doit avoir une adresse e-mail valide.',
    'exists' => ':attribute est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => 'Le champ :attribute est requis.',
    'image' => ':attribute doit être une image.',
    'in' => ':attribute sélectionné est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'json' => ':attribute doit être une chaîne JSON valide.',
    'max' => [
        'numeric' => ':attribute ne doit pas être plus grand que :max.',
        'file' => ':attribute ne doit pas être plus grand que :max Ko.',
        'string' => ':attribute ne doit pas être plus grand que :max caractères.',
        'array' => ':attribute ne doit pas avoir plus de :max éléments.',
    ],
    'mimes' => ':attribute doit être du type: :values.',
    'mimetypes' => ':attribute doit être un fichier du type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins :min.',
        'file' => ':attribute doit être au moins de :min Ko.',
        'string' => ':attribute doit être au mois de :min caractères.',
        'array' => ':attribute doit être au moins de :min éléments.',
    ],
    'not_in' => ':attribute sélectionné est invalide.',
    'numeric' => ':attribute doit être un nombre.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => 'Le champ :attribute est requis.',
    'required_if' => 'Le champ :attribute est requis quand :other est :value.',
    'required_unless' => 'The champ :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est requis si :values est present.',
    'required_with_all' => 'Le champ :attribute est requis si :values est présent.',
    'required_without' => 'Le champ :attribute est requis si :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis si aucun :values n\'est présent.',
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être de :size Ko.',
        'string' => ':attribute doit être de :size caractères.',
        'array' => ':attribute doit contenir :size éléments.',
    ],
    'string' => ':attribute doit être une chaîne de caractères.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute a déjà été pris.',
    'uploaded' => ':attribute échec du téléversement.',
    'url' => 'Le format de :attribute est invalide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => 'variable :env',
        'invalid_password' => 'Le mot de passe fourni n\'est pas valide pour ce compte.',
    ],
];
