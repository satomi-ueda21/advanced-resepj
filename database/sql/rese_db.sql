INSERT INTO resedb.areas
(id, name)
VALUES(1, '北海道');
INSERT INTO resedb.areas
(id, name)
VALUES(2, '青森県');
INSERT INTO resedb.areas
(id, name)
VALUES(3, '岩手県');
INSERT INTO resedb.areas
(id, name)
VALUES(4, '宮城県');
INSERT INTO resedb.areas
(id, name)
VALUES(5, '秋田県');
INSERT INTO resedb.areas
(id, name)
VALUES(6, '山形県');
INSERT INTO resedb.areas
(id, name)
VALUES(7, '福島県');
INSERT INTO resedb.areas
(id, name)
VALUES(8, '茨城県');
INSERT INTO resedb.areas
(id, name)
VALUES(9, '栃木県');
INSERT INTO resedb.areas
(id, name)
VALUES(10, '群馬県');
INSERT INTO resedb.areas
(id, name)
VALUES(11, '埼玉県');
INSERT INTO resedb.areas
(id, name)
VALUES(12, '千葉県');
INSERT INTO resedb.areas
(id, name)
VALUES(13, '東京都');
INSERT INTO resedb.areas
(id, name)
VALUES(14, '神奈川県');
INSERT INTO resedb.areas
(id, name)
VALUES(15, '新潟県');
INSERT INTO resedb.areas
(id, name)
VALUES(16, '富山県');
INSERT INTO resedb.areas
(id, name)
VALUES(17, '石川県');
INSERT INTO resedb.areas
(id, name)
VALUES(18, '福井県');
INSERT INTO resedb.areas
(id, name)
VALUES(19, '山梨県');
INSERT INTO resedb.areas
(id, name)
VALUES(20, '長野県');
INSERT INTO resedb.areas
(id, name)
VALUES(21, '岐阜県');
INSERT INTO resedb.areas
(id, name)
VALUES(22, '静岡県');
INSERT INTO resedb.areas
(id, name)
VALUES(23, '愛知県');
INSERT INTO resedb.areas
(id, name)
VALUES(24, '三重県');
INSERT INTO resedb.areas
(id, name)
VALUES(25, '滋賀県');
INSERT INTO resedb.areas
(id, name)
VALUES(26, '京都府');
INSERT INTO resedb.areas
(id, name)
VALUES(27, '大阪府');
INSERT INTO resedb.areas
(id, name)
VALUES(28, '兵庫県');
INSERT INTO resedb.areas
(id, name)
VALUES(29, '奈良県');
INSERT INTO resedb.areas
(id, name)
VALUES(30, '和歌山県');
INSERT INTO resedb.areas
(id, name)
VALUES(31, '鳥取県');
INSERT INTO resedb.areas
(id, name)
VALUES(32, '島根県');
INSERT INTO resedb.areas
(id, name)
VALUES(33, '岡山県');
INSERT INTO resedb.areas
(id, name)
VALUES(34, '広島県');
INSERT INTO resedb.areas
(id, name)
VALUES(35, '山口県');
INSERT INTO resedb.areas
(id, name)
VALUES(36, '徳島県');
INSERT INTO resedb.areas
(id, name)
VALUES(37, '香川県');
INSERT INTO resedb.areas
(id, name)
VALUES(38, '愛媛県');
INSERT INTO resedb.areas
(id, name)
VALUES(39, '高知県');
INSERT INTO resedb.areas
(id, name)
VALUES(40, '福岡県');
INSERT INTO resedb.areas
(id, name)
VALUES(41, '佐賀県');
INSERT INTO resedb.areas
(id, name)
VALUES(42, '長崎県');
INSERT INTO resedb.areas
(id, name)
VALUES(43, '熊本県');
INSERT INTO resedb.areas
(id, name)
VALUES(44, '大分県');
INSERT INTO resedb.areas
(id, name)
VALUES(45, '宮崎県');
INSERT INTO resedb.areas
(id, name)
VALUES(46, '鹿児島県');
INSERT INTO resedb.areas
(id, name)
VALUES(47, '沖縄県');


INSERT INTO resedb.genres
(id, name)
VALUES(1, '寿司');
INSERT INTO resedb.genres
(id, name)
VALUES(2, '焼肉');
INSERT INTO resedb.genres
(id, name)
VALUES(3, '居酒屋');
INSERT INTO resedb.genres
(id, name)
VALUES(4, 'イタリアン');
INSERT INTO resedb.genres
(id, name)
VALUES(5, 'ラーメン');


INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(1, '仙人', 13, 1, '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg', '2021-08-14 10:27:40', '2021-08-14 10:27:40');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(2, '牛助', 27, 2, '焼肉業界で20年間経験を積み、肉を熟知したマスターによる実力派焼肉店。長年の実績とお付き合いをもとに、なかなか食べられない希少部位も仕入れております。また、ゆったりとくつろげる空間はお仕事終わりの一杯や女子会にぴったりです。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg', '2021-08-14 10:27:43', '2021-08-14 10:27:43');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(3, '戦慄', 40, 3, '気軽に立ち寄れる昔懐かしの大衆居酒屋です。キンキンに冷えたビールを、なんと199円で。鳥かわ煮込み串は販売総数100000本突破の名物料理です。仕事帰りに是非御来店ください。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg', '2021-08-14 10:27:45', '2021-08-14 10:27:45');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(4, 'ルーク', 13, 4, '都心にひっそりとたたずむ、古民家を改築した落ち着いた空間です。イタリアで修業を重ねたシェフによるモダンなイタリア料理とソムリエセレクトによる厳選ワインとのペアリングが好評です。ゆっくりと上質な時間をお楽しみください。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg', '2021-08-14 10:27:46', '2021-08-14 10:27:46');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(5, '志摩屋', 40, 5, 'ラーメン屋とは思えない店内にはカウンター席はもちろん、個室も用意してあります。ラーメンはこってり系・あっさり系ともに揃っています。その他豊富な一品料理やアルコールも用意しており、居酒屋としても利用できます。ぜひご来店をお待ちしております。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg', '2021-08-14 10:27:48', '2021-08-14 10:27:48');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(6, '香', 13, 2, '大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg', '2021-08-14 10:27:49', '2021-08-14 10:27:49');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(7, 'JJ', 27, 4, 'イタリア製ピザ窯芳ばしく焼き上げた極薄のミラノピッツァや厳選されたワインをお楽しみいただけます。女子会や男子会、記念日やお誕生日会にもオススメです。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg', '2021-08-14 10:27:50', '2021-08-14 10:27:50');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(8, 'らーめん極み', 13, 5, '一杯、一杯心を込めて職人が作っております。味付けは少し濃いめです。 食べやすく最後の一滴まで美味しく飲めると好評です。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg', '2021-08-14 10:27:52', '2021-08-14 10:27:52');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(9, '鳥雨', 27, 3, '素材の旨味を存分に引き出す為に、塩焼を中心としたお店です。比内地鶏を中心に、厳選素材を職人が備長炭で豪快に焼き上げます。清潔な内装に包まれた大人の隠れ家で贅沢で優雅な時間をお過ごし下さい。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg', '2021-08-14 10:27:53', '2021-08-14 10:27:53');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(10, '築地色合', 13, 1, '鮨好きの方の為の鮨屋として、迫力ある大きさの握りを1貫ずつ提供致します。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg', '2021-08-14 10:27:58', '2021-08-14 10:27:58');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(11, '晴海', 27, 2, '毎年チャンピオン牛を買い付け、仙台市長から表彰されるほどの上質な仕入れをする精肉店オーナーの本当に美味しい国産牛を食べてもらいたいという思いから誕生したお店です。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg', '2021-08-14 10:28:01', '2021-08-14 10:28:01');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(12, '三子', 40, 2, '最高級の美味しいお肉で日々の疲れを軽減していただければと贅沢にサーロインを盛り込んだ御膳をご用意しております。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg', '2021-08-14 10:28:03', '2021-08-14 10:28:03');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(13, '八戒', 13, 3, '当店自慢の鍋や焼き鳥などお好きなだけ堪能できる食べ放題プランをご用意しております。飲み放題は2時間と3時間がございます。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg', '2021-08-14 10:28:04', '2021-08-14 10:28:04');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(14, '福助', 27, 1, 'ミシュラン掲載店で磨いた、寿司職人の旨さへのこだわりはもちろん、 食事をゆっくりと楽しんでいただける空間作りも意識し続けております。 接待や大切なお食事にはぜひご利用ください。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg', '2021-08-14 10:28:05', '2021-08-14 10:28:05');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(15, 'ラー北', 13, 5, 'お昼にはランチを求められるサラリーマン、夕方から夜にかけては、学生や会社帰りのサラリーマン、小上がり席もありファミリー層にも大人気です。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg', '2021-08-14 10:28:09', '2021-08-14 10:28:09');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(16, '翔', 27, 3, '博多出身の店主自ら厳選した新鮮な旬の素材を使ったコース料理をご提供します。一人一人のお客様に目が届くようにしております。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg', '2021-08-14 10:28:10', '2021-08-14 10:28:10');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(17, '経緯', 13, 1, '職人が一つ一つ心を込めて丁寧に仕上げた、江戸前鮨ならではの味をお楽しみ頂けます。鮨に合った希少なお酒も数多くご用意しております。他にはない海鮮太巻き、当店自慢の蒸し鮑、是非ご賞味下さい。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg', '2021-08-14 10:28:15', '2021-08-14 10:28:15');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(18, '漆', 13, 2, '店内に一歩足を踏み入れると、肉の焼ける音と芳香が猛烈に食欲を掻き立ててくる。そんな漆で味わえるのは至極の焼き肉です。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg', '2021-08-14 10:28:16', '2021-08-14 10:28:16');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(19, 'THE TOOL', 40, 4, '非日常的な空間で日頃の疲れを癒し、ゆったりとした上質な時間を過ごせる大人の為のレストラン&バーです。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg', '2021-08-14 10:28:17', '2021-08-14 10:28:17');
INSERT INTO resedb.stores
(id, name, area_id, genre_id, detail, url, created_at, updated_at)
VALUES(20, '木船', 27, 1, '毎日店主自ら市場等に出向き、厳選した魚介類が、お鮨をはじめとした繊細な料理に仕立てられます。また、選りすぐりの種類豊富なドリンクもご用意しております。', 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg', '2021-08-14 10:28:19', '2021-08-14 10:28:19');







