-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2023 г., 02:29
-- Версия сервера: 8.0.29
-- Версия PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dipmedtorg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'dipmed', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `cat_img`) VALUES
(1, 'Имплантология', 'implantologia.png'),
(2, 'Стоматологические установки', 'zuboustanovka.png'),
(3, 'Стоматологическое оборудование', 'zuboborudovanie.png'),
(4, 'Стоматологические инструменты', 'terapiatolls.png'),
(5, 'Стоматологические материалы', 'stomteh.png'),
(6, 'Зуботехнические материалы', 'zubteh.png'),
(7, 'Зуботехническое оборудование', 'zubtehobor.png'),
(8, 'Шовный материал', 'shovmaterial.png'),
(9, 'Стерилизация и дезинфекция', 'sterilanddezif.png'),
(10, 'Медицинская оптика', 'optika.png\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `telnum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `fio`, `telnum`, `email`, `date`) VALUES
(1, 'Жмышенко Валерий Альбертович', '+7(904) 712-31-32', 'jmix@mail.ru', '2022-12-17'),
(3, 'Шеховцов Глеб Евгеньевич', '+7(904) 772-72-99', 'sanlpop1234@gmail.com', '2022-12-20');

-- --------------------------------------------------------

--
-- Структура таблицы `deals`
--

CREATE TABLE `deals` (
  `id` int NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `phone_num` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `deals`
--

INSERT INTO `deals` (`id`, `product_id`, `phone_num`, `message`, `created`) VALUES
(6, '24', '123', '1123', '2023-06-08 19:38:29');

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int NOT NULL,
  `man_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `man_name`, `image`) VALUES
(1, 'SciCan', 'scican.webp'),
(2, 'OMS', 'oms.png'),
(3, 'Asa Dental', 'c22848a426917391c886d805a1a5c205c6712d4b-4a44d4785cfd4a5d994613fd482d0c45.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `header` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `views` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `text`, `img`, `views`, `date`) VALUES
(6, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-21'),
(7, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-21'),
(8, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-21'),
(9, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-21'),
(10, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-22'),
(11, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-22'),
(12, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-22'),
(13, 'Новостной заголовок', 'Текст новости', '63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png', 0, '2022-12-22');

-- --------------------------------------------------------

--
-- Структура таблицы `ord`
--

CREATE TABLE `ord` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `telnum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `img`, `link`) VALUES
(5, 'Tempo 9 ELX cart', 'Стоматологические установки', '642e63577664b2e323f9b0d947549f8d3a259411-9944de458e0a4a83a2fcf21fa473ccf5_310620a68e19488997084371ca1601fb_resize1.jpg', 'https://shop.stomatorg.ru/catalog/oms/ustanovka_stomatologicheskaya_tempo_9_elx_kart_17_1502_podkatnoy_modul_dlya_kp/'),
(6, 'Carving plus', 'Стоматологические установки\r\n', 'ec249e07a5c3785cd0837a47943c329eaefc97b2-961edc4456d44db4a68247079aae38c7_2a9ecf8b191e46e3a94aa0f756230015_resize1.jpg', 'https://shop.stomatorg.ru/catalog/oms/ustanovka_stomatologicheskaya_universal_carving_plus_tsvet_na_vybor_116609/'),
(8, 'Артикулятор 5032', 'Стоматологические инструменты', '4c77ff9d1837f1e1958ba9f20d3b2ced5b4322f3-0e1eee15572b11e284ee001e0b8d0418_5e7dd708f454465c840487b821a55056_resize1.jpg', 'https://shop.stomatorg.ru/catalog/artikulyatory_i_litsevye_dugi_1/artikulyator_5032/'),
(9, 'Воск погружной ELASTO DIP', 'Зуботехнические материалы', '1ba2cd3d7a9e5e02f73cc11dfcc27b0d7ccf93a9-e14e9ca9572b11e284ee001e0b8d0418_5a41794ae57411e394bb001e67570607_resize1.jpg', 'https://shop.stomatorg.ru/catalog/pogruzhnye/vosk_pogruzhnoy_elasto_dip_korichnevyy_150_g/'),
(13, 'Сплав Magnum Ceramic S', 'Зуботехнические материалы', '905cafc87dd657adbf5fa33dce3bd19c75e478c1-b22d6f842ef711e58df4001e67570606_ed57c9b97833435695a1d235d9d63658_resize1.jpg', 'https://shop.stomatorg.ru/catalog/ni_cr_dlya_karkasov/splav_magnum_ceramic_s_dlya_keramiki_ni_67_cr_24_mo_10_1kg_bez_berilliya/'),
(14, 'Фрезерный станок A3 IRON', 'Зуботехническое оборудование', '5cd76513663dec7f00afcd64d874077d2e94cac3-52de750a572c11e284ee001e0b8d0418_824f1f6d722241b4b332a917ed0c6e4f_resize1.jpg', 'https://shop.stomatorg.ru/catalog/frezernye_stanki_i_parallelometry_/frezernyy_stanok_a3_iron_90602/'),
(15, 'Смеситель вакуумный FOX.88/1.0.', 'Зуботехническое оборудование', '8907c0d75f5f7628dd6c15eecd25dc7506c8f4d9-693db3b3572c11e284ee001e0b8d0418_ab72f443cb55438b85dd82258679adee_resize1.jpg', 'https://shop.stomatorg.ru/catalog/vakuumnye_smesiteli/smesitel_vakuumnyy_s_vakuumnym_nasosom_fox_88_1_0/'),
(16, 'Имплантат Submerged без имплантовода', 'Имплантология', '2a263e547eda1d1836bbccba93f402f7991f8ef3-cdb9326a3da514d15e67028a13c1e98e.jpg', 'https://www.inno-implant.ru/catalog/cowellmedi_implantaty/implantaty/implantat-submerged-bez-implantovoda/'),
(17, 'Имплантат Submerged с имплантоводом', 'Имплантология', 'e422ed9d32bba73fda2573954bbb615722282b12-f897cee15eb25996ca118de3f96156f3.jpg', 'https://www.inno-implant.ru/catalog/cowellmedi_implantaty/implantaty/implantat-submerged-s-implantovodom/'),
(18, 'Бинокуляры Heine HR 2.5х', 'Медицинская оптика', 'ed192e3c938bb6e5b234e6c52aa37b22a3115672-38a6c4fb8d7d46cd8b49eeed351a43b0_b6a0921639d044838935bb76b008cccb_resize1.jpg', 'https://shop.stomatorg.ru/catalog/binokulyary/binokulyary_heine_hr_2_5kh_oprava_s_frame_113311/'),
(19, ' Дезcредство с моющим эффектом', 'Стерилизация и дезинфекция', 'cfc368c1fd8206fe5a02eb30adff221f4452bcda-e2ebe0jmh5utdfy9ur3rorbbo3ezklk5.jpg', 'https://almadez.ru/dez-sredstva/concentrate/almadez-5l/#desc'),
(20, 'Диспенсерная система с салфетками', 'Стерилизация и дезинфекция', '3b6f44fe30afb6099e53228a630022d93e3f199b-container-5l.jpg', 'https://almadez.ru/dispensers/container/container-5l/'),
(22, ' Vericom Co Ltd Denfil KIT', 'Стоматологические материалы', '0bb1a80dbb863c4627efdc5898473d8025f29d89-df80935db34e11e7b768001e67570606_24e38b09329348d0b74e5cf0caf34d7f.resize1.jpg', 'https://shop.stomatorg.ru/catalog/plombirovochnye_materialy_svetovogo_otverzhdeniya/denfil_kit_startovyy_nabor_5_kh_4_g_a2_a3_a3_5_b2_b3_kompozitnyy_svetootverzhdaemyy_material/'),
(23, 'Шовный материал Супрамид HS 18', 'Шовный материал', '3f713b5abd21d8b114b4939cbc9ba7fc96a0d1b6-c20562a1ee7611e4b454001e67570606_e2723fb1cf6e4da0a7dafcbcdfe6cdeb_resize1.png', 'https://shop.stomatorg.ru/catalog/shovnye_materialy/shovnyy_material_supramid_hs_18_5_0_usp_45_sm_27281/'),
(24, 'Автоклав Statim 2000 S кассетный, объём 1,8 л', 'Стоматологическое оборудование', 'e21c9587148c6b16afc4413096b772e2da4d4d9c-25cf07eb572c11e284ee001e0b8d0418_db4e95a0040d4cc1ab64596e958788d5_resize1.jpg', 'https://shop.stomatorg.ru/catalog/avtoklavy/avtoklav_statim_2000_s_kassetnyy_obyem_1_8_l/');

-- --------------------------------------------------------

--
-- Структура таблицы `product_images`
--

CREATE TABLE `product_images` (
  `id` int NOT NULL,
  `id_product` int NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_images`
--

INSERT INTO `product_images` (`id`, `id_product`, `img`) VALUES
(1, 24, 'statim200s.webp'),
(2, 24, 'statim2000s2.jpg'),
(3, 5, 'tempo9_1.webp'),
(18, 5, 'tempo9_1.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `product_info`
--

CREATE TABLE `product_info` (
  `id` int NOT NULL,
  `id_product` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `manufacturer_id` int NOT NULL,
  `country` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `descr` text NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_info`
--

INSERT INTO `product_info` (`id`, `id_product`, `full_name`, `manufacturer_id`, `country`, `price`, `descr`, `category_id`) VALUES
(1, 24, 'Автоклав Statim 2000 S кассетный, объём 1,8 л', 1, 'Канада', 250000, '<p class=\"product-below-descr__text\">\r\n    Автоклав Statim 2000 - самый быстрый в мире автоклав. Надёжный и компактный\r\n    кассетный стерилизатор S класса для стерилизации стоматологических наконечников,\r\n    инструментов Lasik, эндоскопических и офтальмологических инструментов.\r\n</p>\r\n\r\n<p class=\"product-below-descr__text\">\r\n    Автоклав Statim позволяет стерилизовать наконечники всего лишь в течении 9 минут\r\n    (упакованные) и 6 минут (неупакованные) в перерывах между приёмом пациентов, что\r\n    позволяет повысить эффективность работы и обеспечивает значительную экономию\r\n    рабочего времени. Четыре программы стерилизации, выбор одним нажатием кнопки.\r\n    Усовершенствованный микропроцессор контролирует все функции и поддерживает\r\n    оптимальные условия стерилизации.\r\n</p>\r\n\r\n<p class=\"product-below-descr__text\">\r\n    Внутренние размеры кассеты: Д 280 мм x Ш 180 мм x В 35 мм, объём кассеты 1,8 л.,\r\n    вместительность резервуара: 4 л (дистиллированная вода) приблизительно 40\r\n    циклов.\r\n    Гарантия 1 год.\r\n</p>\r\n\r\n<h3 class=\"product-below-descr__header\">\r\n    Технические характеристики:\r\n</h3>\r\n\r\n<ul class=\"product-below-descr__list descr-list\">\r\n    <li class=\"descr-list__item\">Напряжение питания 220 В/50Гц,</li>\r\n    <li class=\"descr-list__item\">Максимальная потребляемая мощность 1300 Вт,</li>\r\n    <li class=\"descr-list__item\">Габариты (ш х в х г) 415 х 150 х 480 мм, вес 21 кг.\r\n    </li>\r\n</ul>\"\"', 3),
(2, 5, 'Tempo 9 ELX cart - подкатной модуль для стоматологической установки', 2, 'Италия', 559000, '<h3 class=\"product-below-descr__header\">\r\nТЕMPO 9 ELX CART - мобильный автономный модуль врача на 4 инструмента.\r\n</h3>\r\n\r\n<h3 class=\"product-below-descr__header\">\r\n    Технические характеристики:\r\n</h3>\r\n\r\n<ul class=\"product-below-descr__list descr-list\">\r\n    <li class=\"descr-list__item\">3-функциональный пистолет вода-воздух MINIMATE со съемным автоклавируемым корпусом;</li>\r\n    <li class=\"descr-list__item\">Свободное гнездо;\r\n</li>\r\n    <li class=\"descr-list__item\">Электрический микромотор Bien-Air с подсветкой, раздельной подачей воздуха и воды для спрея, с продувкой (chip blower);\r\n</li>\r\n <li class=\"descr-list__item\">\r\nТурбинный шланг c разъемом Midwest с подсветкой и функцией продувки без вращения турбины (Chip blower).\r\n</li>\r\n<li class=\"descr-list__item\">Емкость автономной воды с переключением на водопроводную воду.\r\n</li>\r\n<li class=\"descr-list__item\">Напольный блок подводок.\r\n</li>\r\n</ul>', 2),
(6, 6, 'Carving plus - стоматологическая установка с верхней подачей', 2, 'Италия', 1440870, '<p class=\"product-below-descr__text\">\r\nСтоматологическая установка OMS Universal C (Carving) PLUS используется в стоматологических кабинетах и клиниках для осмотра ротовой полости пациентов, лечения зубов и выполнения других стоматологических процедур. Модель оснащена съемной плевательницей с автоклавируемыми канюлями смыва плевательницы и наполнения стакана для надежной гигиенической обработки, бесщеточным микромотором с эндодонтическими функциями, звуковым сигналом при обратном направлении вращения электромотора, бортиком на столике врача, кнопкой вызова ассистента, и электрическим бесколлекторным микромотором BIEN AIR MCX LED со светодиодной подсветкой, раздельной подачей спрея и продувкой.\r\n</p>', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `vendors`
--

CREATE TABLE `vendors` (
  `id` int NOT NULL,
  `img` varchar(512) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vendors`
--

INSERT INTO `vendors` (`id`, `img`, `name`, `descr`, `link`) VALUES
(27, '5866158953352ac2697e0355df80b23bfcb834c4-7.png', 'Стомус', 'Группа компаний «Стомус» почти 30 лет является ведущим научно-практическим и экспертным центром в области стоматологии. Ее бессменным лидером и главой является Наталья Вячеславовна Черновол, которая все эти годы вдохновляет и реализовывает каждый из амбициозных проектов компании. На данный момент в состав Группы компаний входят: Стоматологический центр «СТОМУС», зуботехническая лаборатория полного цикла «Стомус iLab», сеть торговых компаний и учебный центр «Стомус», а также недавно построенный Научно-Производственный Комплекс «ART Стомус». О каждом из них в нескольких строках:', 'https://stomus.ru/'),
(2, '3ca785a10526042d8554871891c51dbf81e0633b-head_rus_12.jpg', 'Telos', 'С 1975 года компания Telos занимается разработкой и внедрением технологий в области травматологии и ортопедии.\r\n \r\nНа счету компании такие разработки как: комплекс для лечения переломов трубчатых костей,технология диагностики разрывов связок голеностопа и коленного сустава, система диагностики разрыва локтевой коллатеральной связки большого пальца, комплекс для обследования передней и задней крестообразных связок коленного сустава, разработка и производство искусственных связок, инструменты для проведения операций по имплантации искусственных связок коленного сустава.', 'https://telos-healthcare.ru/index.php/o-kompanii'),
(3, 'a882172404b4efde208e226bdebd890f4467a01d-inno-logo.svg', 'ИННО ИМЛПАНТ', 'Компания ИННО Имплант РУ была создана с целью представления на российском рынке передовых мировых технологий, материалов и оборудования в области стоматологической имплантологии. ', 'https://www.inno-implant.ru/'),
(4, '9bb13eeff51b137fb5d2e579510b093ffeab8f44-stomatorg.png', 'Stomatorg', 'Крупнейший дистрибьютор высококачественного оборудования, расходных материалов, инструментов для стоматологических клиник и зуботехнических лабораторий на территории РФ.  ', 'https://stomatorg.ru/company/index.php'),
(5, '502fb0540e7e50210bb61902a6e7affb2477765b-35fb46kmvpxfz5pmrxvynw28xudud8j7.png', 'Алмадез', 'Производитель дезинфицирующих средств ООО «Базовая дезинфекция» зарекомендовал себя на рынке с 2009 года. Главным продуктом является бренд «Алмадез», представленный в широком разнообразии специальных дезсредств.', 'https://almadez.ru/'),
(6, '6481a05516175b873e4233bf72f74b264025a206-pharmadental.png', 'PharmaDental', 'Компания Pharmadental – крупнейший поставщик оборудования для стоматологий на территории России. ', 'https://www.pharma-dental.ru/'),
(7, 'medtest.svg', 'Медтест', 'Специализируются на производстве медицинского оборудования и разработке различных упаковочных решений для пищевой, медицинской и химической промышленности.\r\n\r\n', 'https://www.medtest.ltd/'),
(8, 'eb6aac33835244d42c89aaf39c1ffe0f6a19762e-botiss-PhotoRoom.png-PhotoRoom.png', 'Bottis', 'Botiss biomaterials – одна из ведущих компаний в области регенерации костной и мягких тканей, на 100% сфокусированная на создании регенерационных материалов именно для стоматологии. Это инновационная, клинически ориентированная биотехнологичная компания, головной офис и производственные мощности которой находятся в Берлине. Подробную информацию о botiss biomaterials можно найти на сайте botiss-dental.com\r\n\r\n', 'https://botissplus.ru/');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `ord`
--
ALTER TABLE `ord`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
