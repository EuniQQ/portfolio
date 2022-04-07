-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 04 月 07 日 13:55
-- 伺服器版本： 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1100421`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `acc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pw` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', 'admin'),
(2, 'qq', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(11) NOT NULL,
  `icon` varchar(126) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `href` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `icon`, `text`, `href`, `sh`) VALUES
(1, '<i class=\"fas fa-envelope fa-2x\"></i>', 'eunice911qq@gmail.com', '', 1),
(3, '<i class=\"fab fa-github fa-2x\"></i>', 'https://github.com/EuniQQ', 'https://github.com/EuniQQ', 1),
(4, '<i class=\"fas fa-lightbulb fa-2x\"></i>', '220.128.133.15/s1100421', '220.128.133.15/s1100421', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `theme` int(11) NOT NULL,
  `body_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `main_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `footer_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `color`
--

INSERT INTO `color` (`id`, `theme`, `body_color`, `main_color`, `footer_color`) VALUES
(1, 0, 'rgb(160, 149, 143)', 'rgb(253, 242, 235)\r\n', 'rgb(158, 135, 70)\r\n'),
(2, 1, 'rgb(255, 255, 255)', 'rgb(243, 243, 238)\r\n', 'rgb(209, 205, 170)');

-- --------------------------------------------------------

--
-- 資料表結構 `dm`
--

