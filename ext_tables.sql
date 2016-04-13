#
# Table structure for table 'pages'
#
CREATE TABLE pages (
    tx_koningopengraph_type varchar(255) DEFAULT '' NOT NULL,
    tx_koningopengraph_title varchar(255) DEFAULT '' NOT NULL,
    tx_koningopengraph_description text,
    tx_koningopengraph_image int(11) unsigned DEFAULT '0' NOT NULL
);