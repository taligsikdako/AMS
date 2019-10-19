<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>
<div class="main">
<?php echo $news_item['text']; ?>
</div>
<p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>"></a></p>

<?php endforeach; ?>