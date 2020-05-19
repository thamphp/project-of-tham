CREATE DATABASE IF NOT EXISTS purchase CHARACTER SET utf8 collate utf8_general_ci;
use purchase;
CREATE TABLE IF NOT EXISTS users (
id INT(11) PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(255) NOT NULL COMMENT "Tên đăng nhập",
password VARCHAR(255) NOT NULL COMMENT "Mật khẩu đăng nhập",
first_name VARCHAR(255)  COMMENT "Fist name",
last_name VARCHAR(255)  COMMENT "Last name",
phone  int(11) COMMENT 'SĐT user' ,
address  varchar(255) COMMENT 'Địa chỉ user' ,
email  varchar(255)   COMMENT 'Email của user' ,
avatar VARCHAR(255)  COMMENT "File ảnh đại diện",
jobs VARCHAR(255)  COMMENT "Nghề nghiệp",
last_login DATETIME COMMENT "Lần đăng nhập gần đây nhất",
facebook VARCHAR(255) COMMENT "Link facebook",
status TINYINT(3) DEFAULT 0 COMMENT "Trạng thái danh mục: 0 - Inactive, 1 - Active",
created_at TIMESTAMP DEFAULT  CURRENT_TIMESTAMP COMMENT "Ngày tạo",
updated_at DATETIME COMMENT "Ngày cập nhật cuối"
);