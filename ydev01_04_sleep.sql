-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-13 07:54:22
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ydev01_04_sleep`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `login_table`
--

CREATE TABLE `login_table` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `login_table`
--

INSERT INTO `login_table` (`id`, `username`, `email`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(22, '', 'aiko@docomo.ne.jp', '$2y$10$/xdW8JpvRFo5Cr/Ub.2CkuCBWxFbdNgf1rO94M1DwCP4o0RccYL8O', 0, 0, '2021-12-24 10:15:46', '2021-12-24 10:15:46'),
(23, '', 'aiko@docomo.ne.jp', '$2y$10$fW684cIcwRtICib9QuVWDuFluzs1VuPnOcQPXkqFPeLI0oPEA2JlC', 0, 0, '2022-01-13 14:18:41', '2022-01-13 14:18:41'),
(24, 'mika', 'mika@yahoo.co.jp', '$2y$10$HNHBubf24nLlLmJDGeQm5uR8uL004yEozLUXY51x1SFrAS3yN8q7e', 0, 0, '2022-01-13 15:18:42', '2022-01-13 15:18:42'),
(25, 'iroha', 'iroha@yahoo.co.jp', '$2y$10$Ilehzmsg8wlxcQk6kNkQp.Vf49Ty1JTQDe7TgHxm6EX/t3Cge8WSO', 0, 0, '2022-01-13 15:19:55', '2022-01-13 15:19:55');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
