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
    'accepted'             => 'इस क्षेत्र को स्वीकार किया जाना चाहिए । ',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'यह एक वैध यूआरएल नहीं है । ',
    'after'                => 'यह :date के बाद की तारीख होनी चाहिए । ',
    'after_or_equal'       => 'यह :date के बाद या उसके बराबर की तारीख होनी चाहिए । ',
    'alpha'                => 'इस फ़ील्ड में केवल अक्षर हो सकते हैं । ',
    'alpha_dash'           => 'इस फ़ील्ड में केवल अक्षर, संख्या, डैश और अंडरस्कोर हो सकते हैं । ',
    'alpha_num'            => 'इस फ़ील्ड में केवल अक्षर और संख्याएँ हो सकती हैं । ',
    'array'                => 'यह फ़ील्ड एक सरणी होनी चाहिए । ',
    'attached'             => 'यह क्षेत्र पहले से ही जुड़ा हुआ है । ',
    'before'               => 'यह :date से पहले की तारीख होनी चाहिए । ',
    'before_or_equal'      => 'यह :date से पहले या उसके बराबर की तारीख होनी चाहिए । ',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'यह क्षेत्र सही या गलत होना चाहिए । ',
    'confirmed'            => 'पुष्टि मेल नहीं खाती । ',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'यह एक वैध तारीख नहीं है । ',
    'date_equals'          => 'यह :date के बराबर तारीख होनी चाहिए । ',
    'date_format'          => 'यह प्रारूप :format से मेल नहीं खाता है । ',
    'different'            => 'यह मान :other से अलग होना चाहिए । ',
    'digits'               => 'यह :digits अंकों का होना चाहिए । ',
    'digits_between'       => 'यह :min और :max अंकों के बीच होना चाहिए । ',
    'dimensions'           => 'इस छवि में अमान्य आयाम हैं । ',
    'distinct'             => 'इस फ़ील्ड में डुप्लिकेट मान है । ',
    'email'                => 'यह एक मान्य ईमेल पता होना चाहिए । ',
    'ends_with'            => 'यह निम्नलिखित में से एक के साथ समाप्त होना चाहिए: :values । ',
    'exists'               => 'चयनित मान अमान्य है । ',
    'file'                 => 'सामग्री एक फ़ाइल होनी चाहिए । ',
    'filled'               => 'इस फ़ील्ड का मान होना चाहिए । ',
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
    'image'                => 'यह एक छवि होनी चाहिए । ',
    'in'                   => 'चयनित मान अमान्य है । ',
    'in_array'             => 'यह मान :other में मौजूद नहीं है । ',
    'integer'              => 'यह एक पूर्णांक होना चाहिए । ',
    'ip'                   => 'यह एक वैध आईपी पता होना चाहिए । ',
    'ipv4'                 => 'यह एक वैध आईपीवी 4 पता होना चाहिए । ',
    'ipv6'                 => 'यह एक वैध आईपीवी 6 पता होना चाहिए । ',
    'json'                 => 'यह एक वैध जेसन स्ट्रिंग होना चाहिए । ',
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
    'mimes'                => 'यह प्रकार की एक फ़ाइल होनी चाहिए: :values । ',
    'mimetypes'            => 'यह प्रकार की एक फ़ाइल होनी चाहिए: :values । ',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'मान :value का एक बहु होना चाहिए',
    'not_in'               => 'चयनित मान अमान्य है । ',
    'not_regex'            => 'यह प्रारूप अमान्य है । ',
    'numeric'              => 'यह एक संख्या होनी चाहिए । ',
    'password'             => 'पासवर्ड गलत है । ',
    'present'              => 'यह क्षेत्र मौजूद होना चाहिए । ',
    'prohibited'           => 'यह क्षेत्र निषिद्ध है । ',
    'prohibited_if'        => ':other :value होने पर यह क्षेत्र निषिद्ध है । ',
    'prohibited_unless'    => 'यह क्षेत्र तब तक निषिद्ध है जब तक कि :other :values में न हो । ',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'यह प्रारूप अमान्य है । ',
    'relatable'            => 'यह फ़ील्ड इस संसाधन से संबद्ध नहीं हो सकती है । ',
    'required'             => 'यह फ़ील्ड आवश्यक है । ',
    'required_if'          => ':other :value होने पर यह फ़ील्ड आवश्यक है । ',
    'required_unless'      => 'यह फ़ील्ड तब तक आवश्यक है जब तक कि :other :values में न हो । ',
    'required_with'        => ':values मौजूद होने पर यह फ़ील्ड आवश्यक है । ',
    'required_with_all'    => ':values मौजूद होने पर यह फ़ील्ड आवश्यक है । ',
    'required_without'     => ':values मौजूद नहीं होने पर यह फ़ील्ड आवश्यक है । ',
    'required_without_all' => 'यह फ़ील्ड तब आवश्यक है जब :values में से कोई भी मौजूद न हो । ',
    'same'                 => 'इस क्षेत्र का मूल्य :other से मेल खाना चाहिए । ',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'यह निम्नलिखित में से एक से शुरू होना चाहिए: :values । ',
    'string'               => 'यह एक स्ट्रिंग होना चाहिए । ',
    'timezone'             => 'यह एक वैध क्षेत्र होना चाहिए । ',
    'unique'               => 'यह पहले ही लिया जा चुका है । ',
    'uploaded'             => 'यह अपलोड करने में विफल रहा । ',
    'url'                  => 'यह प्रारूप अमान्य है । ',
    'uuid'                 => 'यह होना चाहिए एक मान्य UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
