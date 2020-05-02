<?php
class Conexao {
	public static function conectar() {
		return new PDO("mysql:host=ccarrinho.mysql.dbaas.com.br;dbname=ccarrinho", "ccarrinho", "code01edx");

	}
}
    
