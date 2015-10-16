# Desafio intelbras

Escrever um webservice na linguagem de sua preferência que deve atender os requisitos abaixo:

* Receber um GET na url /api/device
	* Lê um arquivo e retorna o seu contêudo no formato json.
	
	
	```
	cat arquivo.txt
	conteudo criado
	```
	
	retorno à partir do arquivo
	```
	{
		date: data atual,
		conteudo: "conteúdo criado",
	}
	```

* Receber um POST na url /api/device
	* Cria o arquivo com o conteudo do JSON: 
	```
	{
		date: 12/09/1985,
		conteudo: "conteúdo criado",
	}
	```
	
	Formato arquivo salvo:
	```
	conteudo criado
	```

* Receber um PUT na url /api/device
	* Receber um JSON no formato abaixo e gravar o 'novo conteúdo' no arquivo se este já existir
	```
	{
		date: 12/09/1985,
		conteudo: "novo conteúdo",
	}
	```
	Formato arquivo salvo:
	```
	novo conteúdo
	```

* Receber um DELETE na url /api/device
	* Deve remover o arquivo e não retornar dados


O Webserver deve respeitar as boas praticas do padrão REST usando a rfc2616

***Bonus:*** se usar testes unitários.
