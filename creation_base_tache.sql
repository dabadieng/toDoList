--
-- base de donn�es: 'baseavion'
--
create database if not exists basetodolist default character set utf8 collate utf8_general_ci;
use basetodolist;
-- --------------------------------------------------------
-- creation des tables

set foreign_key_checks =0;

-- table utilisateur 
drop table if exists utilisateur ;
create table utilisateur  (
	uti_id int not null auto_increment primary key,
	uti_username  varchar(255) not null,
	uti_mot_de_passe varchar(1000) not null,
	uti_status int(10)
)engine=innodb;

-- table tache
drop table if exists tache;
create table tache (
	tac_id int not null auto_increment primary key,
	tac_libelle varchar (255) not null,
	tac_date_heure datetime,
	tac_memo varchar (500),
	tac_categorie int not null,
	tac_utilisateur int not null,
	tac_etat varchar(20)

)engine=innodb; 

-- table categorie
drop table if exists categorie;
create table categorie (
	cat_id int not null auto_increment primary key,
	cat_nom varchar (255) not null
)engine=innodb; 


-- contraintes
alter table tache add constraint cs1 foreign key (tac_utilisateur ) references utilisateur (uti_id);
alter table tache add constraint cs2 foreign key (tac_categorie) references categorie(cat_id);


set foreign_key_checks = 1;

-- jeu de données

