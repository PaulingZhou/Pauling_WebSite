<?php

class template{
    private $templateDir;
    private $compileDir;
    private $leftTag = '{#';
    private $rightTag = '#}';
    private $currentTemp = '';
    private $outputHtml;
    private $varPool = array();

    public function __construct($templateDir, $compileDir, $leftTag = null, $rightTag = null ){
        $this->templateDir = $templateDir;
        $this->compileDir = $compileDir;
        if(!empty($leftTag)) $this->leftTag = $leftTag;
        if(!empty($rightTag)) $this->rightTag = $rightTag        
    }

    public function assigh($tag, $var) {
    }
?>
