CREATE TABLE tx_overview_domain_model_overview (
    title varchar(200) DEFAULT '' NOT NULL,
    firstheade varchar(200) DEFAULT '' NOT NULL,
    firstsubhead varchar(200) DEFAULT '' NOT NULL,
    firstimage int(11) unsigned DEFAULT '0' NOT NULL,
    secondheade varchar(200) DEFAULT '' NOT NULL,
    secondsubhead varchar(200) DEFAULT '' NOT NULL,
    secondimage int(11) unsigned DEFAULT '0' NOT NULL,
    description text,

    firstfacebookurl varchar(200) DEFAULT '' NOT NULL,
    firsttwitterurl varchar(200) DEFAULT '' NOT NULL,
    firstinstagramurl varchar(200) DEFAULT '' NOT NULL,
    firstlinkedinurl varchar(200) DEFAULT '' NOT NULL,
    firstyoutubeurl varchar(200) DEFAULT '' NOT NULL,

    secondfacebookurl varchar(200) DEFAULT '' NOT NULL,
    secondtwitterurl varchar(200) DEFAULT '' NOT NULL,
    secondinstagramurl varchar(200) DEFAULT '' NOT NULL,
    secondlinkedinurl varchar(200) DEFAULT '' NOT NULL,
    secondyoutubeurl varchar(200) DEFAULT '' NOT NULL,


    
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    
    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY hidden (hidden)
);