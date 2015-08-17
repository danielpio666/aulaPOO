			CREATE TABLE IF NOT EXISTS `clientes` (
                            `id` 	      int(11) 		NOT NULL AUTO_INCREMENT,
                            `nome`        varchar(100),
                            `endereco`    varchar(100),
                            `documento`   varchar(20),
                            `fone`        varchar(20),
                            `idade`       int(3),
                            `sexo`        char(1),
                            `pessoa`      char(1),
                            `grau`        int(1),
                            `fantasia`    varchar(100),
                            `responsavel` varchar(100),
                            `cobranca`    varchar(100),
                            PRIMARY KEY (`id`)
                        ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 COMMENT='Tabela de Clientes';";