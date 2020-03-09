CREATE TABLE account(
	account_ID INTEGER NOT NULL AUTO_INCREMENT,
	account_username VARCHAR(50) NOT NULL,
	account_password VARCHAR(50) NOT NULL,
	
	CONSTRAINT account_ID_pk PRIMARY KEY(account_ID)
) ENGINE = INNODB;

CREATE TABLE account_details(
	ad_account_ID INTEGER NOT NULL,
	ad_firstname VARCHAR(50) NOT NULL,
	ad_lastname VARCHAR(50) NOT NULL,

  CONSTRAINT ad_account_ID_fk FOREIGN KEY(ad_account_ID) REFERENCES account(account_ID) ON DELETE CASCADE
) ENGINE = INNODB;

INSERT INTO account(account_username, account_password) VALUES ('serravp', md5('asdasd123'));
INSERT INTO account_details(ad_account_ID,ad_firstname, ad_lastname) VALUES (1,'Vincent Paul', 'Serra');
