<?php
    switch($type) {
        case "error":
            $class_alert = "alert-danger";
            $type = "Not Allowed!";
            $icon = "remove";
        break;
        case "success":
            $class_alert = "alert-success";
            $type = "Allowed!";
            $icon = "ok";
        break;
    }
?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="alert {{ $class_alert }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="glyphicon glyphicon-{{ $icon }}"></i> {{$type}}</h4>
            <?php echo $message ?>
        </div>
    </div>
</div>