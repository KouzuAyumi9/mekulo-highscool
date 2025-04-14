<?php
$co = [
    'slug' => 'o-parts',
    'image' => 'company.jpg',
    'company_name' => '株式会社オーパーツ',
    'catch_copy' => 'アーチェリーの命中率も、ゲーム機の高性能も、この部品次第！',
    'industry' => ['E'],
    'post_code' => '386-0002',
    'address' => '長野県上田市住吉1128-1',
    'homepage' => 'なし',
    'logo_filename' => 'logo.svg',
    'latitude' => 36.3694332,//緯度
    'longitude' => 138.2142701,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_seizou' => [
        'name' => '総合製造スタッフ',
        'url' => 'job_seizou',
        'catch_copy' => 'ものづくりのエキスパートを目指す',
        'work' => ['533'],
        'fv_url' => 'introduce4.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  '',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年8月4日 （月）13時00分～', 
                'date' => '2025-08-04',
                'deadline' => '2025-08-01',//募集締切日
            ],
            [
                'name' => '2025年8月5日 （火）13時00分～', 
                'date' => '2025-08-05',
                'deadline' => '2025-08-2',//募集締切日
            ],
            [
                'name' => '2025年8月6日（木） 13時00分～', 
                'date' => '2025-08-06',
                'deadline' => '2025-08-03',//募集締切日
            ],
            [
                'name' => '2025年8月7日（金） 13時00分～', 
                'date' => '2025-08-07',
                'deadline' => '2025-08-04',//募集締切日
            ],
        ],
        'catch_copy' => '精密加工の世界を体感！オーパーツのものづくり見学ツアー',
        'visit_img' =>'firstview.jpg',
        'content' => '応募前見学として参加する方は参加申し込みをしてください。',
    ],
];

// 目次
$toc = [
    'top' => [
        'name' => '企業TOP',
        'icon' => 'company.png',
        'url' => '',
    ],
    'job' => [
        'name' => '募集職種',
        'icon' => 'carrier.png',
        'url' => '',
        'submenu' => $occupation,
		],
	];