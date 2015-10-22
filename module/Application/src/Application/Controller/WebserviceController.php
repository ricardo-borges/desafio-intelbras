<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;

use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class WebserviceController extends AbstractRestfulController
{
    public function getList()
    {
        return new JsonModel(array(
	        'data' => "testeGetList"
	    ));
    }
 
    public function get($id)
    {
    	$data = array();
			
    	if (file_exists("data/file/arquivo.txt")){
        	$file = fopen("data/file/arquivo.txt", "r");	
	        $conteudo = fread($file, filesize("data/file/arquivo.txt"));
			fclose($file);
			
			$data = array(
				'date' => date(DATE_RFC822),
	        	'conteudo' => $conteudo
			);
		}else{
			$data = "Arquivo não encontrado";
		}
		
        return new JsonModel(array(
            $data
	    ));
    }
 
    public function create($data)
    {	    	
		$file = fopen("data/file/arquivo.txt", "w");
		
		if($file){
			$conteudo = $data['conteudo'] ."\n" .$data['date'];
	    	fwrite($file, $conteudo);
			fclose($file);			
			$this->response->setStatusCode(200);
		}else{
			$data = "";	
		}
		
        return new JsonModel(array(
            'data' => $data
	    ));
    }
 
    public function update($id, $data)
    {
    	if (file_exists("data/file/arquivo.txt")){
        	$file = fopen("data/file/arquivo.txt", "w");	
				
			if($file){
				$conteudo = $data['conteudo'] ."\n" .$data['date'];
		    	fwrite($file, $conteudo);
				fclose($file);
				$this->response->setStatusCode(200);
			}
		}else{
			$this->response->setStatusCode(501);
			$data['conteudo'] = "Arquivo não encontrado";
		}
		
        return new JsonModel(array(
            'data' => $data
	    ));
    }
 
    public function delete($id)
    {
    	$data = "";
    	
        if (file_exists("data/file/arquivo.txt")){
        	unlink("data/file/arquivo.txt");
			$this->response->setStatusCode(200);
			$data;
		}else{
			$data['conteudo'] = "Arquivo não encontrado";			
		}       
		
		return new JsonModel(array(
			$data
		));
    }
}
