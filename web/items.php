


<div class="flex-container">

    <?php
        $itemList = array();
        for ($i = 0; $i < 8; $i++) {
            array_push($itemList, "items/item".$i.".php");
        }

        foreach ($itemList as $item) {
            include $item;
        }
    ?>

    <!--No content, just used to make the form of items align-->
    <div class="evenFlex"></div>
</div>