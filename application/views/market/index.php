
<h4><a href="<?php echo site_url('market/marketpost'); ?>">Make a Post</a></h4>






<div id="container" style="width:70%">



<?php foreach ($market as $market_item): ?>

<?php echo $market_item['title']; ?>
<div class = "main">
<?php echo $market_item['text']; ?>

<p><a href="<?php echo site_url('market/'.$market_item['slug']); ?>">View article</a></p>
</div>
<?php endforeach; ?>

<style type="text/css">
    #market-link a
    {
      color: #fff;
      background-color: #337ab7;
      border-radius: 4px;
    }
    </style>
