CREATE TABLE designation(
    designation_id int AUTO_INCREMENT,
    name varchar(30),
    parent_id int,
    PRIMARY KEY (designation_id)
);
CREATE TABLE users(
	user_id int AUTO_INCREMENT,
    name varchar(30),
    email varchar(30),
    password varchar(30),
    designation_id int,
    PRIMARY KEY (user_id),
    FOREIGN KEY (designation_id) REFERENCES designation (
 	designation_id)
);
CREATE TABLE application (
    application_id int AUTO_INCREMENT,
    message varchar(1000) not null,
    approved varchar(30),
    rejected varchar(30),
    status varchar(30),
    time date,
    PRIMARY KEY (application_id)
);
CREATE TABLE belongs_to(
    user_id int,
    application_id int,
    PRIMARY KEY (user_id,application_id),
    FOREIGN KEY (user_id) REFERENCES users (user_id),
    FOREIGN KEY (application_id) REFERENCES application (application_id)
);

CREATE TABLE notice_board (
  notice_board_id int(11) NOT NULL AUTO_INCREMENT,
  notice_board_details MEDIUMTEXT NOT NULL,
  notice_board_notice_given_user int(11) NOT NULL,
  notice_board_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  notice_board_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (notice_board_id),
  FOREIGN KEY (notice_board_notice_given_user) REFERENCES users(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;