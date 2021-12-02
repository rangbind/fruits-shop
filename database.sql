
--create database
create database fruit_shop

--create fruit_master table
CREATE TABLE `fruit_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fruit_name` varchar(20) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci



CREATE TABLE `registration_page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `phone_no` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `confirmed_password` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci |

  
  user  | CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` int DEFAULT NULL,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci |


<<<<<<< HEAD
ALTER TABLE `user` CHANGE `role` `role` TINYINT(11) NULL DEFAULT '1';
=======

  user  | CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `phone_no` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `Address` varchar(80) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci 


>>>>>>> 0fe43e5727470b5f2f6ad76447f71b6cfb7b2fe6

  vijay ka table
  user  | CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci |


ALTER TABLE `fruit_master` ADD `image` VARCHAR(250) NOT NULL AFTER `quantity`;


/*
  1)what is add to cart
  2)technology
  3)project file structure
  4)database and table creating
  5)connect database
  6)display item from database
  7)add to cart items
  8)get total number of items in cart
  9)display item in cart
  10)detete specific items in cart
  11)detete all items in cart
  12)UPDATE items qty in cart
  13)checkout items

*/


<?php  
$key = 'fruit-shop';

//Encrypt Function
function encrypt($plainText, $key) {
    $secretKey = md5($key);
    $iv = substr( hash( 'sha256', "aaaabbbbcccccddddeweee" ), 0, 16 );
    $encryptedText = openssl_encrypt($plainText, 'AES-128-CBC', $secretKey, OPENSSL_RAW_DATA, $iv);
    return base64_encode($encryptedText);
}

//Decrypt Function
function decrypt($encryptedText, $key) {
    $key = md5($key);
    $iv = substr( hash( 'sha256', "aaaabbbbcccccddddeweee" ), 0, 16 );
    $decryptedText = openssl_decrypt(base64_decode($encryptedText), 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return $decryptedText;
}

//send response 
function sendResponse($status = 200, $data = [])
{
    header("Content-Type: text/json");
    http_response_code($status);
    echo json_encode($data);
    exit;
}

//get request data
$request = json_decode(file_get_contents('php://input'), 1);

function getRequestData()
{
    return $GLOBALS['request'];
}

 
?>