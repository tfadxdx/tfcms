<?php
    if($model->name=='佩尼典藏'){
        $this->renderPartial('_selected',array('model'=>$model));
    } else {
        $this->renderPartial('_news',array('model'=>$model));
    }
?>