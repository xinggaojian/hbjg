<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">
    <?php include template("content","nav"); ?>
    <div class="content right">
        <?php include template("content","position"); ?>
        <div class="com_con">
            <ul class="project">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=039787030e0a64b02a8df26dcd4a331e&action=lists&catid=%24catid&num=12&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <div class="pic"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>"></a></div>
                    <div class="txt"><a href="<?php echo $r['url'];?>"><p title="<?php echo $r['title'];?>"><?php echo $r['title'];?></p></a></div>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>

            <div class="page">
                <?php echo $pages;?>
            </div>
        </div>
    </div>
</div>
<?php include template("content","foot"); ?>
<script>
    $(function () {
                for (var i = 0; i < $(".project li").length; i++) {
                    if ((i + 1) % 4 == 0) {
                        $(".project li").eq(i).css("margin-right", "0");
                    } else {
                    }

                }
            }
    )
    $("a").focus(function () {
        this.blur();
    });
</script>