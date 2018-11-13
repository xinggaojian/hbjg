<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>

<?php $banner = getads(11)?>
<div class="bigPicbox">
    <div class="slider">
        <?php $n=1;if(is_array($banner[d])) foreach($banner[d] AS $r) { ?>
        <div style="background-image:url(<?php echo $r['imageurl'];?>);"></div>
        <?php $n++;}unset($n); ?>
    </div>
    <div id="arrow">
        <div class="inner" style="width:1200px; height:410px;">
            <div id="pager"></div>
            <div id="prevnext">
                <a href="javascript:void(0);" id="prev"><img src="/statics/jiangong/images/prev.png"></a>
                <a href="javascript:void(0);" id="next"><img src="/statics/jiangong/images/next.png"></a>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="scrollnews">
        <div class="inner">
            <p class="left"><a href="article_cat.php-id=70.htm"><b>集团公告</b></a></p>
            <div class="news_wrap left">
                <ul class="news_list">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e5ee6293db194c4d8777ee73cb16ea4b&action=position&posid=18&order=listorder+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder ASC','limit'=>'6',));}?>
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <li><a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>"><?php echo $val['title'];?></a><span><?php echo date("Y-m-d",$val[inputtime]);?></span>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <div class="arrow"><a href="javascript:void(0);" class="aleft"><img
                        src="/statics/jiangong/images/iconup.png"></a><a href="javascript:void(0);" class="aright"><img
                        src="/statics/jiangong/images/icondown.png"></a></div>
            </div>
        </div>
    </div>
    <div class="tiao inner">
        <img src="tiao.jpg"/>
    </div>
    <div class="hotnews inner">
        <div class="focusPic left">
            <div class="picnews">
                <ul class="pic">
                    <li><img src="1495734779422109009.jpg"></li>
                    <li><img src="1495735420446859602.jpg"></li>
                    <li><img src="1489618340469240903.jpg"></li>
                    <li><img src="1489622900698383863.jpg"></li>
                    <li><img src="1516129897370271730.JPG"></li>
                </ul>
                <div class="txt-bg"></div>
                <div class="txt">
                    <ul>
                        <li><a href="info.php-id=669&type=2.htm">赵克志视察集团承建的省直人防项目</a></li>
                        <li><a href="info.php-id=670&type=2.htm">利比里亚总统视察SKD体育场维修项目</a></li>
                        <li><a href="info.php-id=586&type=2.htm">省委常委、秘书长商黎光到省直人防项目检查指导工作</a></li>
                        <li><a href="info.php-id=149&type=2.htm">集团隆重召开第二次党代会</a></li>
                        <li><a href="info.php-id=947&type=2.htm"> 河北建工集团2018年度工作会议隆重召开</a></li>
                    </ul>
                </div>
                <ul class="num">
                    <li class="on"><a>1</a><span></span></li>
                    <li><a>2</a><span></span></li>
                    <li><a>3</a><span></span></li>
                    <li><a>4</a><span></span></li>
                    <li><a>5</a><span></span></li>
                </ul>
            </div>
        </div>
        <div class="innews right">
            <div class="innews_tit"><h3 class="left"><a href="article_cat.php-id=42.htm">建工要闻</a></h3>
                <p class="right"><a href="article_cat.php-id=42.htm">更多</a></p></div>
            <ul class="innews_list">
                <li class="first">
                    <h3><a href="info.php-id=1341.htm" title=" 集团党委举办2018年度党支部书记培训暨宣传思想工作培训班">
                        集团党委举办2018年度党支部书记培训暨宣传思想工作培训班</a></h3>
                    <p>&nbsp;集团党委举办2018年度党支部书记培训暨宣传思想工作培训班
                        11月1日，集团2018年度党支部书记培训暨宣传思想工作培训班在集团六楼多功能厅开班。...</p>
                </li>
                <li><a href="info.php-id=1340.htm" title="集团荣获“企业信用评价AAA级信用企业”称号">集团荣获“企业信用评价AAA级信用企业”称号</a><span>(18-11-07)</span>
                </li>
                <li><a href="info.php-id=1315.htm" title=" 省住宅与房地产业协会党支部与河北建工集团党委联合慰问老党员及困难党员">省住宅与房地产业协会党支部与河北建工集团党委联合慰问老党员及困难...</a><span>(18-10-01)</span>
                </li>
                <li><a href="info.php-id=1302.htm" title="“河北建工”荣获2018年度“河北名片”荣誉称号">“河北建工”荣获2018年度“河北名片”荣誉称号</a><span>(18-09-06)</span>
                </li>
                <li><a href="info.php-id=1301.htm" title="集团召开集中观看学习警示教育大会">集团召开集中观看学习警示教育大会</a><span>(18-09-07)</span>
                </li>
                <li><a href="info.php-id=1267.htm"
                       title=" 集团召开领导班子巡视整改专题民主生活会">集团召开领导班子巡视整改专题民主生活会</a><span>(18-08-15)</span></li>
                <li><a href="info.php-id=1259.htm"
                       title="集团召开落实中央巡视整改工作动员部署会议">集团召开落实中央巡视整改工作动员部署会议</a><span>(18-08-08)</span></li>
            </ul>
        </div>
    </div>
    <div class="midads1 inner">
        <div class="midads1_pannel left">
            <a href="" target="_blank"><img src="1481932675459794647.jpg"></a>
        </div>
        <div class="midads1_search right">
            <form action="http://www.hbjgjt.cn/search.php" method="post">
                <input type="text" class="txt left" name="keywords" value="热搜：党的群众路线教育实践活动"
                       onfocus="if(this.value=='热搜：党的群众路线教育实践活动'){this.value='';}"
                       onblur="if(this.value==''){this.value='热搜：党的群众路线教育实践活动';}"><input type="submit" value=" "
                                                                                         class="btn right">
            </form>
        </div>
    </div>
    <div class="colcon1 inner">
        <div class="pannel01 left">
            <div class="pub_tit">
                <ul class="channel" id="tab1">
                    <li><a href="javascript:void(0);" class="now">建筑总承包</a></li>
                    <li><a href="javascript:void(0);">房地产开发</a></li>
                </ul>
                <ul class="pub_more" id="tab1_more">
                    <li><a href="article_cat.php-id=43.htm">更多</a></li>
                    <li style="display:none;"><a href="article_cat.php-id=44.htm">更多</a></li>
                </ul>
            </div>

            <div class="block_one">
                <ul class="listcon">
                    <li><a href="info.php-id=1321.htm"
                           title="集团奥体中心体育馆综合体工程荣获河北省绿色施工示范工程">集团奥体中心体育馆综合体工程荣获河北省绿色施工示范...</a>
                        <!--<span>(18-07-31)</span>--></li>
                    <li><a href="info.php-id=1320.htm" title="集团四川分公司承建的大英监狱项目顺利通过竣工验收">集团四川分公司承建的大英监狱项目顺利通过竣工验收</a>
                        <!--<span>(18-09-03)</span>--></li>
                    <li><a href="info.php-id=1319.htm" title="集团峰峰矿区道路景观整治工程顺利通过“丛台杯”评审">集团峰峰矿区道路景观整治工程顺利通过“丛台杯”评审</a>
                        <!--<span>(18-08-14)</span>--></li>
                    <li><a href="info.php-id=1318.htm" title="集团十分公司两项工程获河北省结构优质工程奖">集团十分公司两项工程获河北省结构优质工程奖</a>
                        <!--<span>(18-07-16)</span>--></li>
                    <li><a href="info.php-id=1142.htm" title="集团一项工程荣获河北省土木工程李春奖">集团一项工程荣获河北省土木工程李春奖</a>
                        <!--<span>(18-06-06)</span>--></li>
                    <li><a href="info.php-id=1076.htm"
                           title=" 集团SBA1205项目举办迎“五·一”安全知识竞答活动">集团SBA1205项目举办迎“五·一”安全知识竞答...</a>
                        <!--<span>(18-05-09)</span>--></li>
                    <li><a href="info.php-id=919.htm"
                           title="集团一项工程荣获中建协2017年“安全生产标准化工地”">集团一项工程荣获中建协2017年“安全生产标准化工...</a>
                        <!--<span>(17-12-21)</span>--></li>
                    <li><a href="info.php-id=918.htm" title="集团母子公司三单位荣获中国工程建设安全质量标准化示范单位称号">集团母子公司三单位荣获中国工程建设安全质量标准化示...</a>
                        <!--<span>(17-12-18)</span>--></li>
                </ul>
            </div>

            <div class="block_one" style="display:none;">
                <ul class="listcon">
                    <li><a href="info.php-id=1322.htm" title="房地产公司承德项目成功摘牌承德县优质210亩土地">房地产公司承德项目成功摘牌承德县优质210亩土地</a>
                        <!--<span>(18-09-28)</span>--></li>
                    <li><a href="info.php-id=1294.htm"
                           title="专家组对房地产公司高邑祥云·凤凰福邸项目进行住宅性能认定">专家组对房地产公司高邑祥云·凤凰福邸项目进行住宅性...</a>
                        <!--<span>(18-08-30)</span>--></li>
                    <li><a href="info.php-id=1263.htm" title="房地产公司召开中央巡视整改落实工作动员部署会">房地产公司召开中央巡视整改落实工作动员部署会</a>
                        <!--<span>(18-08-14)</span>--></li>
                    <li><a href="info.php-id=1262.htm"
                           title="房地产公司召开祥云·凤凰福邸项目“广厦奖”评选项目评审会">房地产公司召开祥云·凤凰福邸项目“广厦奖”评选项目...</a>
                        <!--<span>(18-08-14)</span>--></li>
                    <li><a href="info.php-id=1207.htm" title="房地产公司举行怀来绿色小镇项目合作签约仪式">房地产公司举行怀来绿色小镇项目合作签约仪式</a>
                        <!--<span>(18-07-12)</span>--></li>
                    <li><a href="info.php-id=1197.htm" title="房地产公司开展“参观红色教育基地，重温入党誓词”学习教育活动">房地产公司开展“参观红色教育基地，重温入党誓词”学...</a>
                        <!--<span>(18-07-10)</span>--></li>
                    <li><a href="info.php-id=1196.htm" title="房地产公司容昌物业举办彩色周末文艺汇演活动">房地产公司容昌物业举办彩色周末文艺汇演活动</a>
                        <!--<span>(18-07-10)</span>--></li>
                    <li><a href="info.php-id=1167.htm" title="房地产公司祥云·天和盛世项目奢华大门完美落成">房地产公司祥云·天和盛世项目奢华大门完美落成</a>
                        <!--<span>(18-06-22)</span>--></li>
                </ul>
            </div>
        </div>

        <div class="pannel01 pannelmar left">
            <div class="pub_tit">
                <ul class="channel channel2" id="tab2">
                    <li><a href="javascript:void(0);" class="now">科技创新</a></li>
                    <li><a href="javascript:void(0);">设计咨询</a></li>
                    <li><a href="javascript:void(0);">建材物流</a></li>
                </ul>
                <ul class="pub_more" id="tab2_more">
                    <li><a href="article_cat.php-id=45.htm">更多</a></li>
                    <li style="display:none;"><a href="article_cat.php-id=46.htm">更多</a></li>
                    <li style="display:none;"><a href="article_cat.php-id=47.htm">更多</a></li>
                </ul>
            </div>

            <div class="block_two">
                <ul class="listcon">
                    <li><a href="info.php-id=231.htm" title="集团公司承建的17项工程获批省第十九批建筑业新技术应用示范工程">集团公司承建的17项工程获批省第十九批建筑业新技术...</a>
                        <!--<span>(13-06-26)</span>--></li>
                    <li><a href="info.php-id=230.htm" title="集团13项研究课题在省住建厅立项">集团13项研究课题在省住建厅立项</a>
                        <!--<span>(13-06-26)</span>--></li>
                    <li><a href="info.php-id=229.htm" title="集团承办省建筑业企业技术中心建设研讨会">集团承办省建筑业企业技术中心建设研讨会</a>
                        <!--<span>(13-12-10)</span>--></li>
                    <li><a href="info.php-id=228.htm" title="集团25项工法被审定为省级工法">集团25项工法被审定为省级工法</a>
                        <!--<span>(14-02-26)</span>--></li>
                    <li><a href="info.php-id=227.htm" title="集团省四建公司荣获省科技一等奖 实现河北省建设系统获该奖的历史性突破">集团省四建公司荣获省科技一等奖
                        实现河北省建设系统...</a><!--<span>(14-03-31)</span>--></li>
                    <li><a href="info.php-id=226.htm" title="集团公司14项QC成果获奖">集团公司14项QC成果获奖</a>
                        <!--<span>(14-05-07)</span>--></li>
                    <li><a href="info.php-id=225.htm" title="集团26项成果获省建设科技进步奖">集团26项成果获省建设科技进步奖</a>
                        <!--<span>(14-05-14)</span>--></li>
                    <li><a href="info.php-id=224.htm" title="集团参编的国家标准形成征求意见稿">集团参编的国家标准形成征求意见稿</a>
                        <!--<span>(14-05-20)</span>--></li>
                </ul>
            </div>

            <div class="block_two" style="display:none;">
                <ul class="listcon">
                    <li><a href="info.php-id=1324.htm" title="集团BIM中心荣获" Autodesk全国优秀培训机构"称号">集团BIM中心荣获"Autodesk全国优秀培训机...</a>
                        <!--<span>(18-09-26)</span>--></li>
                    <li><a href="info.php-id=1323.htm"
                           title="集团公司获工信部授权建筑信息模型（BIM）实训基地资格">集团公司获工信部授权建筑信息模型（BIM）实训基地...</a>
                        <!--<span>(18-08-01)</span>--></li>
                    <li><a href="info.php-id=1092.htm" title="集团BIM中心到湖南建工考察学习BIM技术">集团BIM中心到湖南建工考察学习BIM技术</a>
                        <!--<span>(18-05-16)</span>--></li>
                    <li><a href="info.php-id=1054.htm" title="集团BIM中心举办首批BIM负责人培训">集团BIM中心举办首批BIM负责人培训</a>
                        <!--<span>(18-04-26)</span>--></li>
                    <li><a href="info.php-id=595.htm" title="集团BIM技术服务签约深圳海境界项目">集团BIM技术服务签约深圳海境界项目</a>
                        <!--<span>(17-03-24)</span>--></li>
                    <li><a href="info.php-id=591.htm" title="河北建筑信息模型学会到集团设计院考察">河北建筑信息模型学会到集团设计院考察</a>
                        <!--<span>(17-03-20)</span>--></li>
                </ul>
            </div>

            <div class="block_two" style="display:none;">
                <ul class="listcon">
                    <li><a href="info.php-id=1342.htm" title="北大荒建设集团到访物流公司进行合作交流接洽">北大荒建设集团到访物流公司进行合作交流接洽</a>
                        <!--<span>(18-11-06)</span>--></li>
                    <li><a href="info.php-id=1316.htm" title="建工物流中鼎嘉华采购网搭建信用评级系统">建工物流中鼎嘉华采购网搭建信用评级系统</a>
                        <!--<span>(18-10-08)</span>--></li>
                    <li><a href="info.php-id=891.htm" title="创新物流管理新举措 优化集团集采服务工作">创新物流管理新举措 优化集团集采服务工作</a>
                        <!--<span>(17-11-16)</span>--></li>
                    <li><a href="info.php-id=889.htm" title="落实“五大员”工作方法  助推物流精细化管理">落实“五大员”工作方法 助推物流精细化管理</a>
                        <!--<span>(17-11-12)</span>--></li>
                    <li><a href="info.php-id=607.htm" title="建工物流网标平台运行顺利">建工物流网标平台运行顺利</a>
                        <!--<span>(17-03-30)</span>--></li>
                    <li><a href="info.php-id=606.htm" title="物流公司自主开发的问题清单管理系统初见成效">物流公司自主开发的问题清单管理系统初见成效</a>
                        <!--<span>(17-03-29)</span>--></li>
                    <li><a href="info.php-id=605.htm" title="建工物流落实风险防控新举措">建工物流落实风险防控新举措</a>
                        <!--<span>(17-03-29)</span>--></li>
                    <li><a href="info.php-id=604.htm" title="建工物流稳步推进中鼎嘉华公司独立运营">建工物流稳步推进中鼎嘉华公司独立运营</a>
                        <!--<span>(17-03-30)</span>--></li>
                </ul>
            </div>

        </div>

        <div class="pannel02 right">
            <div class="channel3">
                <h3 class="h31"><a href="video.php-id=75.htm">视频中心</a></h3>
                <p><a href="video.php-id=75.htm">更多</a></p>
            </div>
            <div class="videoimg">
                <a href="javascript:void(0);" id="play_btn"><img src="videoimg.jpg"></a>
            </div>
            <div class="videotit"><a href="">河北建工集团简介</a></div>
        </div>

    </div>
    <div class="hr"></div>
    <div class="colcon2 inner">
        <div class="pannel01 left">
            <div class="pub_tit">
                <ul class="channel" id="tab3">
                    <li><a href="javascript:void(0);" class="now">海外事业</a></li>
                    <li><a href="javascript:void(0);">项目投资</a></li>
                </ul>
                <ul class="pub_more" id="tab3_more">
                    <li><a href="article_cat.php-id=49.htm">更多</a></li>
                    <li style="display:none;"><a href="article_cat.php-id=48.htm">更多</a></li>
                </ul>
            </div>

            <div class="block_three">
                <ul class="listcon">
                    <li><a href="info.php-id=1339.htm" title=" 集团承建的援牙买加幼儿园项目对外移交仪式隆重举行">集团承建的援牙买加幼儿园项目对外移交仪式隆重举行</a>
                        <!--<span>(18-11-07)</span>--></li>
                    <li><a href="info.php-id=922.htm"
                           title=" 集团“大监督办公室”对援牙买加幼儿园项目进行专项检查">集团“大监督办公室”对援牙买加幼儿园项目进行专项检...</a>
                        <!--<span>(17-12-21)</span>--></li>
                    <li><a href="info.php-id=921.htm" title=" 集团国际公司举办国际工程财税管理专题培训班">集团国际公司举办国际工程财税管理专题培训班</a>
                        <!--<span>(17-12-21)</span>--></li>
                    <li><a href="info.php-id=633.htm" title="省境外安保督导组到集团调研督导">省境外安保督导组到集团调研督导</a>
                        <!--<span>(17-05-04)</span>--></li>
                    <li><a href="info.php-id=236.htm" title="利比里亚项目启动安全生产月活动">利比里亚项目启动安全生产月活动</a>
                        <!--<span>(15-06-08)</span>--></li>
                    <li><a href="info.php-id=234.htm" title="集团国际公司组织开展境外安全风险与危机管理培训">集团国际公司组织开展境外安全风险与危机管理培训</a>
                        <!--<span>(15-11-30)</span>--></li>
                    <li><a href="info.php-id=233.htm" title="国际公司获河北省内首家海关AEO高级认证企业资质">国际公司获河北省内首家海关AEO高级认证企业资质</a>
                        <!--<span>(16-01-10)</span>--></li>
                    <li><a href="info.php-id=232.htm" title="委内瑞拉武装团体自治学院代表团到集团考察">委内瑞拉武装团体自治学院代表团到集团考察</a>
                        <!--<span>(16-04-25)</span>--></li>
                </ul>
            </div>

            <div class="block_three" style="display:none;">
                <ul class="listcon">
                    <li><a href="info.php-id=1093.htm" title=" 投资公司董事长王文利带队赴景州文体中心项目调研">投资公司董事长王文利带队赴景州文体中心项目调研</a>
                        <!--<span>(18-05-16)</span>--></li>
                    <li><a href="info.php-id=1090.htm" title=" 河北建工装配式建筑现场工作会顺利召开">河北建工装配式建筑现场工作会顺利召开</a>
                        <!--<span>(18-05-16)</span>--></li>
                    <li><a href="info.php-id=806.htm" title="河北建工集团基金公司与河北银行进行基金合作洽谈">河北建工集团基金公司与河北银行进行基金合作洽谈</a>
                        <!--<span>(17-08-03)</span>--></li>
                    <li><a href="info.php-id=786.htm" title="集团中标景县PPP项目">集团中标景县PPP项目</a><!--<span>(17-07-02)</span>-->
                    </li>
                    <li><a href="info.php-id=775.htm"
                           title="集团建楚环境公司与中核华夏公司举行战略合作协议签约仪式">集团建楚环境公司与中核华夏公司举行战略合作协议签约...</a>
                        <!--<span>(17-07-26)</span>--></li>
                    <li><a href="info.php-id=773.htm" title="投资公司开展2017年度年中考核工作">投资公司开展2017年度年中考核工作</a>
                        <!--<span>(17-07-26)</span>--></li>
                    <li><a href="info.php-id=621.htm" title="投资公司成立基金公司开拓投融资业务">投资公司成立基金公司开拓投融资业务</a>
                        <!--<span>(17-04-18)</span>--></li>
                    <li><a href="info.php-id=610.htm" title="集团董事长李云霄带队拜访邢台市人民政府">集团董事长李云霄带队拜访邢台市人民政府</a>
                        <!--<span>(17-03-30)</span>--></li>
                </ul>
            </div>
        </div>

        <div class="pannel01 pannelmar left">
            <div class="pub_tit">
                <ul class="channel channel2" id="tab4">
                    <li><a href="javascript:void(0);" class="now">党建园地</a></li>
                    <li><a href="javascript:void(0);">工团建设</a></li>
                    <li><a href="javascript:void(0);">子公司风采</a></li>
                </ul>
                <ul class="pub_more" id="tab4_more">
                    <li><a href="article_cat.php-id=50.htm">更多</a></li>
                    <li style="display:none;"><a href="article_cat.php-id=51.htm">更多</a></li>
                    <li style="display:none;"><a href="article_cat.php-id=52.htm">更多</a></li>
                </ul>
            </div>

            <div class="block_four">
                <ul class="listcon">
                    <li><a href="info.php-id=1331.htm" title="集团召开党群工作规范化制度化建设调度会">集团召开党群工作规范化制度化建设调度会</a>
                        <!--<span>(18-10-21)</span>--></li>
                    <li><a href="info.php-id=1317.htm" title="集团开展“不忘初心，牢记使命”党建知识答题活动">集团开展“不忘初心，牢记使命”党建知识答题活动</a>
                        <!--<span>(18-07-06)</span>--></li>
                    <li><a href="info.php-id=1181.htm" title="集团党委组织“两优一先”受表彰人员赴八路军129师司令部旧址参观学习">集团党委组织“两优一先”受表彰人员赴八路军129师...</a>
                        <!--<span>(18-07-01)</span>--></li>
                    <li><a href="info.php-id=1153.htm" title="集团领导班子迎接省国资委年度综合考评">集团领导班子迎接省国资委年度综合考评</a>
                        <!--<span>(18-06-14)</span>--></li>
                    <li><a href="info.php-id=1124.htm" title="集团领导深入扶贫村督导脱贫攻坚工作">集团领导深入扶贫村督导脱贫攻坚工作</a>
                        <!--<span>(18-05-30)</span>--></li>
                    <li><a href="info.php-id=1118.htm" title="相互评优找错 共同探讨要领 集团组织党建新闻写作 观摩研讨活动">相互评优找错 共同探讨要领 集团组织党建新闻写作
                        ...</a><!--<span>(18-05-28)</span>--></li>
                    <li><a href="info.php-id=1065.htm" title="集团组织收看纪念马克思诞辰200周年大会直播">集团组织收看纪念马克思诞辰200周年大会直播</a>
                        <!--<span>(18-05-05)</span>--></li>
                    <li><a href="info.php-id=981.htm" title="竞聘展风采  企业聚英才 集团公司成功举行中层干部竞聘和推荐大会">竞聘展风采 企业聚英才
                        集团公司成功举行中层干部...</a><!--<span>(18-03-09)</span>--></li>
                </ul>
            </div>

            <div class="block_four" style="display:none;">
                <ul class="listcon">
                    <li><a href="info.php-id=1228.htm" title="集团举办“开启新征程  建功新时代”新入职大学生联欢会">集团举办“开启新征程
                        建功新时代”新入职大学生联...</a><!--<span>(18-07-22)</span>--></li>
                    <li><a href="info.php-id=1220.htm" title="集团团委召开团的十八大精神学习会暨三季度工作调度会">集团团委召开团的十八大精神学习会暨三季度工作调度会</a>
                        <!--<span>(18-07-19)</span>--></li>
                    <li><a href="info.php-id=1089.htm" title="投资公司开启第二届“青年读书季”活动">投资公司开启第二届“青年读书季”活动</a>
                        <!--<span>(18-05-16)</span>--></li>
                    <li><a href="info.php-id=1074.htm" title="集团召开团务工作交流会">集团召开团务工作交流会</a><!--<span>(18-05-09)</span>-->
                    </li>
                    <li><a href="info.php-id=1056.htm" title="昂首阔步显气势  激情飞扬展风采 集团职工参加省直机关健步走展示活动">昂首阔步显气势 激情飞扬展风采
                        集团职工参加省直...</a><!--<span>(18-04-27)</span>--></li>
                    <li><a href="info.php-id=1032.htm" title="集团党委副书记张庆虎为职工足球赛助威加油">集团党委副书记张庆虎为职工足球赛助威加油</a>
                        <!--<span>(18-04-16)</span>--></li>
                    <li><a href="info.php-id=1007.htm" title=" 集团开展植树护绿志愿服务活动">集团开展植树护绿志愿服务活动</a>
                        <!--<span>(18-03-30)</span>--></li>
                    <li><a href="info.php-id=991.htm" title="集团组织开展交通文明志愿者活动">集团组织开展交通文明志愿者活动</a>
                        <!--<span>(18-03-19)</span>--></li>
                </ul>
            </div>

            <div class="block_four" style="display:none;">
                <ul class="listcon">
                    <li><a href="info.php-id=835.htm"
                           title="省委常委、组织部长梁田庚到省二建公司老年大学项目调研指导">省委常委、组织部长梁田庚到省二建公司老年大学项目调...</a>
                        <!--<span>(17-08-27)</span>--></li>
                    <li><a href="info.php-id=1338.htm" title=" 关爱残疾儿童  让爱洒满人间——集团装饰公司走进石家庄超凡儿童拓展训练中心看望特殊儿童">关爱残疾儿童
                        让爱洒满人间——集团装饰公司走进石...</a><!--<span>(18-11-06)</span>--></li>
                    <li><a href="info.php-id=1336.htm" title="集团装饰公司再次获得三项实用新型专利授权">集团装饰公司再次获得三项实用新型专利授权</a>
                        <!--<span>(18-11-06)</span>--></li>
                    <li><a href="info.php-id=1335.htm" title="房地产公司滕州项目用智慧和力量演绎“速度与激情”">房地产公司滕州项目用智慧和力量演绎“速度与激情”</a>
                        <!--<span>(18-10-31)</span>--></li>
                    <li><a href="info.php-id=1333.htm" title="省二建公司选手在全省职业技能大赛中获佳绩">省二建公司选手在全省职业技能大赛中获佳绩</a>
                        <!--<span>(18-10-23)</span>--></li>
                    <li><a href="info.php-id=1328.htm" title="省二建公司工会举办职工羽乒比赛">省二建公司工会举办职工羽乒比赛</a>
                        <!--<span>(18-10-11)</span>--></li>
                    <li><a href="info.php-id=1311.htm" title="省二建公司机关创意企业文化竞赛迎中秋">省二建公司机关创意企业文化竞赛迎中秋</a>
                        <!--<span>(18-09-25)</span>--></li>
                    <li><a href="info.php-id=1309.htm" title="省二建公司工会举办“安康杯”职工安全健康教育讲座">省二建公司工会举办“安康杯”职工安全健康教育讲座</a>
                        <!--<span>(18-09-19)</span>--></li>
                </ul>
            </div>
        </div>

        <div class="pannel02 right">
            <div class="channel3 channel33">
                <h3 class="h32"><a href="contact_news.php-id=72.htm">招标公告</a></h3>
                <p><a href="contact_news.php-id=72.htm">更多</a></p>
            </div>
            <ul class="bidlist">
                <li><a href="info.php-id=1326.htm" title="邢台市廉政教育基地（办案点）项目防水专业分包招标公告">邢台市廉政教育基地（办案点）项目防...</a></li>
                <li><a href="info.php-id=1314.htm" title="石家庄市井陉矿区滨河路排洪沟综合整治水系工程劳务施工分包招标公告">石家庄市井陉矿区滨河路排洪沟综合整...</a>
                </li>
                <li><a href="info.php-id=1306.htm"
                       title="石家庄海山实业发展总公司工矿棚户区改造项目二期(一阶段)外线配套工程招标公告">石家庄海山实业发展总公司工矿棚户区...</a></li>
                <li><a href="info.php-id=1305.htm" title="赣州市南康区城发、东山之冠项目桩基工程劳务施工分包招标公告">赣州市南康区城发、东山之冠项目桩基...</a></li>
                <li><a href="info.php-id=1304.htm" title="肃宁县中医医院新建项目消防工程专业分包招标公告">肃宁县中医医院新建项目消防工程专业...</a></li>
                <li><a href="info.php-id=1303.htm" title="石家庄市BA0115工程室外工程专业分包招标公告">石家庄市BA0115工程室外工程专...</a></li>
                <li><a href="info.php-id=1300.htm" title="安国数字中药都一期续建区工程屋面瓦劳务施工分包招标公告（新）">安国数字中药都一期续建区工程屋面瓦...</a></li>
                <li><a href="info.php-id=1291.htm" title="安国数字中药都一期续建区工程(12#楼)主体劳务施工分包招标公告">安国数字中药都一期续建区工程(12...</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div class="midads2 inner">
        <a href="" target="_blank"><img src="1481933328266766791.jpg"></a>
    </div>
    <div class="colcon3 inner">
        <div class="colconL left">
            <div class="colconLT">

                <div class="pannel01 left">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab5">
                            <li><a href="javascript:void(0);" class="now">政策风向</a></li>
                            <li><a href="javascript:void(0);">媒体报道</a></li>
                        </ul>
                        <ul class="pub_more" id="tab5_more">
                            <li><a href="article_cat.php-id=53.htm">更多</a></li>
                            <li style="display:none;"><a href="article_cat.php-id=54.htm">更多</a></li>
                        </ul>
                    </div>
                    <div class="block_five">
                        <ul class="listcon listcon_zc">
                            <li><a href="info.php-id=344.htm" title="全国劳模和先进工作者表彰大会举行 习近平讲话">全国劳模和先进工作者表彰大会举行
                                习近平讲话</a><span>(15-04-30)</span></li>
                            <li><a href="info.php-id=343.htm"
                                   title="省住建厅发布《关于调整安全生产文明施工费的通知》">省住建厅发布《关于调整安全生产文明施工费的通知》</a><span>(15-07-16)</span>
                            </li>
                            <li><a href="info.php-id=342.htm" title="河北省委印发《河北省党员干部政治纪律和政治规矩“十不准”》">河北省委印发《河北省党员干部政治纪律和政治规矩“十...</a><span>(15-07-20)</span>
                            </li>
                            <li><a href="info.php-id=341.htm" title="媒体：习近平四提国企改革 六件事将成重点">媒体：习近平四提国企改革
                                六件事将成重点</a><span>(15-07-30)</span></li>
                            <li><a href="info.php-id=340.htm" title="科技创新要“顶天”又要“立地”">科技创新要“顶天”又要“立地”</a><span>(15-07-30)</span>
                            </li>
                            <li><a href="info.php-id=339.htm"
                                   title="河北实施居住建筑节能新标准">河北实施居住建筑节能新标准</a><span>(15-09-06)</span></li>
                        </ul>
                    </div>
                    <div class="block_five" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <li><a href="info.php-id=641.htm" title="《河北工人报》头版报道省直在集团奥体中心工地举办的“安康杯”竞赛活动">《河北工人报》头版报道省直在集团奥体中心工地举办的...</a><span>(17-05-09)</span>
                            </li>
                            <li><a href="info.php-id=637.htm" title="《河北工人报》专版刊登河北建工《工匠精神催开援外“友谊之花”》">《河北工人报》专版刊登河北建工《工匠精神催开援外“...</a><span>(17-05-04)</span>
                            </li>
                            <li><a href="info.php-id=417.htm" title="河北新闻网报道集团安全生产演讲比赛">河北新闻网报道集团安全生产演讲比赛</a><span>(15-06-01)</span>
                            </li>
                            <li><a href="info.php-id=430.htm"
                                   title="《中国安全生产报》报道集团省安装公司安全生产工作">《中国安全生产报》报道集团省安装公司安全生产工作</a><span>(12-08-31)</span>
                            </li>
                            <li><a href="info.php-id=429.htm" title="《中国安全生产报》报道集团沧州管业大厦项目安全管理做法">《中国安全生产报》报道集团沧州管业大厦项目安全管理...</a><span>(12-12-17)</span>
                            </li>
                            <li><a href="info.php-id=428.htm" title="《河北日报》专版刊发《六十年风雨兼程 一甲子璀璨辉煌》文章报道集团发展成就">《河北日报》专版刊发《六十年风雨兼程
                                一甲子璀璨辉...</a><span>(12-12-17)</span></li>
                        </ul>
                    </div>
                </div>


                <div class="pannel01 right">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab6">
                            <li><a href="javascript:void(0);" class="now">楷模剪影</a></li>
                            <li><a href="javascript:void(0);">学习导航</a></li>
                            <li><a href="javascript:void(0);">好文共享</a></li>
                        </ul>
                        <ul class="pub_more" id="tab6_more">
                            <li><a href="article_cat.php-id=55.htm">更多</a></li>
                            <li style="display:none;"><a href="article_cat.php-id=56.htm">更多</a></li>
                            <li style="display:none;"><a href="article_cat.php-id=58.htm">更多</a></li>
                        </ul>
                    </div>
                    <div class="block_six">
                        <ul class="listcon listcon_zc">
                            <li><a href="info.php-id=1345.htm" title="李庆伟：兢兢业业干事业  严谨务实创精品">李庆伟：兢兢业业干事业
                                严谨务实创精品</a><span>(18-11-07)</span></li>
                            <li><a href="info.php-id=1344.htm" title="李玉龙：爱岗敬业树形象 踏实进取讲奉献">李玉龙：爱岗敬业树形象 踏实进取讲奉献</a><span>(18-11-07)</span>
                            </li>
                            <li><a href="info.php-id=1343.htm"
                                   title="一名90后党员的逐梦之路">一名90后党员的逐梦之路</a><span>(18-11-07)</span></li>
                            <li><a href="info.php-id=1006.htm" title=" 王超星：助人为乐、爱岗敬业好职工">王超星：助人为乐、爱岗敬业好职工</a><span>(18-03-28)</span>
                            </li>
                            <li>
                                <a href="javascript:if(confirm('http://hebei.hebnews.cn/2018-01/17/content_6750339.htm  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://hebei.hebnews.cn/2018-01/17/content_6750339.htm'"
                                   title="人民警察“老吕叨叨”">人民警察“老吕叨叨”</a><span>(18-01-17)</span></li>
                            <li><a href="info.php-id=815.htm" title="项目大管家    小家贴心人——记省二建曹县垃圾焚烧发电厂项目经理习永军">项目大管家
                                小家贴心人——记省二建曹县垃圾焚...</a><span>(17-08-06)</span></li>
                        </ul>
                    </div>
                    <div class="block_six" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <li><a href="info.php-id=1330.htm" title="中华人民共和国宪法（2018年修正）">中华人民共和国宪法（2018年修正）</a><span>(18-09-25)</span>
                            </li>
                            <li><a href="info.php-id=1025.htm"
                                   title=" 中华人民共和国核安全法">中华人民共和国核安全法</a><span>(18-04-12)</span></li>
                            <li><a href="info.php-id=1024.htm"
                                   title=" 中华人民共和国网络安全法">中华人民共和国网络安全法</a><span>(18-04-12)</span></li>
                            <li><a href="info.php-id=1023.htm"
                                   title="中华人民共和国反恐怖主义法">中华人民共和国反恐怖主义法</a><span>(18-04-12)</span></li>
                            <li><a href="info.php-id=1022.htm"
                                   title="中华人民共和国反间谍法">中华人民共和国反间谍法</a><span>(18-04-12)</span></li>
                            <li><a href="info.php-id=1021.htm"
                                   title="中华人民共和国国家安全法">中华人民共和国国家安全法</a><span>(18-04-11)</span></li>
                        </ul>
                    </div>
                    <div class="block_six" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <li><a href="info.php-id=1256.htm" title=" 读《习近平的七年知青岁月》有感">读《习近平的七年知青岁月》有感</a><span>(18-08-09)</span>
                            </li>
                            <li><a href="info.php-id=1255.htm" title=" 《人工智能》读后感">《人工智能》读后感</a><span>(18-08-09)</span>
                            </li>
                            <li><a href="info.php-id=1254.htm" title=" 读《匠人精神》有感">读《匠人精神》有感</a><span>(18-08-09)</span>
                            </li>
                            <li><a href="info.php-id=1204.htm" title="不忘初心  为梦前行 ——装饰设计分公司群像速写">不忘初心 为梦前行
                                ——装饰设计分公司群像速写</a><span>(18-07-13)</span></li>
                            <li><a href="info.php-id=1066.htm" title="在纪念马克思诞辰200周年大会上的讲话">在纪念马克思诞辰200周年大会上的讲话</a><span>(18-05-05)</span>
                            </li>
                            <li><a href="info.php-id=1034.htm"
                                   title="你之所以浮躁，是因为着急">你之所以浮躁，是因为着急</a><span>(18-04-16)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="colconLB">

                <div class="pannel01 left">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab7">
                            <li><a href="javascript:void(0);" class="now">管理论坛</a></li>
                            <li><a href="javascript:void(0);">时尚生活</a></li>
                        </ul>
                        <ul class="pub_more" id="tab7_more">
                            <li><a href="article_cat.php-id=57.htm">更多</a></li>
                            <li style="display:none;"><a href="article_cat.php-id=59.htm">更多</a></li>
                        </ul>
                    </div>
                    <div class="block_seven lt_bg">
                        <ul class="listcon listcon_zc">
                            <li><a href="info.php-id=391.htm" title="安全学习无止境 安全警钟须长鸣">安全学习无止境 安全警钟须长鸣</a><span>(14-06-23)</span>
                            </li>
                            <li><a href="info.php-id=390.htm" title="为什么要开展消防安全“四个能力”建设">为什么要开展消防安全“四个能力”建设</a><span>(14-06-23)</span>
                            </li>
                            <li><a href="info.php-id=389.htm" title="安全之我见">安全之我见</a><span>(14-06-23)</span></li>
                            <li><a href="info.php-id=388.htm" title="让安全成为习惯">让安全成为习惯</a><span>(14-06-23)</span></li>
                            <li><a href="info.php-id=387.htm" title="守护生命红线 撑起安全蓝天">守护生命红线
                                撑起安全蓝天</a><span>(14-08-04)</span></li>
                            <li><a href="info.php-id=386.htm" title="管理故事：扁鹊的医术">管理故事：扁鹊的医术</a><span>(14-12-30)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="block_seven lt_bg" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <li><a href="info.php-id=1245.htm" title="为什么老人常说“夏不坐木，冬不坐石”">为什么老人常说“夏不坐木，冬不坐石”</a><span>(18-08-03)</span>
                            </li>
                            <li><a href="info.php-id=401.htm" title="生活小窍门">生活小窍门</a><span>(14-06-23)</span></li>
                            <li><a href="info.php-id=400.htm" title="4种懒要不得">4种懒要不得</a><span>(14-07-09)</span></li>
                            <li><a href="info.php-id=398.htm" title="酒桌上的点菜文化">酒桌上的点菜文化</a><span>(14-08-04)</span></li>
                            <li><a href="info.php-id=397.htm" title="晚餐吃什么好？">晚餐吃什么好？</a><span>(14-08-04)</span></li>
                            <li><a href="info.php-id=396.htm"
                                   title="通讯诈骗该防范哪些类型？">通讯诈骗该防范哪些类型？</a><span>(15-06-02)</span></li>
                        </ul>
                    </div>
                </div>


                <div class="pannel01 right">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab8">
                            <li><a href="javascript:void(0);" class="now">艺术之窗</a></li>
                            <li><a href="javascript:void(0);">公益广告</a></li>
                        </ul>
                        <ul class="pub_more" id="tab8_more">
                            <li><a href="article_cat.php-id=63&type=2.htm">更多</a></li>
                            <li style="display:none;"><a href="article_cat.php-id=64&type=2.htm">更多</a></li>
                        </ul>
                    </div>

                    <div class="block_eight">
                        <div class="imgcollect">
                            <div class="imgcollect_slider">
                                <div><a href="info.php-id=156&type=2.htm" title="艺术之窗"><img
                                        src="1481918022566147542.jpg" alt="艺术之窗"></a></div>
                            </div>
                            <div id="leftright">
                                <a href="javascript:void(0);" id="left"><img src="arrowleft.png"></a>
                                <a href="javascript:void(0);" id="right"><img src="arrowright.png"></a>
                            </div>
                        </div>
                    </div>

                    <div class="block_eight" style="display:none;">
                        <div class="imgcollect">
                            <div class="imgcollect_slider1">
                                <div><a href="info.php-id=411&type=2.htm" title="“善行河北  讲文明树新风” 公益广告"><img
                                        src="1482364052303856248.jpg" alt="“善行河北  讲文明树新风” 公益广告"></a></div>
                                <div><a href="info.php-id=410&type=2.htm" title="“善行河北   讲文明树新风”公益广告"><img
                                        src="1482363861602914200.jpg" alt="“善行河北   讲文明树新风”公益广告"></a></div>
                                <div><a href="info.php-id=409&type=2.htm" title="“善行河北  讲文明树新风”公益广告"><img
                                        src="1482363722991373040.jpg" alt="“善行河北  讲文明树新风”公益广告"></a></div>
                                <div><a href="info.php-id=408&type=2.htm" title="“善行河北 讲文明树新风”公益广告"><img
                                        src="1482363623405200870.jpg" alt="“善行河北 讲文明树新风”公益广告"></a></div>
                                <div><a href="info.php-id=407&type=2.htm" title="图说我们的价值观"><img
                                        src="1482363493594494151.jpg" alt="图说我们的价值观"></a></div>
                                <div><a href="info.php-id=406&type=2.htm" title="“经济强省 美丽河北” 公益广告"><img
                                        src="1482363308932737867.jpg" alt="“经济强省 美丽河北” 公益广告"></a></div>
                            </div>
                            <div id="leftright">
                                <a href="javascript:void(0);" id="left1"><img src="arrowleft.png"></a>
                                <a href="javascript:void(0);" id="right1"><img src="arrowright.png"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="colconR right">
            <ul class="zt_list">
                <li class="first"><a href="about.php-id=155.htm"><img src="zt_list1.jpg"></a></li>
                <li><a href="article_cat.php-id=60.htm" target="_blank"><img src="1481933871225514433.jpg"></a></li>
                <li><a href="article_cat.php-id=61.htm" target="_blank"><img src="1481933894504247021.jpg"></a></li>
                <li><a href="article_cat.php-id=76.htm" target="_blank"><img src="1481933920251021515.jpg"></a></li>
            </ul>
            <div class="serv_tit">便民服务</div>
            <ul class="serv_list">
                <li><span><img src="weather_01.png"></span><a
                        href="javascript:if(confirm('http://www.cma.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.cma.gov.cn/'"
                        target="_blank">天气查询</a></li>
                <li><span><img src="weather_02.png"></span><a
                        href="javascript:if(confirm('http://www.cma.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.cma.gov.cn/'"
                        target="_blank">空气质量</a></li>
                <li><span><img src="weather_03.png"></span><a
                        href="javascript:if(confirm('http://wannianli.tianqi.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://wannianli.tianqi.com/'"
                        target="_blank">万年历查询</a></li>
                <li><span><img src="weather_04.png"></span><a
                        href="javascript:if(confirm('http://www.jiazhao.com/chepaihao/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.jiazhao.com/chepaihao/'"
                        target="_blank">车牌查询</a></li>
                <li><span><img src="weather_05.png"></span><a
                        href="javascript:if(confirm('http://www.sjzbus.com.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.sjzbus.com.cn/'"
                        target="_blank">公交线路查询</a></li>
                <li><span><img src="weather_06.png"></span><a
                        href="javascript:if(confirm('http://www.12306.cn/mormhweb/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.12306.cn/mormhweb/'"
                        target="_blank">火车时刻</a></li>
                <li><span><img src="weather_07.png"></span><a
                        href="javascript:if(confirm('http://flights.ctrip.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://flights.ctrip.com/'"
                        target="_blank">飞机航班</a></li>
                <li><span><img src="weather_08.png"></span><a
                        href="javascript:if(confirm('http://www.iciba.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.iciba.com/'"
                        target="_blank">英语词典</a></li>
            </ul>
        </div>
    </div>
    <div class="scrollcase">
        <div class="inner">
            <div class="scrollcase_tit">
                <h3><a href="projects.php-pid=22.htm">工程图展</a></h3>
                <p class="pub_more"><a href="projects.php-pid=22.htm">更多</a></p>
            </div>
            <div id="index_pictures">
                <ul id="scrollcase_list">
                    <li>
                        <div><a href="detail.php-id=77.htm" title="沧州市博物馆工程"><img
                                src="77_thumb_G_1482455919001.jpg"></a></div>
                        <p><a href="detail.php-id=77.htm" title="沧州市博物馆工程">沧州市博物馆工程</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=78.htm" title="沧州市招商大厦(市民服务中心)工程"><img
                                src="78_thumb_G_1482455948927.jpg"></a></div>
                        <p><a href="detail.php-id=78.htm" title="沧州市招商大厦(市民服务中心)工程">沧州市招商大厦(市民...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=80.htm" title="河北白楼宾馆"><img src="80_thumb_G_1482456004684.jpg"></a>
                        </div>
                        <p><a href="detail.php-id=80.htm" title="河北白楼宾馆">河北白楼宾馆</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=81.htm" title="河北建设服务中心工程"><img src="81_thumb_G_1482456077400.jpg"></a>
                        </div>
                        <p><a href="detail.php-id=81.htm" title="河北建设服务中心工程">河北建设服务中心工程</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=84.htm" title="华北油田总医院综合医疗楼工程"><img
                                src="84_thumb_G_1482456199776.jpg"></a></div>
                        <p><a href="detail.php-id=84.htm" title="华北油田总医院综合医疗楼工程">华北油田总医院综合医...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=76.htm" title="保定钞票纸厂制浆造纸生产系统技术改造工程"><img
                                src="76_thumb_G_1482455886892.jpg"></a></div>
                        <p><a href="detail.php-id=76.htm" title="保定钞票纸厂制浆造纸生产系统技术改造工程">保定钞票纸厂制浆造纸...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=79.htm" title="大连水泥厂异地新建5000td工程"><img
                                src="79_thumb_G_1482455974431.jpg"></a></div>
                        <p><a href="detail.php-id=79.htm" title="大连水泥厂异地新建5000td工程">大连水泥厂异地新建5...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=82.htm" title="河北医科大学综合楼工程"><img src="82_thumb_G_1482456110024.jpg"></a>
                        </div>
                        <p><a href="detail.php-id=82.htm" title="河北医科大学综合楼工程">河北医科大学综合楼工...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=83.htm" title="河北张家口宣化区羊坊污水处理厂工程"><img
                                src="83_thumb_G_1482456141379.jpg"></a></div>
                        <p><a href="detail.php-id=83.htm" title="河北张家口宣化区羊坊污水处理厂工程">河北张家口宣化区羊坊...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=85.htm" title="山东济南玉清水厂工程"><img src="85_thumb_G_1482456227938.jpg"></a>
                        </div>
                        <p><a href="detail.php-id=85.htm" title="山东济南玉清水厂工程">山东济南玉清水厂工程</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=86.htm" title="山西太原呼延水厂工程"><img src="86_thumb_G_1482456256904.jpg"></a>
                        </div>
                        <p><a href="detail.php-id=86.htm" title="山西太原呼延水厂工程">山西太原呼延水厂工程</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=87.htm" title="山西同煤集团新型干法水泥生产线工程"><img
                                src="87_thumb_G_1482456289692.jpg"></a></div>
                        <p><a href="detail.php-id=87.htm" title="山西同煤集团新型干法水泥生产线工程">山西同煤集团新型干法...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=88.htm" title="石家庄市桥西污水处理厂二期工程"><img
                                src="88_thumb_G_1482456317936.jpg"></a></div>
                        <p><a href="detail.php-id=88.htm" title="石家庄市桥西污水处理厂二期工程">石家庄市桥西污水处理...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=89.htm" title="唐山东郊污水处理厂扩建工程"><img
                                src="89_thumb_G_1482456341331.jpg"></a></div>
                        <p><a href="detail.php-id=89.htm" title="唐山东郊污水处理厂扩建工程">唐山东郊污水处理厂扩...</a></p>
                    </li>
                    <li>
                        <div><a href="detail.php-id=90.htm" title="天津卫辉水泥生产基地一期工程"><img
                                src="90_thumb_G_1482456371018.jpg"></a></div>
                        <p><a href="detail.php-id=90.htm" title="天津卫辉水泥生产基地一期工程">天津卫辉水泥生产基地...</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footlink inner">
        <div class="footlink_tit">
            <ul>
                <li><a href="javascrpt:void(0);" class="now">政府机构</a></li>
                <li><a href="javascrpt:void(0);">相关行业</a></li>
                <li><a href="javascrpt:void(0);">协会</a></li>
                <li><a href="javascrpt:void(0);">主流媒体</a></li>
                <li><a href="javascrpt:void(0);">子公司链接</a></li>
                <!--<li><a href="javascrpt:void(0);">友情链接</a></li>-->
            </ul>
        </div>

        <div class="footlink_nr">
            <ul>
                <li>
                    <a href="javascript:if(confirm('http://www.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.gov.cn/'">中国政府网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hebei.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hebei.gov.cn/'">河北省人民政府</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.mohurd.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.mohurd.gov.cn/'">中华人民共和国住房和城乡建设部</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hebjs.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hebjs.gov.cn/'">河北省住房和城乡建设厅</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hbsa.gov.cn:8081/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbsa.gov.cn:8081/'">河北省国资委</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hbdrc.gov.cn/web/web/index.htm  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbdrc.gov.cn/web/web/index.htm'">河北省发展和改革委员会</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hebgt.gov.cn/index.do?templet=index  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hebgt.gov.cn/index.do?templet=index'">河北省国土资源厅</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hecom.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hecom.gov.cn/'">河北省商务厅</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hbjswm.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbjswm.gov.cn/'">河北文明网</a>
                </li>
            </ul>
        </div>

        <div class="footlink_nr" style="display:none;">
            <ul>
                <li>
                    <a href="javascript:if(confirm('http://www.cacem.com.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.cacem.com.cn/'">工程建设施工</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.ccost.com/f  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.ccost.com/f'">中国建设工程造价信息网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.zjshome.com.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.zjshome.com.cn/'">造价师之家</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.chinabmnet.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.chinabmnet.com/'">国家建材网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.cnworld.net/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.cnworld.net/'">世界建筑建材总网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.jc.net.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.jc.net.cn/'">中国建筑材料价格在线</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.xnjcw.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.xnjcw.com/'">西部建材网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.jc001.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.jc001.cn/'">中国建材第一网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.jzqyw.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.jzqyw.com/'">中国建筑企业网</a>
                </li>
            </ul>
        </div>

        <div class="footlink_nr" style="display:none;">
            <ul>
                <li>
                    <a href="javascript:if(confirm('http://www.zgjzy.org/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.zgjzy.org/'">中国建筑业协会</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.ceca.org.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.ceca.org.cn/'">中国建设工程造价管理协会</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hbast.org.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbast.org.cn/'">河北省科学技术协会</a>
                </li>
            </ul>
        </div>

        <div class="footlink_nr" style="display:none;">
            <ul>
                <li>
                    <a href="javascript:if(confirm('https://www.baidu.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='https://www.baidu.com/'">百度</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.sina.com.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.sina.com.cn/'">新浪</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.qq.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.qq.com/'">腾讯</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.sohu.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.sohu.com/'">搜狐</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.163.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.163.com/'">网易</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.ifeng.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.ifeng.com/'">凤凰网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('https://www.taobao.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='https://www.taobao.com/'">淘宝网</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.youku.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.youku.com/'">优酷网</a>
                </li>
            </ul>
        </div>

        <div class="footlink_nr" style="display:none;">
            <ul>
                <li>
                    <a href="javascript:if(confirm('http://www.hbej.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbej.cn/'">河北省第二建筑工程有限公司</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hbjgzs.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbjgzs.com/'">河北建工集团装饰工程有限公司</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hbjgfdc.com.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbjgfdc.com.cn/'">河北建工集团房地产开发公司</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://hbjgwl.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://hbjgwl.com/'">河北建工物流有限公司</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://hbjggjg.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://hbjggjg.com/'">河北建工集团钢结构有限公司</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hbjgsjy.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hbjgsjy.com/'">河北建工集团建筑设计研究院</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hebaz.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hebaz.com/'">河北省安装工程有限公司</a>
                </li>
                <li>
                    <a href="javascript:if(confirm('http://www.hebsj.com/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.hebsj.com/'">河北省第四建筑工程有限公司</a>
                </li>
            </ul>
        </div>

        <!--<div class="footlink_nr" style="display:none;">
        <ul>
            <li><a href="http://www.bcegc.com/">北京建工集团</a></li>
            <li><a href="http://www.scg.com.cn/">上海建工集团有限公司</a></li>
            <li><a href="http://www.gsjtw.cc/">甘肃省建设</a></li>
            <li><a href="http://www.shxi-jz.com/">陕西建工集团总公司</a></li>
            <li><a href="http://www.aceg.com.cn/">安徽建工集团</a></li>
            <li><a href="http://www.zjsjg.com/">浙江省建工集团</a></li>
            <li><a href="http://www.chceg.com/">湖南建工集团总公司</a></li>
            <li><a href="http://www.ynjg.com/">云南建工集团总公司</a></li>
            </ul>
        </div>-->

    </div>
    <div class="copy">
        <div>
            <p class="first">版权所有&nbsp;&copy;&nbsp;<?php echo $config['copyright'];?>&nbsp;&nbsp;&nbsp;<?php echo $config['beian'];?>&nbsp;
                &nbsp;<a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/statics/jiangong/images/beian.png" style=" vertical-align:middle;"/>&nbsp;<?php echo $config['police'];?>&nbsp;</a>
            </p>
            <p>电话:&nbsp;<?php echo $config['tel'];?>&nbsp;&nbsp;&nbsp;传真:&nbsp;<?php echo $config['fax'];?>&nbsp;&nbsp;&nbsp;E-mail:<a href="<?php echo $config['email'];?>"><?php echo $config['email'];?></a></p>
            <p>地址:&nbsp;<?php echo $config['addr'];?>&nbsp;&nbsp;&nbsp;邮编:&nbsp;<?php echo $config['code'];?></p>
        </div>
    </div>
</div>

<div id="v_box" class="v_box">
    <a id="shut" class="shut">×</a>
    <h3>视频播放</h3>
    <div id="video" class="overlay-video-v2-plug">
        <embed id="CuPlayerVideo_video_embed" src="JZminiPlayer.swf" type="application/x-shockwave-flash"
               allowscriptaccess="always" allowfullscreen="true" wmode="Transparent"
               flashvars="autoplay=true&file=cn.flv&img=start.jpg" height="430" width="650">
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/statics/jiangong/js/index.js"></script>
