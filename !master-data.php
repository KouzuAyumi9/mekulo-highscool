<?php
//記事製作者情報
const WRITER = [
    'sato' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ],
    'shomura' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ],
     'ichikawa' => [
        'image' => 'ichikawa.png',
        'name' => '市川 祐己',
    ],
     'kobayashi' => [
        'image' => 'sato.png',
        'name' => '小林 祐穂',
    ],
     'noguchi' => [
        'image' => 'sato.png',
        'name' => '野口 拓真',
    ],
];

// 産業情報
const INDUSTRIES = [
    'A' => '農業、林業',
    'B' => '漁業',
    'C' => '鉱業、採石業、砂利採取業',
    'D' => '建設業',
    'E' => '製造業',
    'F' => '電気・ガス・熱供給・水道業',
    'G' => '情報通信業',
    'H' => '運輸業、郵便業',
    'I' => '卸売業、小売業',
    'J' => '金融業、保険業',
    'K' => '不動産業、物品賃貸業',
    'L' => '学術研究、専門・技術サービス業',
    'M' => '宿泊業、飲食サービス業',
    'N' => '生活関連サービス業、娯楽業',
    'O' => '教育、学習支援業',
    'P' => '医療、福祉',
    'Q' => '複合サービス事業',
    'R' => 'サービス業（他に分類されないもの）',
    'S' => '公務（他に分類されるものを除く）',
    'T' => '分類不能の産業',
];

