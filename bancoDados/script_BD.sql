create database sistemalivros;

use sistemalivros;

create table cliente(
	codigoClientePK int not null  auto_increment primary key,
	nome varchar(20) not null,
    endereco varchar(20) not null,
    telefone varchar(13) not null,
    dataNascimento varchar(20) not null,
    email varchar(25) not null,
    senha varchar(20) not null
) engine = InnoDB;

create table livro(
	codigoLivroPK int not null auto_increment primary key,
	nome varchar(20) not null,
    autor varchar(20) not null,
    categoria varchar(20) not null,
    quantidade int not null
)engine = InnoDB;

create table compra(
	codigoCompraPK int  not null auto_increment primary key,
	codigoLivroFK int,
    codigoClienteFK int,
    quantidadeLivro int,
    formaPagamento varchar(30) not null,
    precoTotal decimal(3,2) not null
)engine = InnoDB;

alter table compra add constraint compraLivro foreign key (codigoLivroFK) references livro(codigoLivroPK);
alter table compra add constraint compraCliente foreign key (codigoClienteFK) references cliente(codigoClientePK);

select * from cliente;
select * from livro;
select * from compra;
