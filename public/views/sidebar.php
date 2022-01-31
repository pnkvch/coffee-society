<div>
  <?php if (!isset($_COOKIE['userId'])) {
    header('Location: /login');
  }?>
  <aside class="sidebar">
    <div class="upper-sidebar">
      <img class="logo-sidebar" src="public/images/logo.svg" />
      <div class="links">
        <a href="/feed">Feed</a>
        <a href="/recipies">Coffee Recipies</a>
        <a href="/explore">Explore</a>
        <a href="/people">People</a>
      </div>
    </div>
    <div class="lower-sidebar">
      <button class="button">Publish a post</button>
      <a href="/blog">My Blog</a>
      <a href="/logout">Log Out</a>
    </div>
  </aside>
</div>