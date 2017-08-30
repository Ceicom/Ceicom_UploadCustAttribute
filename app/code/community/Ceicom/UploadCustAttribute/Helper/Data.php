<?php
/**
 *
 * @category   Ceicom
 * @package    Ceicom_UploadCustAttribute
 * @author     Suporte <suporte@ceicom.com.br>
 * @website    http://www.ceicom.com.br
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Ceicom_UploadCustAttribute_Helper_Data extends Mage_Core_Block_Template
{
	public function getUploadUrl(){
        return Mage::getUrl('profile/arquivo/upload');
    }

    public function getUploadExt($file_path)
    {
        return pathinfo($file_path, PATHINFO_EXTENSION);
    }

    public function getUploadName($file_path)
    {
        return pathinfo($file_path, PATHINFO_FILENAME);
    }

    public function generateUploadName($ext, $name)
    {

		if(Mage::getSingleton('customer/session')->isLoggedIn()) {
			$customerData = Mage::getSingleton('customer/session')->getCustomer();
			$customerid =  $customerData->getId();
		}		
        return 'arquivo'.'_id-'.$customerid . "-" . $name . ".".$ext;
    }
}