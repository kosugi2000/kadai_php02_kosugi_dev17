-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2020 年 10 月 22 日 17:48
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_kadai_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `text` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `text`, `indate`) VALUES
(1, '人を動かす', 'URLsanpuru ', '良い本', '2020-10-20 22:06:31'),
(2, 'えんとつ町のプペル', 'https://www.amazon.co.jp/%E3%81%88%E3%82%93%E3%81%A8%E3%81%A4%E7%94%BA%E3%81%AE%E3%83%97%E3%83%9A%E3%83%AB-%E3%81%AB%E3%81%97%E3%81%AE-%E3%81%82%E3%81%8D%E3%81%B2%E3%82%8D/dp/4344030168', '良い本', '2020-10-21 20:29:47'),
(3, '鬼滅の刃', 'TEST', '映画も見ました', '2020-10-21 20:48:06'),
(4, 'メンズノンノ', 'https://www.mensnonno.jp/', 'おしゃれさん', '2020-10-21 22:21:58'),
(5, 'TEST', 'TEST', 'TEST', '2020-10-22 17:33:58'),
(9, 'test', 'test', 'test', '2020-10-22 17:44:10');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
