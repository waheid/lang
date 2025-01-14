<?php

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

return [
    'accepted'             => 'Гэта поле павінна быць прынята.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Гэта няправільны URL-адрас.',
    'after'                => 'Гэта павінна быць дата пасля :date.',
    'after_or_equal'       => 'Гэта павінна быць дата пасля або роўная :date.',
    'alpha'                => 'Гэта поле можа ўтрымліваць толькі літары.',
    'alpha_dash'           => 'Гэта поле можа ўтрымліваць толькі літары, лічбы, працяжнік і падкрэслення.',
    'alpha_num'            => 'Гэта поле можа ўтрымліваць толькі літары і лічбы.',
    'array'                => 'Гэта поле павінна быць масівам.',
    'attached'             => 'Гэта поле ўжо прымацавана.',
    'before'               => 'Гэта павінна быць дата да :date.',
    'before_or_equal'      => 'Гэта павінна быць дата да або роўная :date.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Гэта поле павінна быць сапраўдным або ілжывым.',
    'confirmed'            => 'Пацверджанне не супадае.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Гэта не сапраўдная дата.',
    'date_equals'          => 'Гэта павінна быць дата, роўная :date годзе.',
    'date_format'          => 'Гэта не адпавядае фармату :format.',
    'different'            => 'Гэта значэнне павінна адрознівацца ад :other.',
    'digits'               => 'Гэта павінна быць :digits лічбаў.',
    'digits_between'       => 'Гэта павінна быць паміж :min і :max лічбамі.',
    'dimensions'           => 'Гэта выява мае недапушчальныя памеры.',
    'distinct'             => 'Гэта поле мае паўтаральнае значэнне.',
    'email'                => 'Гэта павінен быць сапраўдны адрас электроннай пошты.',
    'ends_with'            => 'Гэта павінна заканчвацца адным з наступных пунктаў: :values.',
    'exists'               => 'Наадварот значэнне з\'яўляецца недапушчальным.',
    'file'                 => 'Змесціва павінна быць файлам.',
    'filled'               => 'Гэта поле павінна мець значэнне.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'Гэта павінна быць малюнак.',
    'in'                   => 'Наадварот значэнне з\'яўляецца недапушчальным.',
    'in_array'             => 'Гэта значэнне не існуе ў :other.',
    'integer'              => 'Гэта павінна быць цэлы лік.',
    'ip'                   => 'Гэта павінен быць сапраўдны IP-адрас.',
    'ipv4'                 => 'Гэта павінен быць сапраўдны IPv4-адрас.',
    'ipv6'                 => 'Гэта павінен быць сапраўдны IPv6-адрас.',
    'json'                 => 'Гэта павінна быць дапушчальная JSON радок.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'Гэта павінен быць файл тыпу: :values.',
    'mimetypes'            => 'Гэта павінен быць файл тыпу: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Гэта значэнне павінна быць Кратна :value',
    'not_in'               => 'Наадварот значэнне з\'яўляецца недапушчальным.',
    'not_regex'            => 'Гэты фармат недапушчальны.',
    'numeric'              => 'Гэта павінна быць лік.',
    'password'             => 'Пароль няправільны.',
    'present'              => 'Гэта поле павінна прысутнічаць.',
    'prohibited'           => 'Гэта поле забаронена.',
    'prohibited_if'        => 'Гэта поле забаронена, калі :other роўна :value.',
    'prohibited_unless'    => 'Гэта поле забаронена, калі толькі :other не знаходзіцца ў :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Гэты фармат недапушчальны.',
    'relatable'            => 'Гэта поле можа быць не звязана з дадзеным рэсурсам.',
    'required'             => 'Гэта поле з\'яўляецца абавязковым.',
    'required_if'          => 'Гэта поле абавязкова, калі :other роўна :value.',
    'required_unless'      => 'Гэта поле з\'яўляецца абавязковым, калі толькі :other не знаходзіцца ў :values годзе.',
    'required_with'        => 'Гэта поле з\'яўляецца абавязковым пры наяўнасці :values.',
    'required_with_all'    => 'Гэта поле абавязкова пры наяўнасці :values.',
    'required_without'     => 'Гэта поле з\'яўляецца абавязковым, калі :values адсутнічае.',
    'required_without_all' => 'Гэта поле з\'яўляецца абавязковым, калі ні адзін з :values не прысутнічае.',
    'same'                 => 'Значэнне гэтага поля павінна супадаць са значэннем з :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'Гэта павінна пачынацца з аднаго з наступных: :values.',
    'string'               => 'Гэта, павінна быць, струна.',
    'timezone'             => 'Гэта павінна быць дапушчальная зона.',
    'unique'               => 'Гэта ўжо зроблена.',
    'uploaded'             => 'Гэта не ўдалося загрузіць.',
    'url'                  => 'Гэты фармат недапушчальны.',
    'uuid'                 => 'Гэта павінен быць сапраўдны UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
