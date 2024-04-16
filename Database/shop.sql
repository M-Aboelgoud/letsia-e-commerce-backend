create database if not exists shop;

use shop;

create table users (
	id int not null auto_increment,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    telephone varchar(50) not null,
    email text not null,
    password text not null,
    primary key (id)
);

create table items (
	id int not null auto_increment,
    photo1 text not null,
    iname varchar(30) not null,
    price float not null,
    sale float not null,
    available boolean not null,
    primary key (id)
);

insert into items (photo1, iname, price, sale, available) values 
('https://cdn.24.co.za/files/Cms/General/d/3089/b1cf3fb0a479438fabf174b092301c29.jpg',
'Renault Clio', 3000000, 10, 0),

('https://i.postimg.cc/jq6Cv4Tg/MM2-A3-AV3.jpg',
'I phone', 500, 0, 1),

('https://i.postimg.cc/15fXPh6T/2022-4-27-22-54-10-649.jpg',
'kahk el eidr', 90, 13, 1),

('https://location-voiture.ma/uploads/images/cars/slider/572416_ve%CC%81hicule-utilitaire-multispace-berlingo-7-places.jpg',

'Citroen Berlingo', 60, 15, 1),

('https://www.journalofnomads.com/wp-content/uploads/2019/12/Renting-a-Car-in-Morocco-and-Driving-in-Morocco-e1649421213271.jpg',
'Dacia Logan', 400000, 10 , 1),

('https://sf1.auto-moto.com/wp-content/uploads/sites/9/2016/07/dacia-dokker-1024x768.jpg',
'Dacia Dokker', 500000, 15, 0),

('https://www.oneclickdrive.com/car-for-rent/slider-desktop/Mercedes-Benz_Mayback-S500_2020_10864_10864_3100348325-5_small.jpg?vr=3',
'Mercedes Benz', 1000000, 5 , 1);
