# board

# 先建立資料庫
CREATE DATABASE board default character set utf8;

CREATE TABLE `boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `top` tinyint(4) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `boards` (`id`, `title`, `content`, `top`, `time`, `created_at`, `updated_at`) VALUES
(1, 'NBA', 'xxx加入湖人隊', 1, '2019-07-10 07:15:56', '2019-07-09 16:00:00', '2019-07-09 16:00:00'),
(2, 'ttteeeee', 'ttt111tttt', 1, '2019-08-07 02:59:00', '2019-07-09 23:27:40', '2019-07-10 01:32:00'),
(8, 'test', 'wwwwww', 1, '2019-07-09 19:06:00', '2019-07-10 00:01:55', '2019-07-10 00:01:55'),
(9, '我我我', '我我我2222', 1, '2019-07-09 20:05:00', '2019-07-10 00:02:52', '2019-07-10 01:30:10'),
(11, '我我我eeeee', '內文', 1, '2019-07-09 20:05:00', '2019-07-10 00:11:38', '2019-07-10 01:32:32'),
(12, '我我我', '內文', 1, '2019-07-09 20:05:00', '2019-07-10 00:11:51', '2019-07-10 00:11:51'),
(13, '我我我', '內文', 1, '2019-07-09 20:05:00', '2019-07-10 00:12:51', '2019-07-10 00:12:51'),
(14, '我我我', '內文', 1, '2019-07-09 20:05:00', '2019-07-10 00:12:58', '2019-07-10 00:12:58'),
(15, '我我我', '內文', 1, '2019-07-09 20:05:00', '2019-07-10 00:13:13', '2019-07-10 00:13:13');

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2019_07_10_064140_create_boards_table', 1);

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123456', '2019-07-09 16:00:00', '2019-07-09 16:00:00');

ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

ALTER TABLE `boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

# 說明

新增登入功能, 資料庫有一筆 user 資料, 帳號 admin 密碼 123456
公告部分已經有先塞一些資料
新增分頁功能, 每頁5筆
有做權限控管, 未登入只能檢視, 登入後可以新增修改刪除
