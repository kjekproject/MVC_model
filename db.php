<?php

$db = array(
    "CREATE DATABASE mvc_ex
        DEFAULT CHARACTER SET utf8
        DEFAULT COLLATE utf8_general_ci"
,
    "CREATE TABLE categories{
        id int AUTO_INCREMENT NOT NULL,
        name varchar(100) NOT NULL,
        PRIMARY KEY(id))"
,
    "CREATE TABLE articles(
        id int AUTO_INCREMENT NOT NULL,
        titel varchar(100) NOT NULL,
        content text,
        date_add datetime,
        author varchar(100),
        id_categories int,
        PRIMARY KEY(id),
        FOREIGN KEY(id_categories) REFERENCES categories(id))"
);  