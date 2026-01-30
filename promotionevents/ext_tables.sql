CREATE TABLE tx_promotionevents_domain_model_event (
    title varchar(200) DEFAULT '' NOT NULL,
    description text,
    promotiondate int(11) unsigned DEFAULT '0' NOT NULL,
    promotiontime int(11) unsigned DEFAULT '0' NOT NULL,
    location varchar(200) DEFAULT '' NOT NULL,
    locationlink varchar(1024) DEFAULT '',
    
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    
    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY hidden (hidden)
);