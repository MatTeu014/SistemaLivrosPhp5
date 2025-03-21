create database sistemalivros;

use sistemalivros;

create table cliente(
	codigoClientePK int not null  auto_increment primary key,
	nome varchar(20) not null,
    endereco varchar(20) not null,
    telefone varchar(13) not null,
    dataNascimento varchar(20) not null,
    email varchar(25) not null,
    senha varchar(20) not null,
    situacao varchar(15) not null
) engine = InnoDB;

create table livro(
	codigoLivroPK int not null auto_increment primary key,
	nome varchar(50) not null,
    autor varchar(30) not null,
    categoria varchar(30) not null,
    quantidade int not null,
    preco decimal not null,
    situacao varchar(15) not null
)engine = InnoDB;

create table compra(
	codigoCompraPK int  not null auto_increment primary key,
	codigoLivroFK int,
    codigoClienteFK int,
    quantidadeLivro int,
    formaPagamento varchar(30) not null,
    precoTotal int not null,
    situacao varchar(15) not null
)engine = InnoDB;

create table cartao(
	codigoCartaoPK int not null auto_increment primary key,
    numeroCartao int,
    situacao varchar(15) not null
)engine =InnoDB;


alter table compra add constraint compraLivro foreign key (codigoLivroFK) references livro(codigoLivroPK);
alter table compra add constraint compraCliente foreign key (codigoClienteFK) references cliente(codigoClientePK);

insert into livro (nome,autor,categoria,quantidade,preco) values('O Menino do Dedo Verde','Maurice Druon','Ficção',0,25.00);
insert into livro (nome,autor,categoria,quantidade,preco,situacao) values('Elantris','Brandon Sanderson','Fantasia',4,50.00,'ativado');
insert into livro (nome,autor,categoria,quantidade,preco) values('Extraordinario',' R. J. Palacion',' Literatura infantil',5,20.00);
insert into livro (nome,autor,categoria,quantidade,preco) values('Harry Potter e a Pedra Filosofal','J. K. Rowling','Fantasia',2,30.00);
insert into livro (nome,autor,categoria,quantidade,preco) values('A Revolucao dos Bichos','George Orwell','Ficção distópica,',7,40.00);
insert into livro (nome,autor,categoria,quantidade,preco) values('Fabricante de Lagrimas','Erin Doom','Romance',9,10.00);
insert into cartao (numeroCartao,situacao) values(123,'ativado');

update livro set quantidade = 0 where codigoLivroPk = 2;

delete from cliente where codigoClientePK = 3;

select * from cliente;
select * from livro;
select * from compra;
select * from cartao;

insert into cliente (nome,endereco,telefone,dataNascimento,email,senha,situacao) values('admin','rua','12345','12/12/2012','admin','admin','ativado');

insert into compra (codigolivroFK) select codigoLivroPK from livro where nome = 'Elantris';
UPDATE compra SET codigoClienteFK = ( SELECT codigoClientePK FROM cliente WHERE email = 'email') order by codigoCompraPK desc limit 1;

update compra set quantidadeLivro = quantidade order by  codigoCompraPK desc limit 1;

update livro set quantidade = quantidade + 1 where codigoLivroPK = 1;

update compra set formaPagamento = 'forma' order by codigoCompraPK desc limit 1;

update compra set precoTotal = (select preco from livro where nome = 'Elantris') * 2 order by codigoCompraPK desc limit 1;