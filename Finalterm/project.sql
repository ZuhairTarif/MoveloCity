CREATE DATABASE IF NOT EXISTS tms;

USE tms;

CREATE TABLE IF NOT EXISTS Users
(
    name         VARCHAR(100) NOT NULL,
    nid          INT(255)     NOT NULL,
    mobile       INT(255)     NOT NULL,
    model        VARCHAR(100) NOT NULL,
    tnumber      VARCHAR(100) NOT NULL,
    lid          DATE         NOT NULL,
    led          DATE         NOT NULL,
    experience   VARCHAR(200) NOT NULL,
    availability VARCHAR(200) NOT NULL,
    uname        VARCHAR(100) NOT NULL,
    pass         VARCHAR(100) NOT NULL
);
CREATE TABLE IF NOT EXISTS Orders
(
    name         VARCHAR(100) NOT NULL,
    nid          INT(255)     NOT NULL,
    mobile       INT(255)     NOT NULL,
    uname        VARCHAR(100) NOT NULL,
    pass         VARCHAR(100) NOT NULL
);
CREATE TABLE IF NOT EXISTS Payments
(
    name         VARCHAR(100) NOT NULL,
    bkash        INT(255)     NOT NULL,
    otp          INT(255)     NOT NULL
);