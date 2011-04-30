drop database if exists `site`;
create database `site`character set utf8 collate utf8_unicode_ci;
use 'site';
create table `agente` (
	`id` int unsigned not null auto_increment,
	`empresa` varchar(255) null default null collate 'utf8_unicode_ci',
	`nif` varchar(255) null default null collate 'utf8_unicode_ci',
	`nome` varchar(255) null default null collate 'utf8_unicode_ci',
	`cidade` varchar(255) null default null collate 'utf8_unicode_ci',
	`cep` varchar(255) null default null collate 'utf8_unicode_ci',
	`pais` varchar(255) null default null collate 'utf8_unicode_ci',
	`telefone` varchar(255) null default null collate 'utf8_unicode_ci',
	`tipo` varchar(255) null default null collate 'utf8_unicode_ci',
	`cae` varchar(255) null default null collate 'utf8_unicode_ci',
	`filial` varchar(255) null default null collate 'utf8_unicode_ci',
	`email` varchar(255) null default null collate 'utf8_unicode_ci',
	`obs` varchar(255) null default null collate 'utf8_unicode_ci',
	primary key (`id`)
)
engine=innodb delay_key_write=0 row_format=compact charset=utf8 collate=utf8_unicode_ci  ;
create table `candidatura` (
	`id` int unsigned not null auto_increment,
	`nome` varchar(255) null default null collate 'utf8_unicode_ci',
	`nacionalidade` varchar(255) null default null collate 'utf8_unicode_ci',
	`num_doc` varchar(255) null default null collate 'utf8_unicode_ci',
	`tipo_doc` varchar(255) null default null collate 'utf8_unicode_ci',
	`data_emissao` varchar(255) null default null collate 'utf8_unicode_ci',
	`data_nasc` varchar(255) null default null collate 'utf8_unicode_ci',
	`morada` varchar(255) null default null collate 'utf8_unicode_ci',
	`cp1` varchar(255) null default null collate 'utf8_unicode_ci',
	`localidade` varchar(255) null default null collate 'utf8_unicode_ci',
	`telefone` varchar(255) null default null collate 'utf8_unicode_ci',
	`email` varchar(255) null default null collate 'utf8_unicode_ci',
	`numCartaConducao` varchar(255) null default null collate 'utf8_unicode_ci',
	`grauEnsino` varchar(255) null default null collate 'utf8_unicode_ci',
	`curso` varchar(255) null default null collate 'utf8_unicode_ci',
	`dataInicio` varchar(255) null default null collate 'utf8_unicode_ci',
	`dataFim` varchar(255) null default null collate 'utf8_unicode_ci',
	`linguaPT` varchar(255) null default null collate 'utf8_unicode_ci',
	`linguaUK` varchar(255) null default null collate 'utf8_unicode_ci',
	`linguaES` varchar(255) null default null collate 'utf8_unicode_ci',
	`linguaRU` varchar(255) null default null collate 'utf8_unicode_ci',
	`linguaOutra` varchar(255) null default null collate 'utf8_unicode_ci',
	`linguaOutraNivel` varchar(255) null default null collate 'utf8_unicode_ci',
	`word` varchar(255) null default null collate 'utf8_unicode_ci',
	`excel` varchar(255) null default null collate 'utf8_unicode_ci',
	`situacaoProfissional` varchar(255) null default null collate 'utf8_unicode_ci',
	`areaEmprego` varchar(255) null default null collate 'utf8_unicode_ci',
	`disponibilidade` varchar(255) null default null collate 'utf8_unicode_ci',
	`experiencia` varchar(255) null default null collate 'utf8_unicode_ci',
	`ondeTrabalhou` varchar(255) null default null collate 'utf8_unicode_ci',
	`motivo` varchar(255) null default null collate 'utf8_unicode_ci',
	`reacao` varchar(255) null default null collate 'utf8_unicode_ci',
	`receberPromocao` varchar(255) null default null collate 'utf8_unicode_ci',
	`cp2` varchar(255) null default null collate 'utf8_unicode_ci',
	primary key (`id`)
)
engine=innodb delay_key_write=0 row_format=compact charset=utf8 collate=utf8_unicode_ci  ;
create table `contato` (
	`id` int unsigned not null auto_increment,
	`nome` varchar(255) null default null collate 'utf8_unicode_ci',
	`email` varchar(255) null default null collate 'utf8_unicode_ci',
	`loja` varchar(255) null default null collate 'utf8_unicode_ci',
	`assunto` varchar(255) null default null collate 'utf8_unicode_ci',
	`mensagem` varchar(255) null default null collate 'utf8_unicode_ci',
	`receberInformacao` varchar(255) null default null collate 'utf8_unicode_ci',
	primary key (`id`)
)
engine=innodb delay_key_write=0 row_format=compact charset=utf8 collate=utf8_unicode_ci  ;
create table `esquecisenha` (
	`id` int unsigned not null auto_increment,
	`CliNumero` varchar(255) null default null collate 'utf8_unicode_ci',
	`email` varchar(255) null default null collate 'utf8_unicode_ci',
	`data` varchar(255) null default null collate 'utf8_unicode_ci',
	primary key (`id`)
)
engine=innodb delay_key_write=0 row_format=compact charset=utf8 collate=utf8_unicode_ci  ;
create table `pedircartao` (
	`id` int unsigned not null auto_increment,
	`nome` varchar(255) null default null collate 'utf8_unicode_ci',
	`email` varchar(255) null default null collate 'utf8_unicode_ci',
	`telefone` varchar(255) null default null collate 'utf8_unicode_ci',
	`existeCadastro` varchar(255) null default null collate 'utf8_unicode_ci',
	`regulamento` varchar(255) null default null collate 'utf8_unicode_ci',
	`receberPromocao` varchar(255) null default null collate 'utf8_unicode_ci',
	primary key (`id`)
)
engine=innodb delay_key_write=0 row_format=compact charset=utf8 collate=utf8_unicode_ci  ;
create table `utilizador` (
	`id` int unsigned not null auto_increment,
	`email` varchar(255) null default null collate 'utf8_unicode_ci',
	`dadosPessoais` varchar(255) null default null collate 'utf8_unicode_ci',
	`morada` varchar(255) null default null collate 'utf8_unicode_ci',
	`documentos` varchar(255) null default null collate 'utf8_unicode_ci',
	`data` varchar(255) null default null collate 'utf8_unicode_ci',
	primary key (`id`)
)
engine=innodb delay_key_write=0 row_format=compact charset=utf8 collate=utf8_unicode_ci  ;