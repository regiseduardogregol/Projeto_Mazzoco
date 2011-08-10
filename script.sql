create table about(
id integer not null auto_increment,
name varchar(150) not null,
description varchar(300) not null,
image varchar(150),
primary key(id)
);

create table category(
id integer not null auto_increment,
name varchar(150) not null,
type varchar(150),
primary key(id)
);

create table subcategory(
id integer not null auto_increment,
category_id integer not null references on category(id),
name varchar(150) not null,
primary key(id)
);

create table product(
id integer not null auto_increment,
name varchar(150) not null,
description varchar(500) not null,
value decimal(10,2) not null,
photo varchar(150),
category_id integer not null references on category(id),
subcategory_id integer references on subcategory(id),
primary key(id)
);

create table photos(
id integer not null auto_increment,
product_id integer not null references on product(id),
name varchar(150),
image varchar(150) not null,
primary key(id)
);

create table offers(
id integer not null auto_increment,
name varchar(150),
image varchar(150) not null,
primary key(id)
);

create table contact(
id integer not null auto_increment,
name varchar(150) not null,
email varchar(150) not null,
message varchar(300) not null,
primary key(id)
);

create table user(
id integer not null auto_increment,
name varchar(150) not null,
login varchar(50) not null,
passwd varchar(10) not null,
primary key(id)
);
