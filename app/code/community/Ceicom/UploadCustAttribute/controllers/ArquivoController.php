<?php
/**
 *
 * @category   Ceicom
 * @package    Ceicom_UploadCustAttribute
 * @author     Suporte <suporte@ceicom.com.br>
 * @website    http://www.ceicom.com.br
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Ceicom_UploadCustAttribute_ArquivoController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {    	    	    		
		$this->loadLayout(array('default','profile_arquivo_index'));
		$this->getLayout()->getBlock('head')->setTitle('Arquivo Upload');		
		$this->renderLayout();
    }

     public function uploadAction(){		
		$_helper = Mage::helper('uploadcustattribute');
		$root_path = Mage::getBaseDir(); 

		$uploadSrc = $_FILES['upload_customer']['tmp_name'];
		$uploadPath = $_FILES['upload_customer']['name'];		
		$ext = $_helper->getUploadExt($uploadPath);
		$name = $_helper->getUploadName($uploadPath);
				
		if (is_file($uploadSrc)) { 									
			if (!file_exists($root_path.'/media/customer/')) { 				
				mkdir($root_path.'/media/customer/', 0777, true); 
			}			 		
			$uploadCust = $_helper->generateUploadName($ext, $name);
			$uploadDest = $root_path.'/media/customer/'.$uploadCust;
			copy($uploadSrc, $uploadDest);											
		}
		$this->saveFile($uploadCust);
		Mage::getSingleton('core/session')->addSuccess(Mage::helper('uploadcustattribute')->__('Contrato enviado com sucesso'));
		$this->_redirect('*/*/index');
	}
   
	public function saveFile($uploadCust){		
		if (Mage::getSingleton('customer/session')->isLoggedIn()) {
			$customer = Mage::getSingleton('customer/session')->getCustomer();			
			$custObj = Mage::getModel('customer/customer')->load($customer->getId());						
				if($uploadCust != ''){
					$uploadCust = '/'.$uploadCust;
					$custObj->setupload_customer($uploadCust);
					$custObj->save();			
			}
		}
	}
}