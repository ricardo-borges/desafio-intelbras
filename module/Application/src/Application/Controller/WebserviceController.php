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
    	$file = fopen("data/file/arquivo.txt", "r") or die("Unable to open file!");
        $conteudo = fread($file, filesize("data/file/arquivo.txt"));
		fclose($file);
		
        return new JsonModel(array(
            'date' => date(DATE_RFC822),
	        'conteudo' => $conteudo
	    ));
    }
 
    public function create($data)
    {
    	//print_r($data); exit();
    	//$file = fopen("data/file/arquivo.txt", "w");
		
        return new JsonModel(array(
            'data' => $data
	    ));
    }
 
    public function update($id, $data)
    {
        return new JsonModel(array(
	        'data' => "testeUpdate"
	    ));
    }
 
    public function delete($id)
    {
        return new JsonModel(array(
	        'data' => "testeDelete"
	    ));
    }
}
