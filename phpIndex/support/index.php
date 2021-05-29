<?php
    $data = json_decode( file_get_contents('./software.json') , true );
?>
<?php if($_GET['redirect']==null){?>

<?php 
$title ="聯絡我們" ;
$main_title ="客戶支援" ;
$bg = "thisisengineering-raeng-M_NvKwSOkug-unsplash.jpg";
$url = "/support";
                        
$nav = '<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">
    <span class="nav-link-span">客戶支援</span>
</a>
</li>
';
?>
                            
<?php include('../_layout/_header.php')?>
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

<?php include('../_layout/_footer.php');?>
<?php ;}else{ include('redirect.php');};?>
