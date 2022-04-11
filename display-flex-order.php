.max_width {
    max-width: 1200px;
}
.max-width-auto {
    margin-left: auto;
    margin-right: auto;
}
.max-height-y {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.justify-center {
    justify-content: center;
}
.flex-wrap {
    flex-wrap: wrap;
}
.flex {
    display: flex;
}

.item_wrapper {
    width: 250px;
}
.item_wrapper > div {
    padding: 5px;
    margin: 7px;
    border-radius: 7px;
    overflow: hidden;
}
.item_wrapper .bg {
    box-shadow: 0 0 5px #666;
    height: 150px;
    display: block;
    border-radius: 7px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.item_wrapper .custom_btn {
    align-items: stretch;
    overflow: hidden;
    border-radius: 5px;
    margin-top: 7px;
    transition: 0.4s all;
    cursor: pointer;
}
.item_wrapper .custom_btn .myicon {
    background-color: #f60;
    fill: #fff;
    width: 34px;
    padding: 9px;
}

.item_wrapper .custom_btn .txt {
    color: #fff;
    background-color: #024c80;
    flex-grow: 1;
    display: flex;
    align-items: center;
    padding: 0 10px;
}



<div class="max_width max-width-auto flex max-height-y flex-wrap justify-center">
        
                <div class="item_wrapper">
                    <div>
                        <a href="<?= $product_details_link . $product['product_slug'] ?>" class="bg" style="background-image: url('<?= base_url() . 'media/ecommerce/product_images/' . $product['product_images'] ?>')"></a>

                       <!-- <a href="<?= $product_details_link . $product['product_slug'] ?>" class="name font-semibold"><?= $product['product_main_title'] ?></a>

                        <a href="<?= $product_details_link . $product['product_slug'] ?>" class="original_price font-semibold">UGX <?= number_format($product['regular_price']) ?></a>

                        <a href="<?= $product_details_link . $product['product_slug'] ?>" class="price font-semibold">UGX <?= number_format($product['sale_price']) ?></a>

                        <a href="<?= $product_details_link . $product['product_slug'] ?>" class="desc font-semibold"><?= $product['product_sub_title'] ?></a>-->

                        <div class="custom_btn flex">
                            <span class="myicon ion-android-star"></span>
                            <span class="txt">some text</span>
                        </div>
                    </div>
                </div>
        
        </div>




