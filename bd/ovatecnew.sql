-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 20:10:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ovatecnew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Procesador', 'Cerebro del sistema, justamente procesa todo lo que ocurre en la PC y ejecuta todas las acciones que existen.', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(2, 'Memoria y almacenamiento', 'Disco duro, SSD', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(3, 'Mouse', 'Accesorio de computadora', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(4, 'Audifonos', 'Aparato electrónico que se usa dentro o detrás de la oreja. Amplifica ciertos sonidos', '2022-12-20 23:43:15', '2022-12-20 23:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `ruc` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `dni`, `ruc`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Nolberto Solano', '65453432', '34563445675', 'Victor larco 564, Trujillo', '956456734', 'santicarsola@gmail.com', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(2, 'Brayan Moya', '76534452', '34567823542', 'Cesas vallejo 123, Rinconada', '908675645', 'moya56@gmail.com', '2022-12-20 23:43:15', '2022-12-20 23:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_10_15_233344_create_categories_table', 1),
(6, '2022_10_15_235230_create_providers_table', 1),
(7, '2022_10_17_014044_create_permission_tables', 1),
(8, '2022_11_03_003315_create_products_table', 1),
(9, '2022_11_06_014201_create_clients_table', 1),
(10, '2022_11_11_005448_create_purchases_table', 1),
(11, '2022_11_11_010125_create_purchase_details_table', 1),
(12, '2022_11_11_031509_create_sales_table', 1),
(13, '2022_11_11_031833_create_sale_details_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'categories.index', 'Ver las categorias', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(2, 'categories.create', 'Crear categorias', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(3, 'categories.edit', 'Editar categorias', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(4, 'categories.destroy', 'Eliminar categorias', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(5, 'categories.show', 'Ver detalles de categorias', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(6, 'providers.index', 'Ver los proveedores', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(7, 'providers.create', 'Crear proveedores', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(8, 'providers.edit', 'Editar proveedor', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(9, 'providers.destroy', 'Eliminar proveedor', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(10, 'providers.show', 'Ver detalles de proveedores', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(11, 'roles.index', 'Ver los roles', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(12, 'roles.create', 'Crear roles', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(13, 'roles.edit', 'Editar roles', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(14, 'roles.destroy', 'Eliminar roles', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(15, 'roles.show', 'Ver detalles de roles', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(16, 'users.index', 'Ver usuarios', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(17, 'users.create', 'Crear usuarios', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(18, 'users.edit', 'Editar usuarios', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(19, 'users.destroy', 'Eliminar usuarios', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(20, 'users.show', 'Ver detalles de usuarios', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(21, 'products.index', 'Ver productos', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(22, 'products.create', 'Crear productos', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(23, 'products.edit', 'Editar productos', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(24, 'products.destroy', 'Eliminar productos', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(25, 'products.show', 'Ver detalles de productos', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(26, 'clients.index', 'Ver clientes', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(27, 'clients.create', 'Crear clientes', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(28, 'clients.edit', 'Editar clientes', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(29, 'clients.destroy', 'Eliminar clientes', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(30, 'clients.show', 'Ver detalles de clientes', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(31, 'purchases.index', 'Ver compras', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(32, 'purchases.create', 'Crear compras', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(33, 'purchases.edit', 'Editar compras', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(34, 'purchases.destroy', 'Eliminar compras', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(35, 'purchases.show', 'Ver detalles de compras', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(36, 'sales.index', 'Ver ventas', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(37, 'sales.create', 'Crear ventas', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(38, 'sales.edit', 'Editar ventas', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(39, 'sales.destroy', 'Eliminar ventas', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(40, 'sales.show', 'Ver detalles de ventas', 'web', '2022-12-20 23:43:15', '2022-12-20 23:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `sell_price` decimal(12,2) NOT NULL,
  `status` enum('ACTIVE','DEACTIVATED') NOT NULL DEFAULT 'ACTIVE',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `stock`, `image`, `sell_price`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'MEMORIA 64GB (32*2) DDR5 BUS 5600MHZ G.SKILL TRIDENT Z5 RGB', 12, '1671561811_jpg', '1659.80', 'ACTIVE', 2, '2022-12-20 23:43:15', '2022-12-20 23:43:31'),
