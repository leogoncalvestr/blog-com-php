<?php
include_once("templates/header.php");

if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
}
?>
 <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?=$BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse qui at eveniet velit sapiente ab quibusdam? Sint in iusto doloribus, libero ipsum magni, est, tenetur deserunt omnis doloremque aliquam laborum!
        Ipsa natus consequuntur obcaecati beatae soluta culpa dolore perspiciatis quidem aliquam cumque ipsum odit voluptatum earum nostrum minus, aut qui maiores nihil ad molestiae repudiandae. Magnam eaque doloribus facere facilis.
        Quis ea ipsa, cum ad maiores exercitationem quam quisquam ullam doloremque, rerum minus tempora enim molestias. Reiciendis aliquid ullam, iste quisquam, modi cumque delectus debitis sint, sequi et placeat? Nisi.
        Ab ullam tenetur enim quibusdam dolore totam vero iste, tempore delectus sit dolorem nesciunt optio, autem magni exercitationem quod esse dicta veniam eveniet omnis nam? Delectus esse beatae iure porro.
        Cumque consectetur repellat eaque a et accusantium architecto exercitationem molestias id sint minus delectus, quos cum vitae eius, nemo esse porro aliquid quisquam ducimus eum obcaecati! Consequuntur ab reiciendis quia.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse qui at eveniet velit sapiente ab quibusdam? Sint in iusto doloribus, libero ipsum magni, est, tenetur deserunt omnis doloremque aliquam laborum!
        Ipsa natus consequuntur obcaecati beatae soluta culpa dolore perspiciatis quidem aliquam cumque ipsum odit voluptatum earum nostrum minus, aut qui maiores nihil ad molestiae repudiandae. Magnam eaque doloribus facere facilis.
        Quis ea ipsa, cum ad maiores exercitationem quam quisquam ullam doloremque, rerum minus tempora enim molestias. Reiciendis aliquid ullam, iste quisquam, modi cumque delectus debitis sint, sequi et placeat? Nisi.
        Ab ullam tenetur enim quibusdam dolore totam vero iste, tempore delectus sit dolorem nesciunt optio, autem magni exercitationem quod esse dicta veniam eveniet omnis nam? Delectus esse beatae iure porro.
        Cumque consectetur repellat eaque a et accusantium architecto exercitationem molestias id sint minus delectus, quos cum vitae eius, nemo esse porro aliquid quisquam ducimus eum obcaecati! Consequuntur ab reiciendis quia.</p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
    <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category?></a></li>
        <?php endforeach; ?> 
    </ul>
</aside>
 </main>
<?php
include_once("templates/footer.php");
?>