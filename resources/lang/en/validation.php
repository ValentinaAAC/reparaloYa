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

    'accepted' => ' :attribute debe ser aceptado.',
    'active_url' => ' :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha despues de :date.',
    'after_or_equal' => ' :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ' :attribute solo puede contener letras.',
    'alpha_dash' => ' :attribute solo puede contener letras, números, guiones y guines bajos.',
    'alpha_num' => ' :attribute sólo puede contener letras y números.',
    'array' => ' :attribute debe ser un array.',
    'before' => ' :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => ' :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => ' :attribute debe estar entre :min and :max.',
        'file' => ' :attribute debe estar entre :min y :max kilobytes.',
        'string' => ' :attribute debe estar entre los caracteres :min y :max .',
        'array' => ' :attribute debe tener entre los elementos :min y :max items.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => ' :attribute no es una fecha válida.',
    'date_equals' => ' :attribute debe ser una fecha igual a :date.',
    'date_format' => ' :attribute no coincide con el formato :format.',
    'different' => ' :attribute y :other deben ser diferentes.',
    'digits' => ' :attribute debe ser :digits digitos.',
    'digits_between' => ' :attribute debe estar entre los dígitos :min y :max .',
    'dimensions' => ' :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => ' :attribute debe ser una dirección de correo válida.',
    'ends_with' => ' :attribute debe terminar con uno de los siguientes valores: :values.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => ' :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => ' :attribute debe ser mayor que :value.',
        'file' => ' :attribute debe ser mayor a :value kilobytes.',
        'string' => ' :attribute debe ser mayor que a :value caracteres.',
        'array' => ' :attribute debe tener más elementos que :value .',
    ],
    'gte' => [
        'numeric' => ' :attribute debe ser mayor o igual a :value.',
        'file' => ' :attribute debe ser mayor o igual a :value kilobytes.',
        'string' => ' :attribute debe ser mayor o igual a :value caracteres.',
        'array' => ' :attribute debe tener :value elementos o más.',
    ],
    'image' => ' :attribute debe ser una imagen.',
    'in' => 'El atributo seleccionado :attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => ' :attribute debe ser un entero.',
    'ip' => ' :attribute debe ser una IP válida.',
    'ipv4' => ' :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => ' :attribute debe ser una dirección IPv6 válida.',
    'json' => ' :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => ' :attribute debe ser menor a :value.',
        'file' => ' :attribute debe ser menor a :value kilobytes.',
        'string' => ' :attribute debe ser menor a :value caracteres.',
        'array' => ' :attribute debe tener elementos menores a :value .',
    ],
    'lte' => [
        'numeric' => ' :attribute debe ser menor o igual a :value.',
        'file' => ' :attribute debe ser menor o igual a :value kilobytes.',
        'string' => ' :attribute debe ser menor o igual a :value caracteres.',
        'array' => ' :attribute no debe tener más de :value elementos.',
    ],
    'max' => [
        'numeric' => ' :attribute no puede ser mayor a :max.',
        'file' => ' :attribute no puede ser mayor a :max kilobytes.',
        'string' => ' :attribute no puede ser mayor a :max caracteres.',
        'array' => ' :attribute no puede ser mayor a :max elementos.',
    ],
    'mimes' => ' :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => ' :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => ' :attribute debe ser al menos :min.',
        'file' => ' :attribute debe ser al menos :min kilobytes.',
        'string' => ' :attribute debe ser al menos :min caracteres.',
        'array' => ' :attribute debe ser al menos :min elementos.',
    ],
    'not_in' => ' :attribute seleccionado es inválido.',
    'not_regex' => 'Formato :attribute es inválido.',
    'numeric' => ' :attribute debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'Campo :attribute debe estar presente.',
    'regex' => 'Formato :attribute es inválido.',
    'required' => 'Campo :attribute es necesario.',
    'required_if' => 'Campo :attribute es necesario cuando :other es :value.',
    'required_unless' => 'Campo :attribute es necesario a menos que :other este en :values.',
    'required_with' => 'Campo :attribute es necesario cuando :values está presente.',
    'required_with_all' => 'Campo :attribute es necesario cuando :values está presente.',
    'required_without' => 'Campo :attribute es necesario cuando :values no está presente.',
    'required_without_all' => 'Campo :attribute es necesario cuando ninguno de los valores :values está presente.',
    'same' => ' :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => ' :attribute debe ser de :size.',
        'file' => ' :attribute debe ser de :size kilobytes.',
        'string' => ' :attribute debe ser de :size caracteres.',
        'array' => ' :attribute debe contener :size elementos.',
    ],
    'starts_with' => ' :attribute debe comenzar con uno de los siguientes valores: :values.',
    'string' => ' :attribute debe ser un string.',
    'timezone' => ' :attribute debe ser una zona válida.',
    'unique' => ' :attribute ya ha sido tomado.',
    'uploaded' => ' :attribute falló al subir.',
    'url' => 'Formato :attribute es inválido.',
    'uuid' => ' :attribute debe ser un UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
