--  20160119
-- ------------------------------------------------

--  Add supplier(Enterprise) additionnal informations
DROP TABLE IF EXISTS my_supplier_additionnal_information;
CREATE TABLE `my_supplier_additionnal_information` (
	`id_supplier` INT(10) UNSIGNED NOT NULL,
	`siret` VARCHAR(64) NOT NULL,
	`company` VARCHAR(64) NOT NULL,
	`RCS immatriculation` VARCHAR(64) NOT NULL,
	`background_image` VARCHAR(64) NOT NULL,
	PRIMARY KEY (`id_supplier`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

--  Add association table
DROP TABLE IF EXISTS my_associations;
CREATE TABLE `my_associations` (
	`id_association` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64) NOT NULL,
	`date_add` DATETIME NOT NULL,
	`date_upd` DATETIME NOT NULL,
	`active` TINYINT(1) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id_association`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

--  Add discount to associations on product table
DROP TABLE IF EXISTS my_product_association_discount;
CREATE TABLE `my_product_association_discount` (
	`id_product` INT(10) UNSIGNED NOT NULL,
	`discount` DECIMAL(20,6) NOT NULL DEFAULT '0.000000',
	PRIMARY KEY (`id_product`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

--  Add discount to associations on orders table
DROP TABLE IF EXISTS my_order_association_gain;
CREATE TABLE `my_order_association_gain` (
	`id_order` INT(10) UNSIGNED NOT NULL,
	`discount` DECIMAL(20,6) NOT NULL DEFAULT '0.000000',
	`gain_price` DECIMAL(20,6) NOT NULL DEFAULT '0.000000',
	PRIMARY KEY (`id_order`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

--  Add association discount and don by cart products
DROP TABLE IF EXISTS my_cart_product_association;
CREATE TABLE `my_cart_product_association` (
	`id_cart` INT(10) UNSIGNED NOT NULL,
	`id_product` INT(10) UNSIGNED NOT NULL,
	`id_address_delivery` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`id_product_attribute` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`id_association` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`gain_price` DECIMAL(20,6) NOT NULL DEFAULT '0.000000',
	`date_add` DATETIME NOT NULL,
	PRIMARY KEY (`id_cart`, `id_product`, `id_product_attribute`, `id_address_delivery`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

--  Add tables for BI purpose 
--  gain by supplier, association and timeline
DROP TABLE IF EXISTS bi_fact_gain;
CREATE TABLE `bi_fact_gain` (
	`id_association` INT(10) UNSIGNED NOT NULL,
	`id_supplier` INT(10) UNSIGNED NOT NULL,
	`id_date` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`id_time` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`total_order` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`gain_price` DECIMAL(20,6) NOT NULL DEFAULT '0.000000',
	PRIMARY KEY (`id_association`, `id_supplier`, `id_date`, `id_time`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

-- TODO : date table to add