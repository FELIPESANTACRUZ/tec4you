create database tecfouryou;

-- CHAMANDO O DB PARA USAR
   use fseletro    

    create table `comentarios`(
id int auto_increment,
nome varchar(100),
msg varchar(300),
data datetime default now(),
primary key (id)
);


   create table produtos(  
   idproduto int auto_increment primary key,
   peca varchar(100),
   imagem varchar(100),
   marca varchar(500),
   modelo varchar(500),
   preco float
   );

   INSERT INTO produtos (idproduto,peca,imagem,marca,modelo,preco) 
   values ('2','Amortecedor Dianteiro Traseiro Nakata e Kit','./image/AmortecedorGol.png','Volkswagen','Gol G5 G6 2008 a 2017',' 693.23');
     ('3','Kit Embreagem Luk','./image/KitEmbreagemLuk.png','Fiat',' Uno 1.0 1.3 1.4 94 a 2010','178.01');
     ('4','Amortecedor  Dianteiro Passageiro Kyb','./image/AmortecedorHyundai.png','Hyundai','I30 2009 a 2013','263.54');
     ('5','Amortecedor Dianteiro Kayaba','./image/AmortecedorHondaCivic.png',' Honda','Civic 2006 a 2011','392.39');
     ('6','Amortecedor Traseiro Motorista Passageiro Nakata','./image/AmortecedorChevroletCruze.png','Chevrolet','Cruze 2012 a 2016','134.95');

CREATE TABLE 'carros' (
  'Id' int(11) NOT NULL,
  'Marca' varchar(30) NOT NULL,
  'Modelo' varchar(30) NOT NULL,
  'Ano' varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE carros (
  	 Id int(11) NOT NULL,
  	 Marca varchar(30) NOT NULL,
 	 Modelo varchar(30) NOT NULL,
  	 Ano varchar(10) NOT NULL,
 	 primary key(id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



ALTER TABLE carros MODIFY Id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6


INSERT INTO carros (Id, Marca, Modelo, Ano) VALUES
("default", "Fiat", "Uno", "2002"),
("default", "Chevrolet", "Camaro", "2016"),
("default", "Ford", "Fiesta", "2014"),
("default", "Ford", "Ka", "2001"),
("default", "Chevrolet", "Monza", "2001");

 create table `solicitacoes`(
id int auto_increment,
nome varchar(100),
email varchar(100),
marca varchar(100),
modelo varchar (100),
peca varchar (100),
data datetime default now(),
primary key (id)
);

DELIMITER $

CREATE TRIGGER novasolicitacao
ON solicitacoes
FOR EACH ROW 
BEGIN
IF <NEW.email IS NOT NULL> THEN
INSERT INTO novasolicitacao SET meus_emails = NEW.email;
VALUES ('adm@gmail.com'
        'nova solicitacao'
        (concat('foi solicitado a peça:')peca,'nome:',nome,'email:',email,'marca',marca,'modelo:',modelo,'horario solicitação:',data)
        )
END IF;

DELIMITER;
