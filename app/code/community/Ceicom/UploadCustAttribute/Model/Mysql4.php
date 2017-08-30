<?php 
/**
 *
 * @category   Ceicom
 * @package    Ceicom_UploadCustAttribute
 * @author     Suporte <suporte@ceicom.com.br>
 * @website    http://www.ceicom.com.br
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Ceicom_UploadCustAttribute_Model_Mysql4 extends Mage_Eav_Model_Entity_Setup 
{   
    public function attributeExists($entityTypeId, $attributeId) 
    {
        try 
        {
            $entityTypeId = $this->getEntityTypeId($entityTypeId);
            $attributeId = $this->getAttributeId($entityTypeId, $attributeId);
            return !empty($attributeId);
        } 
        catch(Exception $e) 
        {
            return FALSE;
        }
    }
}