const OCCUPATION = [
    '01' => '管理的公務員',
    '02' => '法人・団体役員',
    '03' => '法人・団体管理職員',
    '04' => 'その他の管理的職業従事者',
    '05' => '研究者',
    '06' => '農林水産技術者',
    '07' => '製造技術者（開発）',
    '08' => '製造技術者（開発を除く）',
    '09' => '建築・土木・測量技術者',
    '10' => '情報処理・通信技術者',
    '11' => 'その他の技術者',
    '12' => '医師，歯科医師，獣医師，薬剤師',
    '13' => '保健師，助産師，看護師',
    '14' => '医療技術者',
    '15' => 'その他の保健医療従事者',
    '16' => '社会福祉専門職業従事者',
    '17' => '法務従事者',
    '18' => '経営・金融・保険専門職業従事者',
    '19' => '教員',
    '20' => '宗教家',
    '21' => '著述家，記者，編集者',
    '22' => '美術家，デザイナー，写真家，映像撮影者',
    '23' => '音楽家，舞台芸術家',
    '24' => 'その他の専門的職業従事者',
    '25' => '一般事務従事者',
    '26' => '会計事務従事者',
    '27' => '生産関連事務従事者',
    '28' => '営業・販売事務従事者',
    '29' => '外勤事務従事者',
    '30' => '運輸・郵便事務従事者',
    '31' => '事務用機器操作員',
    '32' => '商品販売従事者',
    '33' => '販売類似職業従事者',
    '34' => '営業職業従事者',
    '35' => '家庭生活支援サービス職業従事者',
    '36' => '介護サービス職業従事者',
    '37' => '保健医療サービス職業従事者',
    '38' => '生活衛生サービス職業従事者',
    '39' => '飲食物調理従事者',
    '40' => '接客・給仕職業従事者',
    '41' => '居住施設・ビル等管理人',
    '42' => 'その他のサービス職業従事者',
    '43' => '自衛官',
    '44' => '司法警察職員',
    '45' => 'その他の保安職業従事者',
    '46' => '農業従事者',
    '47' => '林業従事者',
    '48' => '漁業従事者',
    '49' => '生産設備制御・監視従事者（金属製品）',
    '50' => '生産設備制御・監視従事者（金属製品を除く）',
    '51' => '機械組立設備制御・監視従事者',
    '52' => '製品製造・加工処理従事者（金属製品）',
    '53' => '製品製造・加工処理従事者（金属製品を除く）',
    '54' => '機械組立従事者',
    '55' => '機械整備・修理従事者',
    '56' => '製品検査従事者（金属製品）',
    '57' => '製品検査従事者（金属製品を除く）',
    '58' => '機械検査従事者',
    '59' => '生産関連・生産類似作業従事者',
    '60' => '鉄道運転従事者',
    '61' => '自動車運転従事者',
    '62' => '船舶・航空機運転従事者',
    '63' => 'その他の輸送従事者',
    '64' => '定置・建設機械運転従事者',
    '65' => '建設躯体工事従事者',
    '66' => '建設従事者（建設躯体工事従事者を除く）',
    '67' => '電気工事従事者',
    '68' => '土木作業従事者',
    '69' => '採掘従事者',
    '70' => '運搬従事者',
    '71' => '清掃従事者',
    '72' => '包装従事者',
    '73' => 'その他の運搬・清掃・包装等従事者',
    '99' => '分類不能の職業',
    '011' => '議会議員',
    '012' => '管理的国家公務員',
    '013' => '管理的地方公務員',
    '021' => '会社役員',
    '022' => '独立行政法人等役員',
    '029' => 'その他の法人・団体役員',
    '031' => '会社管理職員',
    '032' => '独立行政法人等管理職員',
    '039' => 'その他の法人・団体管理職員',
    '049' => 'その他の管理的職業従事者',
    '051' => '自然科学系研究者',
    '052' => '人文・社会科学系等研究者',
    '061' => '農林水産技術者',
    '071' => '食品技術者（開発）',
    '072' => '電気・電子・電気通信技術者（通信ネットワーク技術者を除く）（開発）',
    '073' => '機械技術者（開発）',
    '074' => '自動車技術者（開発）',
    '075' => '輸送用機器技術者（自動車を除く) （開発）',
    '076' => '金属技術者（開発）',
    '077' => '化学技術者（開発）',
    '079' => 'その他の製造技術者（開発）',
    '081' => '食品技術者（開発を除く）',
    '082' => '電気・電子・電気通信技術者（通信ネットワーク技術者を除く）（開発を除く）',
    '083' => '機械技術者（開発を除く）',
    '084' => '自動車技術者（開発を除く）',
    '085' => '輸送用機器技術者（自動車を除く) （開発を除く）',
    '086' => '金属技術者（開発を除く）',
    '087' => '化学技術者（開発を除く）',
    '089' => 'その他の製造技術者（開発を除く）',
    '091' => '建築技術者',
    '092' => '土木技術者',
    '093' => '測量技術者',
    '101' => 'システムコンサルタント',
    '102' => 'システム設計者',
    '103' => '情報処理プロジェクトマネージャ',
    '104' => 'ソフトウェア作成者',
    '105' => 'システム運用管理者',
    '106' => '通信ネットワーク技術者',
    '109' => 'その他の情報処理・通信技術者',
    '119' => 'その他の技術者',
    '121' => '医師',
    '122' => '歯科医師',
    '123' => '獣医師',
    '124' => '薬剤師',
    '131' => '保健師',
    '132' => '助産師',
    '133' => '看護師（准看護師を含む）',
    '141' => '診療放射線技師',
    '142' => '臨床工学技士',
    '143' => '臨床検査技師',
    '144' => '理学療法士，作業療法士',
    '145' => '視能訓練士，言語聴覚士',
    '146' => '歯科衛生士',
    '147' => '歯科技工士',
    '151' => '栄養士',
    '152' => 'あん摩マッサージ指圧師，はり師，きゅう師，柔道整復師',
    '159' => '他に分類されない保健医療従事者',
    '161' => '福祉相談指導専門員',
    '162' => '福祉施設指導専門員',
    '163' => '保育士',
    '169' => 'その他の社会福祉専門職業従事者',
    '171' => '裁判官',
    '172' => '検察官',
    '173' => '弁護士',
    '174' => '弁理士',
    '175' => '司法書士',
    '179' => 'その他の法務従事者',
    '181' => '公認会計士',
    '182' => '税理士',
    '183' => '社会保険労務士',
    '184' => '金融・保険専門職業従事者',
    '189' => 'その他の経営・金融・保険専門職業従事者',
    '191' => '幼稚園教員',
    '192' => '小学校教員',
    '193' => '中学校教員',
    '194' => '高等学校教員',
    '195' => '中等教育学校教員',
    '196' => '特別支援学校教員',
    '197' => '高等専門学校教員',
    '198' => '大学教員',
    '199' => 'その他の教員',
    '201' => '宗教家',
    '211' => '著述家',
    '212' => '記者，編集者',
    '221' => '彫刻家',
    '222' => '画家，書家',
    '223' => '工芸美術家',
    '224' => 'デザイナー',
    '225' => '写真家，映像撮影者',
    '231' => '音楽家',
    '232' => '舞踊家',
    '233' => '俳優',
    '234' => '演出家',
    '235' => '演芸家',
    '241' => '図書館司書',
    '242' => '学芸員',
    '243' => 'カウンセラー（医療・福祉施設を除く）',
    '244' => '個人教師',
    '245' => '職業スポーツ従事者',
    '246' => '通信機器操作従事者',
    '249' => '他に分類されない専門的職業従事者',
    '251' => '庶務事務員',
    '252' => '人事事務員',
    '253' => '企画事務員',
    '254' => '受付・案内事務員',
    '255' => '秘書',
    '256' => '電話応接事務員',
    '257' => '総合事務員',
    '259' => 'その他の一般事務従事者',
    '261' => '現金出納事務員',
    '262' => '預・貯金窓口事務員',
    '263' => '経理事務員',
    '269' => 'その他の会計事務従事者',
    '271' => '生産現場事務員',
    '272' => '出荷・受荷事務員',
    '281' => '営業・販売事務員',
    '289' => 'その他の営業・販売事務従事者',
    '291' => '集金人',
    '292' => '調査員',
    '299' => 'その他の外勤事務従事者',
    '301' => '旅客・貨物係事務員',
    '302' => '運行管理事務員',
    '303' => '郵便事務員',
    '311' => 'パーソナルコンピュータ操作員',
    '312' => 'データ・エントリー装置操作員',
    '313' => '電子計算機オペレーター（パーソナルコンピュータを除く）',
    '319' => 'その他の事務用機器操作員',
    '321' => '小売店主・店長',
    '322' => '卸売店主・店長',
    '323' => '販売店員',
    '324' => '商品訪問・移動販売従事者',
    '325' => '再生資源回収・卸売従事者',
    '326' => '商品仕入外交員',
    '331' => '不動産仲介・売買人',
    '332' => '保険代理・仲立人（ブローカー）',
    '333' => '有価証券売買・仲立人，金融仲立人',
    '334' => '質屋店主・店員',
    '339' => 'その他の販売類似職業従事者',
    '341' => '食料品営業職業従事者',
    '342' => '化学品営業職業従事者',
    '343' => '医薬品営業職業従事者',
    '344' => '機械器具営業職業従事者（通信機械器具を除く）',
    '345' => '通信・システム営業職業従事者',
    '346' => '金融・保険営業職業従事者',
    '347' => '不動産営業職業従事者',
    '349' => 'その他の営業職業従事者',
    '351' => '家政婦（夫），家事手伝い',
    '359' => 'その他の家庭生活支援サービス職業従事者',
    '361' => '介護職員（医療・福祉施設等）',
    '362' => '訪問介護従事者',
    '371' => '看護助手',
    '372' => '歯科助手',
    '379' => 'その他の保健医療サービス職業従事者',
    '381' => '理容師',
    '382' => '美容師',
    '383' => '美容サービス従事者（美容師を除く）',
    '384' => '浴場従事者',
    '385' => 'クリーニング職',
    '386' => '洗張職',
    '391' => '調理人',
    '392' => 'バーテンダー',
    '401' => '飲食店主・店長',
    '402' => '旅館主・支配人',
    '403' => '飲食物給仕従事者',
    '404' => '身の回り世話従事者',
    '405' => '接客社交従事者',
    '406' => '芸者，ダンサー',
    '407' => '娯楽場等接客員',
    '411' => 'マンション・アパート・下宿管理人',
    '412' => '寄宿舎・寮管理人',
    '413' => 'ビル管理人',
    '414' => '駐車場管理人',
    '421' => '旅行・観光案内人',
    '422' => '物品一時預り人',
    '423' => '物品賃貸人',
    '424' => '広告宣伝員',
    '425' => '葬儀師，火葬作業員',
    '429' => '他に分類されないサービス職業従事者',
    '431' => '陸上自衛官',
    '432' => '海上自衛官',
    '433' => '航空自衛官',
    '434' => '防衛大学校・防衛医科大学校学生',
    '441' => '警察官',
    '442' => '海上保安官',
    '449' => 'その他の司法警察職員',
    '451' => '看守',
    '452' => '消防員',
    '453' => '警備員',
    '459' => '他に分類されない保安職業従事者',
    '461' => '農耕従事者',
    '462' => '養畜従事者',
    '463' => '植木職，造園師',
    '469' => 'その他の農業従事者',
    '471' => '育林従事者',
    '472' => '伐木・造材・集材従事者',
    '479' => 'その他の林業従事者',
    '481' => '漁労従事者',
    '482' => '船長・航海士・機関長・機関士（漁労船）',
    '483' => '海藻・貝採取従事者',
    '484' => '水産養殖従事者',
    '489' => 'その他の漁業従事者',
    '491' => '製銑・製鋼・非鉄金属製錬設備制御・監視員',
    '492' => '鋳物製造・鍛造設備制御・監視員',
    '493' => '金属工作設備制御・監視員',
    '494' => '金属プレス設備制御・監視員',
    '495' => '鉄工・製缶設備制御・監視員',
    '496' => '板金設備制御・監視員',
    '497' => '金属彫刻・表面処理設備制御・監視員',
    '498' => '金属溶接・溶断設備制御・監視員',
    '499' => 'その他の生産設備制御・監視従事者（金属製品）',
    '501' => '化学製品生産設備制御・監視員',
    '502' => '窯業・土石製品生産設備制御・監視員',
    '503' => '食料品生産設備制御・監視員',
    '504' => '飲料・たばこ生産設備制御・監視員',
    '505' => '紡織・衣服・繊維製品生産設備制御・監視員',
    '506' => '木・紙製品生産設備制御・監視員',
    '507' => '印刷・製本設備制御・監視員',
    '508' => 'ゴム・プラスチック製品生産設備制御・監視員',
    '509' => 'その他の生産設備制御・監視従事者（金属製品を除く）',
    '511' => 'はん用・生産用・業務用機械器具組立設備制御・監視員',
    '512' => '電気機械器具組立設備制御・監視員',
    '513' => '自動車組立設備制御・監視員',
    '514' => '輸送機械組立設備制御・監視員（自動車を除く）',
    '515' => '計量計測機器・光学機械器具組立設備制御・監視員',
    '521' => '製銑・製鋼・非鉄金属製錬従事者',
    '522' => '鋳物製造・鍛造従事者',
    '523' => '金属工作機械作業従事者',
    '524' => '金属プレス従事者',
    '525' => '鉄工，製缶従事者',
    '526' => '板金従事者',
    '527' => '金属彫刻・表面処理従事者',
    '528' => '金属溶接・溶断従事者',
    '529' => 'その他の製品製造・加工処理従事者（金属製品）',
    '531' => '化学製品製造従事者',
    '532' => '窯業・土石製品製造従事者',
    '533' => '食料品製造従事者',
    '534' => '飲料・たばこ製造従事者',
    '535' => '紡織・衣服・繊維製品製造従事者',
    '536' => '木・紙製品製造従事者',
    '537' => '印刷・製本従事者',
    '538' => 'ゴム・プラスチック製品製造従事者',
    '539' => 'その他の製品製造・加工処理従事者（金属製品を除く）',
    '541' => 'はん用・生産用・業務用機械器具組立従事者',
    '542' => '電気機械器具組立従事者',
    '543' => '自動車組立従事者',
    '544' => '輸送機械組立従事者（自動車を除く）',
    '545' => '計量計測機器・光学機械器具組立従事者',
    '551' => 'はん用・生産用・業務用機械器具整備・修理従事者',
    '552' => '電気機械器具整備・修理従事者',
    '553' => '自動車整備・修理従事者',
    '554' => '輸送機械整備・修理従事者（自動車を除く）',
    '555' => '計量計測機器・光学機械器具整備・修理従事者',
    '561' => '金属材料検査従事者',
    '562' => '金属加工・溶接・溶断検査従事者',
    '571' => '化学製品検査従事者',
    '572' => '窯業・土石製品検査従事者',
    '573' => '食料品検査従事者',
    '574' => '飲料・たばこ検査従事者',
    '575' => '紡織・衣服・繊維製品検査従事者',
    '576' => '木・紙製品検査従事者',
    '577' => '印刷・製本検査従事者',
    '578' => 'ゴム・プラスチック製品検査従事者',
    '579' => 'その他の製品検査従事者（金属製品を除く）',
    '581' => 'はん用・生産用・業務用機械器具検査従事者',
    '582' => '電気機械器具検査従事者',
    '583' => '自動車検査従事者',
    '584' => '輸送機械検査従事者（自動車を除く）',
    '585' => '計量計測機器・光学機械器具検査従事者',
    '591' => '生産関連作業従事者',
    '592' => '生産類似作業従事者',
    '601' => '電車運転士',
    '609' => 'その他の鉄道運転従事者',
    '611' => 'バス運転者',
    '612' => '乗用自動車運転者',
    '613' => '貨物自動車運転者',
    '619' => 'その他の自動車運転従事者',
    '621' => '船長（漁労船を除く）',
    '622' => '航海士・運航士（漁労船を除く），水先人',
    '623' => '船舶機関長・機関士（漁労船を除く）',
    '624' => '航空機操縦士',
    '631' => '車掌',
    '632' => '鉄道輸送関連業務従事者',
    '633' => '甲板員，船舶技士',
    '634' => '船舶機関員',
    '639' => '他に分類されない輸送従事者',
    '641' => '発電員，変電員',
    '642' => 'ボイラー・オペレーター',
    '643' => 'クレーン・ウインチ運転従事者',
    '644' => 'ポンプ・ブロワー・コンプレッサー運転従事者',
    '645' => '建設・さく井機械運転従事者',
    '646' => '採油・天然ガス採取機械運転従事者',
    '649' => 'その他の定置・建設機械運転従事者',
    '651' => '型枠大工',
    '652' => 'とび職',
    '653' => '鉄筋作業従事者',
    '661' => '大工',
    '662' => 'ブロック積・タイル張従事者',
    '663' => '屋根ふき従事者',
    '664' => '左官',
    '665' => '畳職',
    '666' => '配管従事者',
    '669' => 'その他の建設従事者',
    '671' => '送電線架線・敷設従事者',
    '672' => '配電線架線・敷設従事者',
    '673' => '通信線架線・敷設従事者',
    '674' => '電気通信設備工事従事者',
    '679' => 'その他の電気工事従事者',
    '681' => '土木従事者',
    '682' => '鉄道線路工事従事者',
    '683' => 'ダム・トンネル掘削従事者',
    '691' => '採鉱員',
    '692' => '石切出従事者',
    '693' => '砂利・砂・粘土採取従事者',
    '699' => 'その他の採掘従事者',
    '701' => '郵便・電報外務員',
    '702' => '船内・沿岸荷役従事者',
    '703' => '陸上荷役・運搬従事者',
    '704' => '倉庫作業従事者',
    '705' => '配達員',
    '706' => '荷造従事者',
    '711' => 'ビル・建物清掃員',
    '712' => 'ハウスクリーニング職',
    '713' => '道路・公園清掃員',
    '714' => 'ごみ・し尿処理従事者',
    '715' => '産業廃棄物処理従事者',
    '719' => 'その他の清掃従事者',
    '721' => '包装従事者',
    '739' => 'その他の運搬・清掃・包装等従事者',
    '999' => '分類不能の職業',
];