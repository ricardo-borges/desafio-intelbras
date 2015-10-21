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
	        'data' => "testeList"
	    ));
    }
 
    public function get($id)
    {
        return new JsonModel(array(
	        'data' => "testeGet"
	    ));
    }
 
    public function create($data)
    {
        return new JsonModel(array(
	        'data' => "testeCreate"
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
