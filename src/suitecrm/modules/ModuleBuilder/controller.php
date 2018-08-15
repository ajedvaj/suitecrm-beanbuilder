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
        $dropdown = "";
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
            
            $dropdown = $dropdown . "\t const " . $keytempVal . " = \"" . $keytemp . "\"; \r\n";
        }
        
        $moduleList = array_intersect($GLOBALS['moduleList'], array_keys($GLOBALS['beanList']));
        $clazzNameList = array();
        
        foreach ($moduleList as $moduleName) {
            $bean = BeanFactory::getBean($moduleName);
            $fieldDefs = $bean->getFieldDefinitions();
            
            foreach ($fieldDefs as $fieldName => $fieldDef) {
                if (array_key_exists('options', $fieldDef) && $fieldDef['options'] == $dropdownName) {
                    $clazzName = $moduleName . ucfirst($fieldName);
                    $clazzTemplate = "<?php \r\n\r\n";
                    $clazzTemplate = $clazzTemplate . "class " . $clazzName . " { \r\n\r\n";
                    $clazzTemplate = $clazzTemplate . $dropdown . "\r\n}";
                    $modelFilePath = $modelFilePath . $moduleName . '/';
                    if (!file_exists($modelFilePath)) {
                        mkdir($modelFilePath, 0775, true);
                    }
                    file_put_contents($modelFilePath . "{$clazzName}.php", $clazzTemplate);
                }
            }
        }
        /* ******* CUSTOM END ******* */
        
        require_once 'modules/ModuleBuilder/parsers/parser.dropdown.php';
        $parser = new ParserDropDown();
        $parser->saveDropDown($_REQUEST);
        $this->view = 'dropdowns';
    }
}
