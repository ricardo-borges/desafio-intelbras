# desafio-intelbras

Escrever um webserver em sua lingugagem de preferencia que deva atender os requisitos abaixo:

CONTEUDO


* Receber um GET na url /api/device:
	* Le um arquivo e retorna o seu conteudo em um json.
		{ data: "conteudo do arquivo"}

* Receber um POST na url /api/device:
	* Cria o arquivo com o conteudo do JSON
		{ data: "conteudo criado" }

* Receber um PUT na url /api/device:
	* Recebe um JSON no formato {data:"novo conteudo"} e deve gravar o 'novo conteudo' no arquivo

* Receber um DELETE na url /api/device:
	* Deve remover o arquivo


