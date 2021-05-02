<div class="header__nav">
    <?php $categoryMenu = $this->requestAction('/categories/menu/');
?>
        
            <?php if(!empty($categoryMenu)):?>
                 <ul class="navbar__list">
                     <?php foreach ($categoryMenu as $key => $value) { ?>
                        <li class="navbar__item">
                           
                                 <div class="menuURL">
                                 <i class ="fas fa-rocket"> </i>
                                <span><?php
                                        echo $this->Html->link($value['Category']['name'],
                                        array(
                                        'controller' => 'pages',
                                        'action' => 'view_genre',
                                        'id' => $value['Category']['id'],
                                        'slug' => strtolower(Inflector::slug($value['Category']['name']))),
                                        array('class'=> "")
                                        );
                                        ?> </span> 
                                </div>
                            </a>
                        </li>
            <?php }?>
            </ul>
            <?php endif;?>
        
</div>





