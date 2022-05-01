drop database if exists info;
create database if not exists info;
use info;
create table produit(
	idproduit int(4) auto_increment primary key,
    nomproduit varchar(50),
	prix float   
);
INSERT INTO produit(nomproduit,prix)  VALUES
	('FORCE SHEID',19),
	('MAKEUP BRUSHES',12),
	('TRAVEL TOILETRY',22),
	('REAL PERFECTION MAKEUP',9),
	('BOOM',79),
	('COVER GIRL+OLAY',9),
	('CHECKERED MAKEUP BAG',27),
	('MAKEUP ORGANIZER',39);
	select *from produit;