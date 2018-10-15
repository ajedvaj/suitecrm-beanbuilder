<?php
require_once 'modules/ModuleBuilder/controller.php';

class CustomModuleBuilderController extends ModuleBuilderController
{

    function action_SaveDropDown()
    {
        /* ******* CUSTOM START ******* */
        $modelFilePath = 'custom/include/beanbuilder/model/';      
        $dropdownName = $_REQUEST['dropdown_name'];
        $listValue = $_REQUEST['list_value'];
        $json = getJSONobj();
        $rawurldecode = rawurldecode($listValue);
        $htmldecode = html_entity_decode($rawurldecode, ENT_QUOTES);
        $options = $json->decode($htmldecode);
        $dropdownModelClass = array();
        $dropdownModelClass['fields'] = array();
        
        foreach ($options as $item) {
            $keytemp = SugarCleaner::stripTags(from_html($item[0]), false);
            $valuetemp = SugarCleaner::stripTags(from_html($item[1]), false);
            if (strpos($keytemp, '-blank-') !== false || empty($keytemp)) {
                continue;
            }
            
            $keytempVal = strtoupper(str_replace(array(" ", ".", "/"), "_", $keytemp));
            if(is_numeric(substr($keytempVal, 0, 1))){
                $keytempVal = "VALUE_" . $keytempVal;
            }
            
            $dropdownModelClass['fields'][$keytempVal] = $keytemp;
        }
        
        $moduleList = array_intersect($GLOBALS['moduleList'], array_keys($GLOBALS['beanList']));
        
        foreach ($moduleList as $moduleName) {
            $bean = BeanFactory::getBean($moduleName);
            $fieldDefs = $bean->getFieldDefinitions();
            
            foreach ($fieldDefs as $fieldName => $fieldDef) {
                if (array_key_exists('options', $fieldDef) && $fieldDef['options'] == $dropdownName) {
                    $dropdownModelClass['name'] = $moduleName . ucfirst($fieldName);
                    $modelFilePath = $modelFilePath . $moduleName . '/';
                    
                    if (!file_exists($modelFilePath)) {
                        mkdir($modelFilePath, 0775, true);
                    }
                    
                    $smarty = new Sugar_Smarty ( ) ;
                    $smarty->left_delimiter = '{{' ;
                    $smarty->right_delimiter = '}}' ;
                    $smarty->assign ( 'class', $dropdownModelClass ) ;
                    
                    $fp = sugar_fopen($modelFilePath . $dropdownModelClass['name'] . '.php', 'w');
                    fwrite($fp, $smarty->fetch('custom/modules/ModuleBuilder/tpls/ModelClass.tpl'));
                    fclose($fp);
                }
            }
        }
        
        /* ******* CUSTOM END ******* */
        
        require_once 'modules/ModuleBuilder/parsers/parser.dropdown.php';
        $parser = new ParserDropDown();
        $parser->saveDropDown($_REQUEST);
        $this->view = 'dropdowns';
    }

    function action_GenerateBuilder()
    {
        
        $moduleName = $_REQUEST['view_module'];
        $builderFilePath = 'custom/include/beanbuilder/builders/';
        $modelFilePath = 'custom/include/beanbuilder/model/';      
        
        $builderClass = array();
        $builderClass['name'] = $moduleName . "Builder";
        $builderClass['module'] = $moduleName;
        $builderClass['fields'] = array();
        $builderClass['requires'] = array();
        
        $bean = BeanFactory::getBean($moduleName);
        $fieldDefs = $bean->getFieldDefinitions();
        $fieldsSkipArray = array('id','deleted', 'name','description', 'date_entered', 'date_modified', 'created_by', 'modified_by', 'email1',
            'modified_user_id','modified_by_name','created_by','created_by_name','created_by_link','modified_user_link', 'assigned_user_id',
            'assigned_user_name','email','billing_address_street_2','billing_address_street_3','billing_address_street_4',
            'shipping_address_street_2','shipping_address_street_3','shipping_address_street_4', 'email_addresses_non_primary',
            'parent_name','contact_name','contact_phone','contact_email'
        );
        
        foreach ($fieldDefs as $fieldName => $fieldDef) {
            
            if(in_array($fieldName, $fieldsSkipArray) || $fieldDef['type'] == 'link'){
                continue;
            }
            
            if ($fieldDef['type'] == 'enum' || $fieldDef['type'] == 'multienum') {
                $requireClassName = $moduleName . ucfirst($fieldName);
                $builderClass['requires'][] = 'model/' . $moduleName . '/' . $requireClassName . '.php';
            }
            
            $builderClass['fields'][$fieldName] = $fieldDef;
        }
        
        $smarty = new Sugar_Smarty();
        $smarty->left_delimiter = '{{';
        $smarty->right_delimiter = '}}';
        $smarty->assign('class', $builderClass);
        
        $fp = sugar_fopen($builderFilePath . $builderClass['name'] . '.php', 'w');
        fwrite($fp, $smarty->fetch('custom/modules/ModuleBuilder/tpls/BuilderClass.tpl'));
        fclose($fp);
        SugarApplication::redirect("index.php?module=ModuleBuilder&action=index&type=studio");
        
    }
    
}
