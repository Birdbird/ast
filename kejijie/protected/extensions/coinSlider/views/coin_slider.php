<div class="coin-slider-container">
    <div id="<?php print $this->getId(); ?>">
        <?php foreach ($this->items as $item) : ?>
            <?php
            $info = "";
            
            if(isset($item['info'])){
                $info = sprintf("<span><b>%s</b><br /> %s</span>", $item['info']['title'], $item['info']['text']);
            }
            print CHtml::link(CHtml::image($item['image'], $item['alt']) . $info, $item['url'], array('target' => '_blank'));
            ?>
        <?php endforeach; ?>
    </div>
</div>