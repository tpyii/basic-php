-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Окт 05 2021 г., 12:22
-- Версия сервера: 5.7.32
-- Версия PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basic-php`
--
CREATE DATABASE IF NOT EXISTS `basic-php` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
USE `basic-php`;

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `views` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `views`, `product_id`) VALUES
(1, '01.jpg', 27, 1),
(2, '02.jpg', 2, 2),
(3, '03.jpg', 1, 3),
(4, '04.jpg', 5, 4),
(5, '05.jpg', 5, 5),
(6, '06.jpg', 5, 6),
(7, '07.jpg', 1, 7),
(8, '08.jpg', 4, 8),
(9, '09.jpg', 5, 9),
(10, '10.jpg', 8, 10),
(11, '11.jpg', 4, 11),
(12, '12.jpg', 2, 12),
(13, '13.jpg', 14, 13),
(14, '14.jpg', 5, 14),
(15, '15.jpg', 7, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `body`, `price`) VALUES
(1, 'Sit debitis consequuntur molestias repudiandae atque ipsum.', 'Beatae ea voluptates magni quas pariatur. Id omnis voluptates ab saepe ipsam ut. Iure ut a sequi officia. Velit est maxime consequatur magni omnis esse.\nOdio praesentium officia officia enim harum saepe vel. Cumque quia ea eligendi exercitationem ut quia atque. Magni et dolor sit itaque sint neque quia.\nEos ipsam vitae mollitia qui voluptates. Laborum eos numquam perferendis beatae. Distinctio iure ipsam eius id.', '10.00'),
(2, 'At sit provident voluptate ut illum sed rerum qui.', 'Quisquam repellat dolor sit voluptate. Assumenda nihil sequi veritatis reiciendis soluta provident asperiores. Aut quis voluptas voluptates sunt et saepe.\nOmnis enim molestias ut ut repellendus sed laudantium et. Non qui rem esse modi ut. Qui minima modi placeat.\nDebitis assumenda illo aut molestiae accusamus dolor. Quasi quam aut et. Ut architecto consequuntur deserunt deserunt. Velit commodi non natus aliquid qui neque assumenda.', '20.00'),
(3, 'Repellat animi deleniti qui sit pariatur nostrum aliquid porro.', 'Quia enim aperiam pariatur delectus cum veniam aut ut. Rerum aperiam velit labore. Dolores quae magnam corrupti nulla repellat sit autem. Dicta ut nam saepe consequatur fuga soluta.\nIllo ea est eos quibusdam aut ipsum fugit. Sunt unde nobis ipsam earum qui libero quia. Magni cum nemo dolorem mollitia expedita fuga atque. Quae optio rem cum labore.\nMolestiae porro a quia et est. Qui est repellat odio dolor ut vel porro. Dolorem eveniet laboriosam assumenda excepturi.', '30.00'),
(4, 'Mollitia illum velit tempora qui aliquam aut repudiandae autem.', 'Consequatur occaecati vitae aliquid distinctio quam. Quibusdam praesentium nisi eligendi id doloribus quaerat. Ut quos laudantium totam provident eius atque et. Odio aut aspernatur dolorem consequatur. Dolorem itaque et dicta alias quidem repellat impedit perferendis.\nAspernatur officiis ut omnis quia. Non ut ut debitis harum aut. Non ex quos eos repellendus. Nihil rerum non voluptas debitis.', '10.00'),
(5, 'Consequatur et aut sunt.', 'Atque repellendus explicabo eum saepe. Veritatis ut et dolores praesentium. Placeat aspernatur qui et inventore velit nobis. Et dolores et rem non qui consectetur velit.\nSed qui nisi dolor sit. Officiis laborum excepturi aliquam beatae consequuntur corrupti qui.\nOfficiis vero modi adipisci. Sit perspiciatis soluta ab magni eos excepturi beatae itaque. Totam aperiam veniam quasi ratione.', '35.00'),
(6, 'Minima et voluptas totam eaque.', 'Sit est quod aut. Rerum tempore asperiores aspernatur est aspernatur quis vero. Quia aut facere animi et qui.\nHic illo excepturi sequi. Enim voluptatem animi architecto unde minima cum voluptatem. Laboriosam tenetur officiis pariatur inventore.\nOfficia nemo minima eveniet delectus. Quidem quod esse est. Tenetur corporis eaque sed perferendis.', '50.00'),
(7, 'Minus repellat necessitatibus nam voluptatem nemo ut sint.', 'Harum inventore ipsa autem et. Alias quas velit accusantium laborum. Ipsum impedit qui exercitationem autem est. Delectus delectus est magnam est.\nCulpa quos consectetur quas laboriosam hic consectetur ut ab. Atque ut eos iste alias quaerat odit. Ut atque ipsum pariatur eveniet. Magnam aut eius est et est reprehenderit.', '45.00'),
(8, 'Magni ratione quo aperiam.', 'Est porro a ex non est ut. Voluptas vel non labore molestiae quibusdam deserunt. Explicabo nemo adipisci repudiandae numquam eaque dolorem iure. Commodi maiores suscipit veritatis corrupti ut itaque velit.\nDucimus voluptate fugiat et. Laboriosam expedita non impedit facere. Quo quibusdam aut vitae aspernatur pariatur tenetur.\nDoloribus velit eum accusamus rem voluptas. Ut sed qui aspernatur minus nisi. Aut quasi quia enim dolorem et et suscipit. Est rerum aut alias officiis.', '80.00'),
(9, 'Amet quia quia temporibus unde labore minima.', 'Fugiat rerum dignissimos quasi non a. Dolore pariatur et optio consequatur molestiae iste et. Ut veritatis quis praesentium fugit id sequi sit qui. Repellendus quae expedita qui rem.\nVelit omnis minima nostrum ut neque qui. Odio quia tenetur culpa atque non sit. Unde excepturi repellat occaecati. Quas voluptas cupiditate voluptas ut nulla et repellendus.', '100.00'),
(10, 'Deleniti consequatur dolorem velit et culpa.', 'Mollitia qui ea quis non. Dolores nam et omnis quo delectus laborum. Aut quod occaecati velit praesentium aut et.\nEnim fugit saepe eos illo itaque. Voluptatem qui ullam rem. Sed sed et sit.\nSunt id omnis cum vitae molestiae. Sint rerum rerum est sunt tenetur aut consequuntur sunt. Earum vero harum vel voluptas totam sapiente quia. Ut id eveniet beatae sapiente quidem impedit.', '55.00'),
(11, 'Voluptas sit reiciendis earum rerum et hic a.', 'Similique impedit provident aspernatur provident occaecati omnis. Ut quidem possimus nemo ad dignissimos facere sunt suscipit. Occaecati illo omnis consequatur ad inventore saepe. Sint pariatur magnam unde ipsa.\nLibero modi enim exercitationem nesciunt rerum delectus aut. Quis at ex vel perferendis. Est cum delectus repellat sed facilis architecto.', '15.00'),
(12, 'Esse inventore dolores iste minus pariatur et voluptas aut.', 'Consequatur minima consequatur impedit maxime illo deserunt. Sit ipsam ullam et et dolorum suscipit nemo.\nVoluptatem dolorem enim nisi molestiae fugit dolore voluptas. Velit quos aperiam animi nostrum. Eum est dolorem et.\nEos et cupiditate incidunt quisquam maxime quo. Doloribus omnis est non voluptatibus aut minima animi nam.\nEos et inventore sit maxime qui dignissimos minima. Harum incidunt consequatur recusandae dolores ullam iure quia. Totam quo iste reprehenderit id odit non ab.', '60.00'),
(13, 'Assumenda sed rem quae ipsam rerum earum animi.', 'Tempore voluptas voluptatem ea eveniet autem. Aliquam deserunt sunt dolor quis quia doloribus. Animi mollitia debitis impedit cum ut fugit velit. Iste totam autem id vero in perspiciatis.\nSuscipit neque beatae laudantium voluptatem aut consequatur. Doloremque eveniet iste veniam sit laudantium accusamus quisquam. Blanditiis nostrum sit molestiae nostrum nihil voluptatum et. Aspernatur labore rerum accusamus.', '75.00'),
(14, 'Omnis facere sed et.', 'Ab autem omnis eaque sed est. Nihil doloribus ut laborum molestias voluptatem atque alias. Esse ad sit voluptatem est qui est perferendis maiores.\nDeserunt explicabo rerum veniam. Et doloribus qui consequuntur vero velit est voluptas.\nAnimi deleniti in qui tempora eius. Quibusdam tempora et et assumenda enim. Sint et alias est nulla ad animi nesciunt vel. Autem enim repudiandae perferendis tempora voluptatem delectus.', '90.00'),
(15, 'Magni magnam deleniti praesentium sint mollitia eum minus.', 'Ratione aut rem expedita corrupti eum voluptate. Cum ipsum autem voluptates reprehenderit non pariatur. Voluptate ut sunt quos.\nVoluptatem repellendus dolore vel est consequatur perspiciatis error odio. Nihil ratione consequatur accusamus est qui porro dolore. Ab quo repellat et pariatur voluptatibus atque error. Aut alias ipsa id iure quasi ut.', '110.00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$FcP7vF/HgoYIhHQ8WJdHH.RmNh9yHu1ySMvhGt7kxMND.UIYaYrgO');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basket_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedback_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
