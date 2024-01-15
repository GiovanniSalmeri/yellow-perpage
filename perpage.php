<?php
// Perpage extension, https://github.com/GiovanniSalmeri/yellow-perpage

class YellowPerpage {
    const VERSION = "0.8.23";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("perpageRestriction", "0");
        $this->yellow->system->setDefault("perpageSettings", "");
    }

    // Handle page meta data
    public function onParseMetaData($page) {
        if ($this->yellow->page==$page) {
            $perpageRestriction = $this->yellow->system->get("perpageRestriction");
            $perpageSettings = preg_split("/\s*,\s*/", $this->yellow->system->get("perpageSettings"), -1, PREG_SPLIT_NO_EMPTY);
            foreach ($page->metaData as $key=>$value) {
                preg_match("/^[a-z]*/", $key, $matches);
                if ($this->yellow->extension->isExisting($matches[0]) && isset($this->yellow->system->settingsDefaults[$key])) {
                    if (!$perpageRestriction || in_array($key, $perpageSettings) || in_array($matches[0]."*", $perpageSettings)) {
                        $this->yellow->system->set($key, $value);
                    }
                }
            }
        }
    }
}
