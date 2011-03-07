<?

$files = array();
$files = array_merge($files, rglob($this_module_fpath . '/', '*.js'));
$files = array_merge($files, rglob($this_module_fpath . '/', '*.css'));
$files = array_merge($files, rglob($this_module_fpath . '/images', '*.*'));
$files = array_merge($files, rglob($this_module_fpath . '/lang', '*.*'));
$files = array_merge($files, rglob($this_module_fpath . '/plugins', '*.*'));
$files = array_merge($files, rglob($this_module_fpath . '/skins', '*.*'));
$files = array_merge($files, rglob($this_module_fpath . '/themes', '*.*'));
