<aside class="home-sidebar">
    <div class="home-featured">
        <h3 class="authors-title">
            Các tác giả nổi bật nhất
        </h3>
        <div class="home-author-item">
            <a href="/collections/nha-van-mark-sullivan">
                <img src="//file.hstatic.net/1000259510/collection/author31_thumb.jpg" alt="Nhà văn Mark Sullivan">
                <span>Nhà văn Mark Sullivan</span>
            </a>
        </div>
        <div class="home-author-item">
            <a href="/collections/nha-van-j-k-rowling">
                <img src="//file.hstatic.net/1000259510/collection/author21_thumb.jpg" alt="Nhà văn J.K. Rowling">
                <span>Nhà văn J.K. Rowling</span>
            </a>
        </div>
        <div class="home-author-item">
            <a href="/collections/hoa-si-dav-pilkey">
                <img src="//file.hstatic.net/1000259510/collection/author4_thumb.jpg" alt="Họa sĩ Dav Pilkey">
                <span>Họa sĩ Dav Pilkey</span>
            </a>
        </div>
        <div class="home-author-item">
            <a href="/collections/nha-van-william-l-myers-jr">
                <img src="//file.hstatic.net/1000259510/collection/author5_thumb.jpg" alt="Nhà văn William L. Myers Jr.">
                <span>Nhà văn William L. Myers Jr.</span>
            </a>
        </div>
        <div class="home-author-item">
            <a href="/collections/nha-van-teresa-driscoll">
                <img src="//file.hstatic.net/1000259510/collection/author61_thumb.jpg" alt="Nhà văn Teresa Driscoll">
                <span>Nhà văn Teresa Driscoll</span>
            </a>
        </div>
        <div class="home-author-item">
            <a href="/collections/nha-van-renee-shafransky">
                <img src="//file.hstatic.net/1000259510/collection/author11_thumb.jpg" alt="Nhà văn Renee Shafransky">
                <span>Nhà văn Renee Shafransky</span>
            </a>
        </div>
    </div>

    <div class="home-featured">
        <h3 class="authors-title">
            Sách bán chạy nhất
        </h3>
        <?php for ($i=1; $i < 8; $i++) { ?>
            <div class="bestseller-item">
                <a class="bestseller-img" href="/collections/nha-van-mark-sullivan">
                    <img src="/images/products/<?= $i?>.png" alt="Nhà văn Mark Sullivan">
                </a>
                <div class="bestseller-info">
                    <a class="bestseller-title" href="/collections/nha-van-mark-sullivan">
    					A Criminal Defense (Philadelphia Legal)
    				</a>
                    <div class="bestseller-vendor">
    					William L. Myers Jr.
    				</div>
                    <div class="bestseller-price clearfix">
    					<span class="new-price">180,000₫</span>
    					<span class="old-price"><s>200,000₫</s></span>
    				</div>
                </div>
            </div>
        <?php } ?>

    </div>
</aside>
