<div class="app">
        <div class="slider">
            <div class="gallery">
                <div class="gallery-container">
                  <img class="gallery-item" src="app/webroot/template_story/assets/img/1.jpg">
                  <img class="gallery-item" src="app/webroot/template_story/assets/img/2.jpg">
                  <img class="gallery-item" src="app/webroot/template_story/assets/img/3.jpg">
                  <img class="gallery-item" src="app/webroot/template_story/assets/img/4.jpg">
                  <img class="gallery-item" src="app/webroot/template_story/assets/img/5.jpg">
                </div>
                <div class="gallery-controls">
                    <button class="gallery-controls-previous">
                        "previous"                   
                    </button>
                </div>
              </div>
        </div>

        <div class="storyBook__favorite storyBook">
            <div class="grid wide">
                <div class="">
                    
                </div>
                <div class="story__wrap">
                    <div class="slider__story wow fadeInUp">
                        <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Truyện <strong>Mới nhất</strong></span></span></span>
                        <span class="pull-right">
                            <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                        </span>
                    </h4>
                    <?php if(!empty($dataStoryNewUpdate)):?>
                    <div id="myCarousel" class="myCarousel carousel slide">
                        <div class="carousel-inner">
                            <?php if(!empty($dataStoryNewUpdate["item_active"])):?>
                            <div class="active item">
                                <ul class="thumbnails">
                                    <?php foreach ($dataStoryNewUpdate["item_active"] as $key => $value) { ?>

                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <p>
                                                    <a href="product_detail.html">
                                                        <?php
                                                        $img = $this->Html->image('/img/stories/'.$value['Story']['id'].'.jpg', array('alt'=>$value['Story']['name'],'style'=>"width:100px;height:100px;"));

                                                        echo $this->Html->link($img,
                                                        array(
                                                            'controller' => 'pages',
                                                            'action' => 'detail_story',
                                                            'id' => $value['Story']['id'],
                                                            'slug' => strtolower(Inflector::slug($value['Story']['name']))),
                                                            array('class'=> "title", 'escape'=>false)
                                                        );
                                                        ?>
                                                    </a>
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
                                            </div>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <?php endif;?>
                            
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Truyện <strong>Xem nhiều</strong></span></span></span>
                        <span class="pull-right">
                            <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                        </span>
                    </h4>
                    <?php if(!empty($dataStoryView)):?>
                    <div id="myCarousel-2" class="myCarousel carousel slide">
                        <div class="carousel-inner">
                            <?php if(!empty($dataStoryView["item_active"])):?>
                            <div class="active item">
                                <ul class="thumbnails">                                             
                                    <?php foreach ($dataStoryView["item_active"] as $key => $value) { ?>
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <p>

                                                    <a href="product_detail.html">
                                                        
                                                        <?php
                                                        $img = $this->Html->image('/img/stories/'.$value['Story']['id'].'.jpg', array('alt'=>$value['Story']['name'],'style'=>"width:100px;height:100px;"));
                                                        
                                                        echo $this->Html->link($img,
                                                        array(
                                                            'controller' => 'pages',
                                                            'action' => 'detail_story',
                                                            'id' => $value['Story']['id'],
                                                            'slug' => strtolower(Inflector::slug($value['Story']['name']))),
                                                            array('class'=> "title", 'escape'=>false)
                                                        );
                                                        ?>
                                                    </a>
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
                                            </div>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <?php endif;?>
                            
                        </div>
                    </div>
                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        

    </div>