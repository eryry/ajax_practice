-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-06-30 00:02:46
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `menus`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `menus`
--

CREATE TABLE `menus` (
  `m_id` int(24) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_cat` int(24) NOT NULL,
  `m_price` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `menus`
--

INSERT INTO `menus` (`m_id`, `m_name`, `m_cat`, `m_price`) VALUES
(1, '赤ワイン', 1, 600),
(2, '白ワイン', 1, 600),
(5, 'アラビアータ', 4, 800),
(6, 'ペペロンチーノ', 4, 600),
(7, 'カルパッチョ', 2, 1000),
(8, 'カプレーゼ', 2, 700),
(9, 'ブルスケッタ', 2, 500),
(10, 'スフォルマート', 2, 750),
(11, 'スプマンテ', 1, 900),
(12, 'ビール', 1, 500),
(13, 'ハイボール', 1, 500),
(14, 'ボトルワイン（赤）', 1, 3000),
(15, 'ボトルワイン（白）', 1, 3200),
(16, 'ランブルスコ', 1, 800),
(17, '牛肉のタリアータ', 3, 1800),
(18, 'ビステッカ', 3, 3500),
(19, 'アクアパッツァ', 3, 2100),
(20, 'コトレット', 3, 1200),
(21, 'ペポーゾ', 3, 1600),
(22, '牛肉のタルタル', 2, 2100),
(23, 'パンナコッタ', 5, 400),
(24, 'クレームブリュレ', 5, 700),
(25, 'カプチーノ', 1, 300),
(26, 'ジェラート', 5, 300),
(29, 'アフォガード', 5, 400),
(34, 'カタナーラ', 5, 500),
(35, 'ボロネーゼ', 4, 820),
(38, 'te3', 1, 400),
(41, 'latte', 1, 400),
(42, 'espresso', 1, 100),
(44, 'みず', 1, 20),
(45, '炭酸水', 1, 200),
(46, '炭酸水　大', 1, 300),
(47, '', 0, 0),
(48, '', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`m_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `menus`
--
ALTER TABLE `menus`
  MODIFY `m_id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
