<?php
$erros = [];

// $exception = null;

if($exception){
    $message = [
        'type'=> 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception ) === 'ValidationException'){
        $erros = $exception->getErros();
    }

}

$alertType = '';

if($message['type'] === 'error'){
    $alertType = 'danger';
}else{
    $alertType = 'success';
}

?>

<?php if($message): ?>
    <div role="alert" 
    class="my-3 alert alert-<?=$alertType ?>">
        <?= $message['message'] ?>
    </div>
<?php endif?>
