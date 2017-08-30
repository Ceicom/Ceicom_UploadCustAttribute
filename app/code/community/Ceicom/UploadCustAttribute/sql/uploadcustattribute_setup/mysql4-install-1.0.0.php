<?php
/**
 *
 * @category   Ceicom
 * @package    Ceicom_UploadCustAttribute
 * @author     Suporte <suporte@ceicom.com.br>
 * @website    http://www.ceicom.com.br
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
$installer = $this;
$installer->startSetup();

$installer->addAttribute("customer", "upload_customer",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "Arquivo",
    "input"    => "file",
    "source"   => "",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => "Arquivo enviado no cadastro"

	));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "upload_customer");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 1)
		->setData("sort_order", 100)
		;
        $attribute->save();	
	
$installer->endSetup();