CREATE TABLE `dm` (
  `id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '作品標題',
  `href` text COLLATE utf8mb4_unicode_520_nopad_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci COMMENT='受訓期間作品';

--
-- 傾印資料表的資料 `dm`
--

INSERT INTO `dm` (`id`, `img`, `text`, `href`, `sh`) VALUES
(1, 'travelDM.png', 'T R A V E L <br> D M ', 'http://220.128.133.15/s1100421/travel_DM.jpg', 1),
(2, '2022calendar.png', '2 0 2 2 <br> C A L E N D A R', 'http://220.128.133.15/s1100421/2022_calendar.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `graphic`
--

CREATE TABLE `graphic` (
  `id` int(11) NOT NULL,
  `img_sm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '作品縮圖',
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '作品原圖',
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '替代文字',
  `sh` int(1) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci COMMENT='過往平面設計作品';

--
-- 傾印資料表的資料 `graphic`
--

INSERT INTO `graphic` (`id`, `img_sm`, `img`, `text`, `sh`, `rank`) VALUES
(8, '0.png', '0_lg.jpg', 'CIS設計', 1, 1),
(9, '1.png', '1_lg.png', '婚禮', 1, 2),
(10, '2.png', '2_lg.png', '611PPT封面', 1, 3),
(11, '3.png', '3_lg.png', '葡萄樹牆面大圖', 1, 4),
(12, '4-1.png', '4-1_lg.png', '以色列折頁', 1, 5),
(13, '4-2.png', '4-2_lg.png', '約瑟牧師DM', 1, 6),
(14, '4-3.png', '4-3_lg.png', '進化論壇DM', 1, 7),
(15, '4-4.png', '4-4_lg.png', 'DM', 1, 8),
(16, '5.png', '5_lg.png', '以色列尋根之旅', 1, 9),
(17, '6.png', '6_lg.png', '書籤名牌設計', 1, 10),
(18, '7.png', '7_lg.png', '記者會', 1, 12),
(19, '8.png', '8_lg.png', '合一DM', 1, 11),
(20, '9.png', '9_lg.png', 'LOGO設計', 1, 13),
(21, '10.png', '10_lg.png', '611官網底圖', 1, 14),
(22, '11.png', '11_lg.png', '活動T-shirt', 1, 15),
(23, '12.png', '12_lg.png', '奉獻信封設計', 1, 16),
(24, '13.png', '13_lg.png', '貼圖1', 1, 17),
(25, '14.png', '14_lg.png', '貼圖2', 1, 18),
(26, '15.png', '15_lg.png', '貼圖3', 1, 19),
(28, '16.png', '16_lg.png', '活動名牌', 1, 27);

-- --------------------------------------------------------

--
-- 資料表結構 `intro`
--

CREATE TABLE `intro` (
  `id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci;

--
-- 傾印資料表的資料 `intro`
--

INSERT INTO `intro` (`id`, `img`, `text`) VALUES
(1, 'eunice.png', '我是筠臻，求學時於復興美工科、台中科技大學 商業設計系，學習美術工藝、平面設計等相關技能。並於基督教機構擔任美編設計。\r\n2021年決定跨出舒適圈，盼望所長與網頁媒體結合，因而進入泰山職訓局，接受920小時php資料庫網頁設計課程訓練，目前仍持續學習中。');

-- --------------------------------------------------------

--
-- 資料表結構 `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `href` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci;

--
-- 傾印資料表的資料 `nav`
--

INSERT INTO `nav` (`id`, `name`, `href`, `sh`) VALUES
(2, 'ABOUT', '#aboutMe', 1),
(3, 'PROTFOLIO', '#frotfolio', 1),
(4, 'CONTACT', '#contact', 1),
(5, 'LOG IN', 'login.php', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `opt` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_id` int(11) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='vote投票系統';

--
-- 傾印資料表的資料 `options`
--

INSERT INTO `options` (`id`, `opt`, `topic_id`, `count`) VALUES
(17, '同意', 8, 3),
(18, '不同意', 8, 7),
(19, '同意', 9, 5),
(20, '不同意', 9, 5),
(21, '同意', 10, 2),
(22, '不同意', 10, 4),
(23, '同意', 11, 5),
(24, '不同意', 11, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci;

--
-- 傾印資料表的資料 `title`
--

INSERT INTO `title` (`id`, `img`, `text`, `sh`) VALUES
(3, 'bg.png', 'bgImg', 1),
(4, 'top_02.png', '01', 0),
(5, 'top_03.png', '03', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_src` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `topics`
--

INSERT INTO `topics` (`id`, `topic`, `img_src`, `sh`) VALUES
(8, '您是否同意核四啟封商轉發電？', '01.jpg', 0),
(9, '您是否同意政府應全面禁止進口含有萊克多巴胺之乙型受體素豬隻之肉品、內臟及其相關產製品？', '02.jpg', 1),
(10, '您是否同意公民投票案公告成立後半年內，若該期間內遇有全國性選舉時，在符合公民投票法規定之情形下，公民投票應與該選舉同日舉行？', '03.jpg', 0),
(11, '您是否同意中油第三天然氣接收站遷離桃園大潭藻礁海岸及海域？(北起觀音溪出海口，南至新屋溪出海口之海岸，由上述海岸最低潮線往外平行延伸五公里之海域)', '04.jpg', 1),
(12, '接踵疫苗了嗎?', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `name` varchar(11) COLLATE utf8_unicode_520_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci COMMENT='會員註冊資料';

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `email`, `name`, `gender`, `birthday`) VALUES
(1, '0980123123', '1234', '123', '123', 2, '2021-12-11'),
(2, 'admin', '1234', 'admin@gmail.com', 'admin', 1, '2021-12-21'),
(3, '0980123123', '1234', '123', '123', 2, '2021-12-11'),
(4, '0980123123', '1234', '123', '123', 2, '2021-12-11'),
(5, '889', '889', '889@gmail.com', '889', 1, '2021-12-21'),
(6, '777', '777', '777@gmail.com', '777', 2, '2021-12-23'),
(7, '555', '', '555@gmail.com', '555', 2, '2021-12-23');

-- --------------------------------------------------------

--
-- 資料表結構 `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_520_nopad_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci COMMENT='受訓期間作品';

--
-- 傾印資料表的資料 `web`
--

INSERT INTO `web` (`id`, `img`, `text`, `href`, `sh`) VALUES
(3, 'calendar.png', 'Calendar <br>萬 年 曆', 'http://220.128.133.15/s1100421/calendar/index.php?', 1),
(4, 'polling.png', 'Polling<br>投 票 系 統', 'http://220.128.133.15/s1100421/polling/index.php', 1),
(5, 'story.png', 'Story<br>五 頁 式 展 示 書', 'http://220.128.133.15/s1100421/story/index.php?page=1&language=Chinese', 1),
(7, 'api.png', 'API<br>資料串連', 'http://220.128.133.15/s1100421/ajax_api/chunChen.php', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `dm`
--
ALTER TABLE `dm`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `graphic`
--
ALTER TABLE `graphic`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `dm`
--
ALTER TABLE `dm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `graphic`
--
ALTER TABLE `graphic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
