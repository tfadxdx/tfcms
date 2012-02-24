<table>
    <tbody>
<?php
$datas = unserialize($model->content);
foreach ($datas as $key=>$item){
    if($item==='1'){
        $item='非常满意';
    } elseif ($item==='2'){
        $item='满意';
    } elseif ($item==='3'){
        $item='一般';
    } elseif ($item==='4'){
        $item='不满意';
    } elseif ($item==='5'){
        $item='非常不满意';
    }
    switch ($key) {
        case "xingming":
            echo "<tr><td>姓名：</td><td>".$item.'</td></tr>';
            break;
        case "gongsimingchen":
            echo "<tr><td>公司名称：</td><td>".$item.'</td></tr>';
            break;
        case "email":
            echo "<tr><td>电子邮件：</td><td>".$item.'</td></tr>';
            break;
        case "lianxidianhua":
            echo "<tr><td>联系电话：</td><td>".$item.'</td></tr>';
            break;
        case "dizhi":
            echo "<tr><td>地址：</td><td>".$item.'</td></tr>';
            break;
        case "zhonglen":
            echo "<tr><td>种类：</td><td>".$item.'</td></tr>';
            break;
        case "shuliang":
            echo "<tr><td>数量：</td><td>".$item.'</td></tr>';
            break;
        case "fahuoriqi":
            echo "<tr><td>发货日期：</td><td>".$item.'</td></tr>';
            break;
        case "beizhu":
            echo "<tr><td>备注：</td><td>".$item.'</td></tr>';
            break;
        case "chanpingwaiguan":
            echo "<tr><td>产品外观：</td><td>".$item.'</td></tr>';
            break;
        case "waiguanyuanyin":
            echo "<tr><td>产品外观不满意原因：</td><td>".$item.'</td></tr>';
            break;
        case "baozhuangtiaojian":
            echo "<tr><td>产品的包装条件：</td><td>".$item.'</td></tr>';
            break;
        case "baozhuangyuanyin":
            echo "<tr><td>包装条件不满意原因：</td><td>".$item.'</td></tr>';
            break;
        case "shiyongzk":
            echo "<tr><td>适用于层压的状况：</td><td>".$item.'</td></tr>';
            break;
        case "cengyayuanyin":
            echo "<tr><td>层压不满原因：</td><td>".$item.'</td></tr>';
            break;
        case "jiagebi":
            echo "<tr><td>价格/品质比：</td><td>".$item.'</td></tr>';
            break;
        case "jiageyuanyi":
            echo "<tr><td>价格品质不满原因：</td><td>".$item.'</td></tr>';
            break;
        case "yunshuxing":
            echo "<tr><td>运输的及时性：</td><td>".$item.'</td></tr>';
            break;
        case "yunshuyuanyin":
            echo "<tr><td>运输及时性不满原因：</td><td>".$item.'</td></tr>';
            break;
        case "yunshuanquan":
            echo "<tr><td>运输的安全性：</td><td>".$item.'</td></tr>';
            break;
        case "yunshubuyuanyin":
            echo "<tr><td>运输安全性不满原因：</td><td>".$item.'</td></tr>';
            break;
        case "kesuchuli":
            echo "<tr><td>客诉处理状况：</td><td>".$item.'</td></tr>';
            break;
        case "kesuyuanyin":
            echo "<tr><td>客诉处理状况不满原因：</td><td>".$item.'</td></tr>';
            break;
        case "shishoufuwu":
            echo "<tr><td>售后服务状况：</td><td>".$item.'</td></tr>';
            break;
        case "shishoufuwuyuanyin":
            echo "<tr><td>售后服务状况不满原因：</td><td>".$item.'</td></tr>';
            break;
        case "jishuzhichi":
            echo "<tr><td>技术支持状况：</td><td>".$item.'</td></tr>';
            break;
        case "jishuzhichiyuanyin":
            echo "<tr><td>技术支持状况不满原因：</td><td>".$item.'</td></tr>';
            break;
        case "qitazhichi":
            echo "<tr><td>其它销售支持：</td><td>".$item.'</td></tr>';
            break;
        case "qitazhichiyuanyin":
            echo "<tr><td>其它销售支持不满原因：</td><td>".$item.'</td></tr>';
            break;
    }
}
?>

    </tbody>
</table>