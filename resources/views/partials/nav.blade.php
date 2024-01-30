
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">A Blog</a>
        </li>
       <li class="nav-item">
          <a class="nav-link {{ ($title === "Home")?'active':''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About")?'active':''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Posts")?'active':''}}" href="/blog">Blog</a>
        </li>
      </ul>
    </div>
  </nav>

{{-- 
App\Models\Post::create([
  'title' => 'judul ketiga',
  'slug'=>'judul-ketiga',
  'excerpt'=>'Lorem ipsum ketiga odio laborum magni, voluptatum nisi fugiat nostrum omnis',
  'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem exercitationem quidem qui odio laborum magni, voluptatum nisi fugiat nostrum omnis perspiciatis ut illo amet officiis, optio tenetur aspernatur eveniet cum, rerum totam ab consequuntur accusamus! Maxime itaque laboriosam harum repellat quam reprehenderit ipsam voluptates, repellendus natus, accusantium consequuntur doloribus in exercitationem.</p> <p> Hic omnis in, vero eligendi aut dolorem recusandae ab nam dignissimos qui fugiat, quae et nesciunt suscipit, veniam saepe? Fugiat debitis, doloribus veniam quasi provident quam repellat neque ullam consectetur, ad eaque libero aliquam non, dicta exercitationem perspiciatis reprehenderit aliquid sint et. Ut pariatur, rerum, cumque, iusto sit iure ipsa officia perspiciatis laboriosam quod ratione excepturi officiis soluta sed! Ex, quaerat.</p> <p> Quas magni excepturi eius laborum, quae quaerat recusandae laudantium iure mollitia et ab magnam eum, consectetur atque ea. Rem delectus ipsum corporis temporibus et aliquam consectetur ipsam ducimus.</p>',
]) 
--}}




   