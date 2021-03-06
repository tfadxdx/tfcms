<div class="aboutCon">
	  <div class="leftBg">
              <h2 class="conTit">产品与服务</h2>
              <dl>
                    <?php $product_taxs=Taxonomy::model()->noparent()->findAll('taxonomy=:taxonomy',array(':taxonomy'=>'product_category'));?>

                    <?php foreach ($product_taxs as $tax):?>
                        <dt><a href="<?php echo Yii::app()->createUrl('taxonomy/view', array('id'=>$tax->id)); ?>"><?php echo $tax->name;?></a></dt>
                        <?php foreach($tax->products as $product):?>
                            <dd><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>$product->id)); ?>"><?php echo $product->title;?></a></dd>
                        <?php endforeach;?>
                    <?endforeach;?>
                    <dt><a href="<?php echo Yii::app()->createUrl('feedback/create'); ?>">客户服务</a></dt>
                    <dt><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>27)); ?>">技术研发</a></dt>
                    <dt><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>28)); ?>">了解太阳能</a></dt>
                    </dl>
                     <dl class="leftListBot"></dl>
                     <dl class="top">
                    <a href="http://www.ceeg.cn/"><img src="/tfcms/upload/images/linkLogo01.jpg" style="width:220px;height:70px"></a>
                    </dl>
                    <dl class="top">
                     <a href="http://www.epia.org/"><img src="/tfcms/upload/images/linkLogo02.jpg" alt="EPIA"></a>
                    </dl>
                    <dl class="top">
                     <a href="http://www.ceeg.cn/"><img src="/tfcms/upload/images/linkLogo03.jpg" alt="中电电气"></a>
                    </dl>
            </div>
	<div class="rightBg">
            <div class="form">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'feedback-form',
                    'enableAjaxValidation'=>false,
            )); ?>
                    <?php echo $form->errorSummary($model); ?>
            <div class="rightTit"><h3>客户服务</h3></div>


        <table style="width:97%;" cellpadding="4" cellspacing="1">

        <tbody><tr>

          <td align="right" valign="top">姓名：</td>

          <td><input type="text" name="Feedback[content][xingming]" id="xingming" style="width:250px" class="intxt" value="">

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">公司名称：</td>

          <td><input type="text" name="Feedback[content][gongsimingchen]" id="gongsimingchen" style="width:250px" class="intxt" value="">

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">电子邮件：</td>

          <td><input type="text" name="Feedback[content][email]" id="email" style="width:250px" class="intxt" value="">

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">联系电话：</td>

          <td><input type="text" name="Feedback[content][lianxidianhua]" id="lianxidianhua" style="width:250px" class="intxt" value="">

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">地址：</td>

          <td><input type="text" name="Feedback[content][dizhi]" id="dizhi" style="width:250px" class="intxt" value="">

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">种类：</td>

          <td><input type="checkbox" name="Feedback[content][zhonglen]" class="np" value="1250">

            1250

            <input type="checkbox" name="Feedback[content][zhonglen]" class="np" value="1350">

            1350

            <input type="checkbox" name="Feedback[content][zhonglen]" class="np" value="1450">

            1450 </td>

        </tr>

        <tr>

          <td align="right" valign="top">数量：</td>

          <td><input type="text" name="Feedback[content][shuliang]" id="shuliang" style="width:250px" class="intxt" value="">

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">发货日期：</td>

          <td><input type="text" name="Feedback[content][fahuoriqi]" id="fahuoriqi" style="width:250px" class="intxt" value="">

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">备注：</td>

          <td><textarea name="Feedback[content][beizhu]" id="beizhu" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">产品外观：</td>

          <td><input type="radio" name="Feedback[content][chanpingwaiguan]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][chanpingwaiguan]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][chanpingwaiguan]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][chanpingwaiguan]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][chanpingwaiguan]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">外观不满意原因：</td>

          <td><textarea name="Feedback[content][waiguanyuanyin]" id="waiguanyuanyin" style="margin-left: 0px; margin-right: 0px; width: 502px; margin-top: 2px; margin-bottom: 2px; height: 110px; "></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">产品的包装条件：</td>

          <td><input type="radio" name="Feedback[content][baozhuangtiaojian]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][baozhuangtiaojian]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][baozhuangtiaojian]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][baozhuangtiaojian]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][baozhuangtiaojian]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">包装条件不满意原因：</td>

          <td><textarea name="Feedback[content][baozhuangyuanyin]" id="baozhuangyuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">适用于层压的状况：</td>

          <td><input type="radio" name="Feedback[content][shiyongzk]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][shiyongzk]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][shiyongzk]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][shiyongzk]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][shiyongzk]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">层压不满原因：</td>

          <td><textarea name="Feedback[content][cengyayuanyin]" id="cengyayuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">价格/品质比：</td>

          <td><input type="radio" name="Feedback[content][jiagebi]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][jiagebi]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][jiagebi]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][jiagebi]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][jiagebi]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">价格品质不满原因：</td>

          <td><textarea name="Feedback[content][jiageyuanyi]" id="jiageyuanyi" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">运输的及时性：</td>

          <td><input type="radio" name="Feedback[content][yunshuxing]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][yunshuxing]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][yunshuxing]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][yunshuxing]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][yunshuxing]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">运输及时性不满原因：</td>

          <td><textarea name="Feedback[content][yunshuyuanyin]" id="yunshuyuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">运输的安全性：</td>

          <td><input type="radio" name="Feedback[content][yunshuanquan]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][yunshuanquan]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][yunshuanquan]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][yunshuanquan]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][yunshuanquan]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">运输安全性不满原因：</td>

          <td><textarea name="Feedback[content][yunshubuyuanyin]" id="yunshubuyuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">客诉处理状况：</td>

          <td><input type="radio" name="Feedback[content][kesuchuli]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][kesuchuli]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][kesuchuli]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][kesuchuli]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][kesuchuli]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">客诉处理状况不满原因：</td>

          <td><textarea name="Feedback[content][kesuyuanyin]" id="kesuyuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">售后服务状况：</td>

          <td><input type="radio" name="Feedback[content][shishoufuwu]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][shishoufuwu]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][shishoufuwu]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][shishoufuwu]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][shishoufuwu]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">售后服务状况不满原因：</td>

          <td><textarea name="Feedback[content][shishoufuwuyuanyin]" id="shishoufuwuyuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">技术支持状况：</td>

          <td><input type="radio" name="Feedback[content][jishuzhichi]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][jishuzhichi]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][jishuzhichi]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][jishuzhichi]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][jishuzhichi]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">技术支持状况不满原因：</td>

          <td><textarea name="Feedback[content][jishuzhichiyuanyin]" id="jishuzhichiyuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>

        <tr>

          <td align="right" valign="top">其它销售支持：</td>

          <td><input type="radio" name="Feedback[content][qitazhichi]" class="np" value="1" checked="">

            非常满意

            <input type="radio" name="Feedback[content][qitazhichi]" class="np" value="2">

            满意

            <input type="radio" name="Feedback[content][qitazhichi]" class="np" value="3">

            一般

            <input type="radio" name="Feedback[content][qitazhichi]" class="np" value="4">

            不满意

            <input type="radio" name="Feedback[content][qitazhichi]" class="np" value="5">

            非常不满意 </td>

        </tr>

        <tr>

          <td align="right" valign="top">其它销售支持不满原因：</td>

          <td><textarea name="Feedback[content][qitazhichiyuanyin]" id="qitazhichiyuanyin" style="width:90%;height:80"></textarea>

          </td>

        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td height="70"><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
        </tr>

      </tbody></table>

            <?php $this->endWidget(); ?>

            </div><!-- form -->

	</div>
<div class="clr"></div>
</div>