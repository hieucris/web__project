<?php 
    if(!empty($data["dataStory"])){
        $data_Story = $data["dataStory"]["Story"];
        $data_Category = $data["dataStory"]["Category"];
    }
    $dataChapterEnd = array();
    if(!empty($data["dataChapterEnd"])){
        $dataChapterEnd = $data["dataChapterEnd"]["Chapter"];
    }
    $dataListChapter = array();
    if(!empty($data["dataListChapter"])){
        $dataListChapter = $data["dataListChapter"];
    }
    if(!empty($data["dataStoryCoincident"])){
        $dataStoryCoincident = $data["dataStoryCoincident"];
    }
?>
<h4><span><?php echo $data["dataStory"]["Story"]["name"]?></span></h4>

                    <?php $image_name =  $DataComponent->get_image(IMG_DIR . DS . STORIES_DIR . DS, $data_Story['id'].'.jpg');?>
                    <?php
                    $img =  $this->Html->image('/img/stories/'.$data_Story['id'].'.jpg', array('alt'=>$data_Story['name'],'style'=>"width:150px;height:150px;"));
                    echo $this->Html->link($img,
                        array(
                            'controller' => 'pages',
                            'action' => 'detail_story',
                            'id' => $data_Story['id'],
                            'slug' => strtolower(Inflector::slug($data_Story['name']))),
                            array('class'=> "thumbnail", 'escape'=>false, 'data-fancybox-group'=> "group1", "title"=>$data_Story['name'] )
                        );
                    ?>
                    <div class="span5">
                    <address>
                        <strong>Thể loại:</strong> <span><?php echo $data_Category["name"]?></span><br>
                        <strong>Số lượt xem:</strong> <span><?php echo $data_Story["view"]?></span><br>
                        <strong>Chap mới nhất:</strong> <span><?php echo !(empty($dataChapterEnd["name"])) ? $dataChapterEnd["name"] : "" ?></span><br>                                
                    </address>                                  
                    <h4><a href="#"><strong>Đọc truyện</strong></a></h4>
                </div>
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#home">Mô tả </a></li>
        <li class=""><a href="#profile">Danh sách chapter</a></li>
    </ul>
                    
                        
        <?php echo $data_Story["description"]?>
        <?php if(!empty($dataListChapter)):?>
                                    <?php foreach ($dataListChapter as $key => $value) { ?>
                                        <div class="col-sm-9">
                                            <?php $link =  Router::url(
                                                            array(
                                                                'controller' => 'pages',
                                                                'action'=> 'detail_chap',
                                                                'slug1'  => strtolower(Inflector::slug($data_Story['name'])),
                                                                'slug2'  => strtolower(Inflector::slug($value['Chapter'] ['name'])),
                                                                'id'     => $value['Chapter']['id'],
                                                            ));
                                            ?>
                                            <a href="<?php echo $link;?>"><?php echo $value["Chapter"]["name"]?></a>
         </div>
                                        <div class="col-sm-3">
                                            <?php echo (!empty($value['Chapter']['created']))? $value['Chapter']['created']:""?>
                                        </div>
                                    <?php }?>
                                <?php endif;?>
                                
    <?php if(!empty($dataStoryCoincident["item_active"])):?>
    <?php foreach ($dataStoryCoincident["item_active"] as $key => $value) { ?>
    <?php $image_name =  $DataComponent->get_image(IMG_DIR . DS . STORIES_DIR . DS, $value['Story']['id'].'.jpg');?>
         <?php
        $img =  $this->Html->image('/img/stories/'.$value['Story']['id'].'.jpg', array('alt'=>$value['Story']['name']));

        

        echo $this->Html->link($img,
        array(
            'controller' => 'pages',
            'action' => 'detail_story',
            'id' => $value['Story']['id'],
            'slug' => strtolower(Inflector::slug($value['Story']['name']))),
            array('class'=> "title", 'escape'=>false)
            );
            ?>
            </p>
            <?php
            echo $this->Html->link($value['Story']['name'],
            array(
            'controller' => 'pages',
            'action' => 'detail_story',
            'id' => $value['Story']['id'],
            'slug' => strtolower(Inflector::slug($value['Story']['name']))),
            array('class'=> "title")
            );
        ?>  
    <?php }?>     
    <?php endif;?>
    <?php if(!empty($dataStoryCoincident["item"])):?>    
    <?php foreach ($dataStoryCoincident["item"] as $key => $value) { ?>
    <p>
    <?php $image_name =  $DataComponent->get_image(IMG_DIR . DS . STORIES_DIR . DS, $value['Story']['id'].'.jpg');?>
    <?php
        $img =  $this->Html->image('/img/stories/'.$value['Story']['id'].'.jpg', array('alt'=>$value['Story']['name']));
        echo $this->Html->link($img,
        array(
        'controller' => 'pages',
        'action' => 'detail_story',
        'id' => $value['Story']['id'],
        'slug' => strtolower(Inflector::slug($value['Story']['name']))),
        array('class'=> "title", 'escape'=>false)
        );
        ?>
        </p>
        <?php
        echo $this->Html->link($value['Story']['name'],
        array(
        'controller' => 'pages',
        'action' => 'detail_story',
        'id' => $value['Story']['id'],
        'slug' => strtolower(Inflector::slug($value['Story']['name']))),
        array('class'=> "title")
        );
    ?>
    <?php }?>   
    <?php endif;?>                
                        

