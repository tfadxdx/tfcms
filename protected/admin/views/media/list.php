 <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
    array(
            'id'=>'uploadFile',
            'config'=>array(
                   'action'=>Yii::app()->request->baseUrl.'/admin.php/media/upload',
                   'allowedExtensions'=>array("jpg"),
                   'sizeLimit'=>2*1024*1024,
                   'onComplete'=>"js:function(id, fileName, responseJSON){   }",
            ))
);?>
<?php
    $baseurl = Yii::app()->request->baseUrl;
?>
<?php
    foreach ($files as $file){
        $myfile = Yii::app()->file->set($file, true);
        echo $myfile->size; // or get property
        echo '<a href='.$baseurl.'/upload/download/'.$myfile->filename.'.jpg>'.$myfile->filename.'</a><br>';
        echo '<img src="'.$baseurl.'/upload/download/'.$myfile->filename.'.'.$myfile->extension.'" height=100px /><br>';
    }
?>