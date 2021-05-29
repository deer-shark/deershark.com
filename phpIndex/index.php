<?php 
$title ="首頁" ;
$main_title ="鹿鯊工作室" ;
$bg = "thisisengineering-raeng-M_NvKwSOkug-unsplash.jpg";
$url = "/";
                        
$nav = '<li class="nav-item">
    <a class="nav-link" aria-current="page" href="./rnrs">
        <span class="nav-link-span">RNRS實名制進場系統</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" aria-current="page" href="./support">
        <span class="nav-link-span">聯絡我們</span>
    </a>
</li>
                            '
?>
                            
<?php include('./_layout/_header.php')?>
<section class="info-container container" id="main">
    <div class="">
        <h1 id="info-download">下載遠端程式</h1>
        <p>請於下方列表中選擇適合您作業系統的版本。</p>
        <div class="row quention-part">
            <?php foreach ($data['label'] as $label) { ?>
                    <div class="col-sm">
                        <h2 id="info-download-<?php echo "{$label['name']}" ?>"><?php echo "{$label['name']}" ?></h2>
                        <div id="toc" class="toc-container list-group">
                            <?php foreach ($label['detail'] as $item) { ?>
                                    <a class="list-group-item list-group-item-action" href="./?redirect=<?php echo urlencode("{$item['link']}") ?>&dl=<?php echo urlencode("{$item['platform']}版的{$label['name']}") ?>" target="_blank"><?php echo "{$item['platform']}" ?></a>
                            <?php ;};?>
                        </div>
                        <hr id="col-sm-hr">
                    </div>
            <?php ;};?>
        </div>
    </div>
</section>

<?php include('./_layout/_footer.php')?>