(2, '2', 'CPU INTEL CORE I9-13900K 24-CORE (8P+16E) 36MB', 6, '1671561816_jpg', '2779.20', 'ACTIVE', 1, '2022-12-20 23:43:15', '2022-12-20 23:43:36'),
(3, '3', 'Razer Viper Mini negro', 30, '1671561824_jpg', '118.20', 'ACTIVE', 3, '2022-12-20 23:43:15', '2022-12-20 23:43:44'),
(4, '4', 'Logitech G G333 K/DA', 24, '1671561829_jpg', '195.00', 'ACTIVE', 4, '2022-12-20 23:43:15', '2022-12-20 23:43:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ruc_number` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`id`, `name`, `email`, `ruc_number`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Viviana S.A.C.', 'vivianachavez069@gmail.com', '34564534231', 'Abtao 60, Estación central', '903020812', '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(2, 'Lupe Mendoza S.A.C.', 'lupe_1997@hotmail.com', '98763456231', 'Acceso Sur, Puente alto', '903020800', '2022-12-20 23:43:15', '2022-12-20 23:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_date` datetime NOT NULL,
  `tax` decimal(8,2) DEFAULT NULL,
  `code_fact` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` enum('VALID','CANCELED') NOT NULL DEFAULT 'VALID',
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `purchases`
--

INSERT INTO `purchases` (`id`, `provider_id`, `user_id`, `purchase_date`, `tax`, `code_fact`, `total`, `status`, `picture`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-12-20 13:46:24', NULL, 1243, '3514.60', 'VALID', NULL, '2022-12-20 23:46:24', '2022-12-20 23:46:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '1659.80', '2022-12-20 23:46:24', '2022-12-20 23:46:24'),
(2, 1, 4, 1, '195.00', '2022-12-20 23:46:24', '2022-12-20 23:46:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14'),
(2, 'Repartidor', 'web', '2022-12-20 23:43:14', '2022-12-20 23:43:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `tax` decimal(8,2) DEFAULT NULL,
  `code_sale` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` enum('VALID','CANCELED') NOT NULL DEFAULT 'VALID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `client_id`, `user_id`, `sale_date`, `tax`, `code_sale`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-12-20 13:55:31', NULL, 5433, '1365.00', 'VALID', '2022-12-20 23:55:31', '2022-12-20 23:55:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sale_details`
--

INSERT INTO `sale_details` (`id`, `sale_id`, `product_id`, `quantity`, `price`, `discount`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 2, '195.00', '50.00', '2022-12-20 23:55:31', '2022-12-20 23:55:31'),
(2, 1, 4, 6, '195.00', '0.00', '2022-12-20 23:55:31', '2022-12-20 23:55:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fabricio Rodriguez', 'fabricio-1998-xd@hotmail.com', NULL, '$2y$10$LIm1KctGr13SnGB11s1szOvHsx3r7spB5eZftTLcLOaTlPIQsg.ZO', NULL, NULL, NULL, NULL, '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(2, 'Admin', 'admin@hotmail.com', NULL, '$2y$10$RMdoeK.UduiZ7xKZ93HcIO7DEqyp1v5w9YqOinWEGgKWYKbe/kYJm', NULL, NULL, NULL, NULL, '2022-12-20 23:43:15', '2022-12-20 23:43:15'),
(3, 'Tatiana', 'tatiana23@gmail.com', NULL, '$2y$10$6tENRYdquhZnE/7OpdWc1.jvW9WP2MFYKwFgd1EC.SUdn6JJTe4Oi', NULL, NULL, NULL, NULL, '2022-12-20 23:43:15', '2022-12-20 23:43:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_dni_unique` (`dni`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`),
  ADD UNIQUE KEY `clients_ruc_unique` (`ruc`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `providers_name_unique` (`name`);

--
-- Indices de la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purchases_code_fact_unique` (`code_fact`),
  ADD KEY `purchases_provider_id_foreign` (`provider_id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_details_purchase_id_foreign` (`purchase_id`),
  ADD KEY `purchase_details_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sales_code_sale_unique` (`code_sale`),
  ADD KEY `sales_client_id_foreign` (`client_id`),
  ADD KEY `sales_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_details_sale_id_foreign` (`sale_id`),
  ADD KEY `sale_details_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`),
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `purchase_details_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `sale_details`
--
ALTER TABLE `sale_details`
  ADD CONSTRAINT `sale_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sale_details_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
