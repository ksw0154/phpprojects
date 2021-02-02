<?php
function procText_manageSubmitForm(){
    $obj = Context::getRequestVars();
    debugPrint('$obj111');
    debugPrint($obj);
    //insert
    $output = executeQuery('text_manage.insertPersoninfo', $obj);
    debugPrint('$output');
    debugPrint($output);
    $this->setRedirectUrl(getNotEncodedUrl('mid','text_manage','act', 'dispText_manageSubmitForm'));
    // if($output->toBool()){
    // 	$this->setRedirectUrl(getNotEncodedUrl('mid','text_manage','act', 'dispText_manageContentList', 'book_srl',$obj->book_srl));
    // }else{
    // 	$this->setError($output->message);
    // }
}

?>