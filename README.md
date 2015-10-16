# desafio-intelbras

Escrever um webserver em sua lingugagem de preferencia que deva atender os requisitos abaixo:

* Receber um GET na url /api/device:
	* Le um arquivo e retorna o seu conteudo em um json. ```{ data: "conteudo do arquivo"}```

* Receber um POST na url /api/device:
	* Cria o arquivo com o conteudo do JSON: 
	* 
```
{
	date: 12/09/1985,
	conteudo: "conteudo criado",
}
```

* Receber um PUT na url /api/device:
	* Recebe um JSON no formato ```{data:"novo conteudo"}``` e deve gravar o 'novo conteudo' no arquivo

* Receber um DELETE na url /api/device:
	* Deve remover o arquivo e não retornar dados


O Webserver deve respeitar as boas praticas do padrão REST usando a rfc2616
