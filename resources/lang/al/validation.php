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

    'accepted' => ':attribute duhet te pranohet.',
    'active_url' => ':attribute nuk është nje adresë web e vlefshme.',
    'after' => ':attribute duhet te jete nje datë me e madhe se :date.',
    'after_or_equal' => ':attribute duhet te jete nje datë me e madhe ose e barabartë me :date.',
    'alpha' => ':attribute mund te permbaj vetem shkronja.',
    'alpha_dash' => ':attribute mund te permbaj vetem shkronja, numra dhe viza (posht ose ne mes).',
    'alpha_num' => ':attribute mund te permbaj vetem shkronja dhe numra.',
    'array' => ':attribute duhet te jete nje grup vlerash.',
    'before' => ':attribute duhet te jete nje datë me e vogel se :date.',
    'before_or_equal' => ':attribute duhet te jete nje datë me e vogel ose e barabartë me :date.',
    'between' => [
        'numeric' => ':attribute duhet te jete midis :min - :max.',
        'file' => ':attribute duhet te jete midis :min - :max kilobyte.',
        'string' => ':attribute duhet te jete midis :min - :max karaktere.',
        'array' => ':attribute duhet te ketë midis :min - :max elemente.',
    ],
    'boolean' => 'Vlera :attribute duhet te jete PO ose JO.',
    'confirmed' => 'Vlera è konfirmimit per :attribute nuk perputhet.',
    'date' => ':attribute nuk eshtë nje datë e vlefshme.',
    'date_format' => ':attribute nuk perputhet me formatin :format.',
    'different' => ':attribute dhe :other duhen te jenë te ndryshem.',
    'digits' => ':attribute duhet te jete me :digits shifra.',
    'digits_between' => ':attribute duhet te jete midis :min dhe :max shifra.',
    'dimensions' => "Permasat e imazhit :attribute nuk janë te vlefshme.",
    'distinct' => ':attribute permban nje vler te dyfishte.',
    'email' => ':attribute nuk është nje email i vlefshem.',
    'exists' => ':attribute i seleksionuar nuk është i vlefshem.',
    'file' => ':attribute duhet te jete nje file.',
    'filled' => 'Fusha :attribute duhet te permbaj nje vlerë.',
    'image' => ":attribute duhet te jete nje imazh.",
    'in' => ':attribute i seleksionuar nuk është i vlefshem.',
    'in_array' => 'Vlera e fushes :attribute nuk ekziston ne :other.',
    'integer' => ':attribute duhet te jete nje numer i plotë.',
    'ip' => ':attribute duhet te jete nje adresë IP e vlefshme.',
    'ipv4' => ':attribute duhet te jete nje adresë IPv4 e vlefshme.',
    'ipv6' => ':attribute duhet te jete nje adresë IPv6 e vlefshme.',
    'json' => ':attribute duhet te jete nje text JSON i vlefshem.',
    'max' => [
        'numeric' => ':attribute nuk mund te jete me e madhe se :max.',
        'file' => ':attribute nuk mund te jete me e madhe se :max kilobyte.',
        'string' => ':attribute nuk mund te permbaj me shume se :max karaktere.',
        'array' => ':attribute nuk mund te permbaj me shume se :max elemente.',
    ],
    'mimes' => ':attribute duhet te jete e tipit: :values.',
    'mimetypes' => ':attribute duhet te jenë te tipit: :values.',
    'min' => [
        'numeric' => ':attribute nuk mund te jete me e vogel se :min.',
        'file' => ':attribute nuk mund te jete me e vogel se :min kilobyte.',
        'string' => ':attribute duhet te permbaj minimumi :min karakterë.',
        'array' => ':attribute duhet te permbaj minimumi :min elemente.',
    ],
    'not_in' => 'Vlera e zgjedhur per :attribute nuk eshtë e vlefshme.',
    'not_regex' => 'Formati per :attribute është i pavlefshem.',
    'numeric' => ':attribute duhet te jete nje numer.',
    'present' => ':attribute duhet te jete e perfshirë.',
    'regex' => 'Formati per fushen :attribute nuk është i vlefshem.',
    'required' => ':attribute është i nevojshëm.',
    'required_if' => ':attribute është i nevojshëm kur :other është :value.',
    'required_unless' => ':attribute është i nevojshëm përvec se kur :other është :values.',
    'required_with' => ':attribute është i nevojshëm kur :values është e perfshirë.',
    'required_with_all' => ':attribute është i nevojshëm kur :values janë te perfshira.',
    'required_without' => ':attribute është i nevojshëm kur :values nuk është e perfshirë.',
    'required_without_all' => ':attribute është i nevojshëm kur asnje nga :values janë te perfshira.',
    'same' => ':attribute dhe :other duhet te perputhen.',
    'size' => [
        'numeric' => ':attribute duhet te jete :size.',
        'file' => ':attribute duhet te jete :size kilobyte.',
        'string' => ':attribute duhet te permbaj :size karaktere.',
        'array' => ':attribute duhet te permbaj :size elemente.',
    ],
    'string' => ':attribute duhet te jete text.',
    'timezone' => ':attribute duhet te jete nje zone kohore e vlefshme.',
    'unique' => ':attribute është perdorur nje herë perpara.',
    'uploaded' => ':attribute nuk është karikuar.',
    'url' => 'Formati i :attribute nuk është i vlefshem.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

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

    'attributes' => [
        'name' => 'nome',
        'username' => 'nome utente',
        'first_name' => 'nome',
        'last_name' => 'cognome',
        'password_confirmation' => 'conferma password',
        'city' => 'città',
        'country' => 'paese',
        'address' => 'indirizzo',
        'phone' => 'telefono',
        'mobile' => 'cellulare',
        'age' => 'età',
        'sex' => 'sesso',
        'gender' => 'genere',
        'day' => 'giorno',
        'month' => 'mese',
        'year' => 'anno',
        'hour' => 'ora',
        'minute' => 'minuto',
        'second' => 'secondo',
        'title' => 'titolo',
        'content' => 'contenuto',
        'description' => 'descrizione',
        'excerpt' => 'estratto',
        'date' => 'data',
        'time' => 'ora',
        'available' => 'disponibile',
        'size' => 'dimensione',
    ],
];
