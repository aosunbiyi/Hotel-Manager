

USE hotel_db;



CREATE TABLE settlement_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    settlement_name VARCHAR(255),
    can_generate_receipt TINYINT(4),
       prefix VARCHAR(255),
    suffix VARCHAR(255),
    start_index  BIGINT(20),
    current_index BIGINT(20),
    alias  VARCHAR(255),
    active TINYINT(4),
    payment_option  VARCHAR(255),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE settlements(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    settlement_type_id INT NOT NULL,
    settlement_name VARCHAR(255),
    prefix VARCHAR(255),
    suffix VARCHAR(255),
    card_holder_name  VARCHAR(255),
    card_name VARCHAR(255),
    prefix VARCHAR(255),
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY business_source_types_key_200(business_source_types_id) REFERENCES  business_source_types(id)
);






