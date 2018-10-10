<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<div class="page-header">当前位置：<span class="text-primary">模版设置</span></div>

<div class="page-content">
    <form action="" method="post" class="form-horizontal form-validate" enctype="multipart/form-data">

        <?php  if(!empty($_W['isfounder'])) { ?>
            <div class="form-group">
                <label class="col-lg control-label">管理端模板</label>
                <div class="col-sm-9 col-xs-12">
                    <label class="radio-inline"><input type="radio" name="data[close_v2]" value="0" <?php  if(empty($data['close_v2'])) { ?>checked="checked"<?php  } ?>> 开启返回旧版</label>
                    <label class="radio-inline"><input type="radio" name="data[close_v2]" value="1" <?php  if(!empty($data['close_v2'])) { ?>checked="checked"<?php  } ?>> 关闭返回旧版</label>
                    <div class="help-block">提示：开启返回旧版后用户可自行切换新旧版</div>
                </div>
            </div>
        <?php  } ?>

        <div class="form-group">
            <label class="col-lg control-label">手机端模板</label>
            <div class="col-sm-9 col-xs-12">
                <?php if(cv('sysset.template.edit')) { ?>
                <select class='form-control' name='data[style]'>
                    <?php  if(is_array($styles)) { foreach($styles as $style) { ?>
                    <option value='<?php  echo $style;?>' <?php  if($style==$data['style']) { ?>selected<?php  } ?>><?php  echo $style;?></option>
                    <?php  } } ?>
                </select>
                <?php  } else { ?>
                <input type="hidden" name="data[style]" value="<?php  echo $set['shop']['style'];?>"/>
                <div class='form-control-static'>
                    <?php  if(empty($data['style'])) { ?>default<?php  } else { ?><?php  echo $data['style'];?><?php  } ?>
                </div>
                <?php  } ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg control-label">手机端商品页</label>
            <div class="col-sm-9 col-xs-12">
                <?php if(cv('sysset.template.edit')) { ?>
                <label class="radio-inline"><input type="radio" name="data[detail_temp]" value="0" <?php  if(empty($data['detail_temp'])) { ?>checked="checked"<?php  } ?>> 滑动切换模式</label>
                <label class="radio-inline"><input type="radio" name="data[detail_temp]" value="1" <?php  if(!empty($data['detail_temp'])) { ?>checked="checked"<?php  } ?>> Tab切换模式</label>
                <?php  } else { ?>
                <div class='form-control-static'><?php  if(empty($data['detail_temp'])) { ?>滑动切换模式<?php  } else { ?>Tab切换模式<?php  } ?></div>
                <?php  } ?>
                <div class="help-block text-danger">注意: PC端访问WAP强制是Tab切换模式</div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg control-label"></label>
            <div class="col-sm-9 col-xs-12">
                <?php if(cv('sysset.template.edit')) { ?>
                <input type="submit" value="提交" class="btn btn-primary"/>
                <?php  } ?>
            </div>
        </div>

    </form>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>     
<!--913702023503242914-->