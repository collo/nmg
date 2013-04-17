drop database if exists nmgportal;

create database nmgportal;

use nmgportal;

drop table if exists user_categories;
create table user_categories (
  cat_id int primary key auto_increment,
  cat_name varchar(100) not null
);

drop table if exists users;
create table users (
  usr_id int primary key auto_increment,
  usr_name varchar(100) not null,
  usr_pwd varchar(50) not null,
  usr_cat_id int not null
);
alter table users add constraint fkUserCat foreign key (usr_cat_id) references user_categories(cat_id);

drop table if exists news_categories;
create table news_categories (
  cat_id int primary key auto_increment,
  cat_name int not null
);

drop table if exists news_items;
create table news_items (
  news_id int primary key auto_increment,
  news_date datetime not null,
  news_content text not null,
  news_cat_id int not null
);
alter table news_items add constraint fkNewsCat foreign key (news_cat_id) references news_categories(cat_id);

drop table if exists news_outlets;
create table news_outlets (
  outlet_id int primary key auto_increment,
  outlet_name varchar(100) not null
);

drop table if exists news_outlet_items;
create table news_outlet_items (
  oi_id int primary key auto_increment,
  oi_item_id int not null,
  oi_out_id int not null
);
create unique index indOutItem on news_outlet_items(oi_item_id,oi_out_id);
alter table news_outlet_items add constraint fkItem foreign key (oi_item_id) references news_items(news_id);
alter table news_outlet_items add constraint fkOut foreign key (oi_out_id) references news_outlets(outlet_id);

drop table if exists news_item_authors;
create table news_item_authors(
  nia_id int primary key auto_increment,
  nia_item_id int not null,
  nia_user_id int not null
);
create unique index indItemAuthor on news_item_authors(nia_item_id,nia_user_id);
alter table news_item_authors add constraint fkNIAItem foreign key (nia_item_id) references news_items(news_id);
alter table news_item_authors add constraint fkNIAUser foreign key (nia_user_id) references users(usr_id);

drop table if exists feedback;
create table feedback(
  feed_id int primary key auto_increment,
  feed_email varchar(100) not null,
  feed_text varchar(1000) not null
);

  --
  -- ==========================users===============================
  --
drop user 'nmg_user'@'localhost';
create user 'nmg_user'@'localhost' identified by 'pass';
grant select,update,insert,delete on nmgportal.* to 'nmg_user'@'localhost';
