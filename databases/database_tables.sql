use db_rightprice;
-- Table Session
CREATE TABLE `tbl_session` (
    `session_id` varchar(255) NOT NULL,
    `user_id` int(10) NOT NULL,
    `login_time` datetime NOT NULL,
    `Status` int(1) NOT NULL
);
-- Table User 
CREATE TABLE `tbl_user` (
    `user_id` int(11) NOT NULL,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(16) NOT NULL,
    `verification_code` varchar(255) NOT NULL,
    `verified` int(1) NOT NULL
);

ALTER TABLE `tbl_session` ADD PRIMARY KEY (`session_id`);
ALTER TABLE `tbl_user` ADD PRIMARY KEY (`user_id`);
ALTER TABLE `tbl_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 19;
--Table Category
CREATE TABLE `tbl_pcategory` (
    `category_id` INT(11) NOT NULL AUTO_INCREMENT,
    `category_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`category_id`)
);

-- Table Blog

CREATE TABLE `tbl_blog` (
    `blog_id` INT(11) NOT NULL AUTO_INCREMENT,
    `blog_author` VARCHAR(255) NOT NULL,
    `blog_published_date` DATE NOT NULL,
    `blog_title` VARCHAR(1000) NOT NULL,
    `blog_picture` VARCHAR(255) NOT NULL,
    `blog_contents` VARCHAR(2000) NOT NULL,
    PRIMARY KEY (`blog_id`)
);
--Table Products
CREATE TABLE `tbl_products` (
    `user_id` INT(10) NOT NULL,
    `product_id` INT(10) NOT NULL AUTO_INCREMENT,
    `product_name` VARCHAR(255) NOT NULL,
    `product_category` INT(4) NOT NULL,
    `product_price` FLOAT NOT NULL,
    `product_unit` VARCHAR(10) NOT NULL,
    `product_image` VARCHAR(255) NOT NULL,
    `product_short_image` VARCHAR(255) NOT NULL,
    `product_description` VARCHAR(1000) NOT NULL,
    `product_added` DATE NOT NULL,
    `product_status` VARCHAR(255) NOT NULL,
    `sale_type` VARCHAR(8) NOT NULL,
    `keyword` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`product_id`),
    CONSTRAINT `fk_product_category` FOREIGN KEY (`product_category`) REFERENCES `tbl_pcategory` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
);
-- Table Wishlist
CREATE TABLE `tbl_wishlist_item` (
    `wishlist_item_id` INT(11) NOT NULL AUTO_INCREMENT,
    `product_id` INT(11) NOT NULL,
    `quantity` FLOAT NOT NULL,
    `user_id` INT(11) NOT NULL,
    `product_status` VARCHAR(21) NOT NULL,
    PRIMARY KEY (`wishlist_item_id`),
    CONSTRAINT `fk_wishlist_product` FOREIGN KEY (`product_id`) REFERENCES `tbl_products` (`product_id`) ON DELETE CASCADE
);

-- Table Order
CREATE TABLE `tbl_order` (
    `order_id` INT NOT NULL AUTO_INCREMENT,
    `buyer_id` INT NOT NULL,
    `seller_id` INT NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `address_secondary` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `state` VARCHAR(2) NOT NULL,
    `zip` VARCHAR(10) NOT NULL,
    `quantity` FLOAT NOT NULL,
    `product_id` INT NOT NULL,
    `order_status` VARCHAR(10) NOT NULL,
    `phone` INT(10) NOT NULL,
    PRIMARY KEY (`order_id`)
);

-- Table Auction Offer
CREATE TABLE `tbl_auction_offer` (
    `offer_id` int(11) NOT NULL AUTO_INCREMENT,
    `product_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `amount` float NOT NULL,
    PRIMARY KEY (`offer_id`)
);

-- Table Auction Details
CREATE TABLE `tbl_auction_details` (
    `auction_id` int(11) NOT NULL AUTO_INCREMENT,
    `product_id` int(11) NOT NULL,
    `total_offer` int(11) NOT NULL,
    PRIMARY KEY (`auction_id`)
);